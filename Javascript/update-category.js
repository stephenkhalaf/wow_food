const updateCategory = document.querySelector('#update-category')
let updateCategoryForm = document.querySelector('#update-category-form')



updateCategory.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-category.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Category Updated!</strong>
                             </div>`
                updateCategory.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateCategoryForm)
    xhr.send(formdata)
})