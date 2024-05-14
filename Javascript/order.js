const order = document.querySelector('#order')
let orderForm= document.querySelector('#order-form')
let orderError = document.querySelector('#order-error')

order.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'api/php/order.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                location.href = 'index.php'
                order.disabled = true
            }else{
                orderError.innerHTML = ` <div class='alert alert-danger text-center'>
                                        <strong>${result}!</strong>
                                        </div>`
                                        
            }
        }
    }
    const formdata = new FormData(orderForm)
    xhr.send(formdata)
})