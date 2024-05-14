<?php
include_once "../config/database.php";
if(isset($_GET['admin_id'])){
    $admin_id = $_GET['admin_id'];

    $sql = mysqli_query($conn, "DELETE FROM admin WHERE (unique_id = $admin_id) AND (unique_id != 1715514510)");
    header("Location: ../admin.php");
}

if(isset($_GET['category_id'])){
    $category_id = $_GET['category_id'];

    $sql = mysqli_query($conn, "DELETE FROM categories WHERE unique_id = $category_id");
    header("Location: ../category.php");
}

if(isset($_GET['food_id'])){
    $food_id = $_GET['food_id'];

    $sql = mysqli_query($conn, "DELETE FROM food WHERE unique_id = $food_id");
    header("Location: ../food.php");
}

if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];

    $sql = mysqli_query($conn, "DELETE FROM orders WHERE id = $order_id");
    header("Location: ../order.php");
}
?>