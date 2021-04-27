<?php 
require '../config/DB.php';
$id = $_GET['id'];
$status = $_GET['status'];
if(isset($id)){
    $query =mysqli_query($connection, "UPDATE order_masuk SET status='$status' WHERE id=$id");
   
    header("Location: order.php");

}