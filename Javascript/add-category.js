const addCategory = document.querySelector('#add-category')
let addCategoryForm= document.querySelector('#add-category-form')
let addCategoryError = document.querySelector('#add-category-error')

addCategory.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-category.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                addCategoryError.innerHTML = `<div class='alert alert-success'>
                            <strong>Category Added!</strong>
                             </div>`
                addCategory.disabled = true
            }else{
                addCategoryError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addCategoryForm)
    xhr.send(formdata)
})