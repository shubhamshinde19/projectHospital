<?php
session_start();
include('connection.php');


$id = $_GET['id'];


$sql = "DELETE FROM inventory WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
if($res){
    header('location:inventory.php');
 } else {
     echo "fail";
 }


?>