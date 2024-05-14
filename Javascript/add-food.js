const addFood = document.querySelector('#add-food')
let addFoodForm= document.querySelector('#add-food-form')
let addFoodError = document.querySelector('#add-food-error')

addFood.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-food.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                addFoodError.innerHTML = `<div class='alert alert-success'>
                            <strong>Food Added!</strong>
                             </div>`
                addFood.disabled = true
            }else{
                addFoodError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addFoodForm)
    xhr.send(formdata)
})