<?php
session_start();
$conn = mysqli_connect("localhost","root","","wow_food");
if(!$conn){
    die("Couldn't connect to the database...");
}