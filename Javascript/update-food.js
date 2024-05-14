const updateFood = document.querySelector('#update-food')
let updateFoodForm = document.querySelector('#update-food-form')



updateFood.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-food.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Food Updated!</strong>
                             </div>`
                updateFood.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateFoodForm)
    xhr.send(formdata)
})