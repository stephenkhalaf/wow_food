const updateOrder = document.querySelector('#update-order')
let updateOrderForm = document.querySelector('#update-order-form')



updateOrder.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-order.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Order Updated!</strong>
                             </div>`
                updateOrder.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateOrderForm)
    xhr.send(formdata)
})