<?php
session_start();

include('connection.php');

if(isset($_POST['update'])){
    extract($_POST);

    $id = $_POST['id'];

    $sql = "UPDATE `inventory` SET `Product_Name`='$product',`Product_Description`='$description',`Quantity_Order`='$order',`MFG_Date`='$mfg',`EXP_Date`='$exp',`Supplier`='$supplier' WHERE id='$id'";
    
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location:Inventory.php');
     } else {
         echo "fail";
     }
}
?>