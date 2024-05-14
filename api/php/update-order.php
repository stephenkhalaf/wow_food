<?php
include_once "../config/database.php";
$id = $_POST['id'];
$error = '';
$food = mysqli_real_escape_string($conn, $_POST['food']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$qty = mysqli_real_escape_string($conn, $_POST['qty']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
$customer_contact = mysqli_real_escape_string($conn, $_POST['customer_contact']);
$customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
$customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);

if(!empty($food) && !empty($price) && !empty($qty) && !empty($customer_name) && !empty($customer_contact) 
&& !empty($customer_email) && !empty($customer_address)){
    $sql = mysqli_query($conn, "UPDATE orders SET food = '$food',price=$price,qty=$qty,status='$status',customer_name='$customer_address',customer_contact='$customer_contact',customer_email='$customer_email',customer_address='$customer_address' WHERE id=$id");


    if($sql){
        echo "success";
    }else{
        $error =  "An error occurred!";
    }
}else{
    $error = 'All fields are required!';
}

echo $error;

?>