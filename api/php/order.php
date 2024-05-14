<?php
include_once "../config/database.php";
$error = '';
$food = mysqli_real_escape_string($conn, $_POST['food']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$qty = mysqli_real_escape_string($conn, $_POST['qty']);
$order_date = date("Y-m-d H:i:s");
$status = 'Delivered';
$customer_name = mysqli_real_escape_string($conn, $_POST['full-name']);
$customer_contact = mysqli_real_escape_string($conn, $_POST['contact']);
$customer_email = mysqli_real_escape_string($conn, $_POST['email']);
$customer_address = mysqli_real_escape_string($conn, $_POST['address']);

if(!empty($food) && !empty($price) && !empty($qty) && !empty($customer_name) && !empty($customer_contact) 
&& !empty($customer_email) && !empty($customer_address)){
    $sql = mysqli_query($conn, "INSERT INTO orders 
(food,price,qty,order_date,status,customer_name,customer_contact,customer_email,customer_address) 
VALUES ('$food',$price,$qty,'$order_date','$status','$customer_address','$customer_contact','$customer_email','$customer_address')");


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