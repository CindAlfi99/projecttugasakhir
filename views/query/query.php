<?php 
require '../../config/config.php';
$id = $_POST['id'];
$query = mysqli_query($con, "SELECT * FROM laundry_satuan WHERE id = $id");

 ?>