<?php
include('../model/db.php');


$error="";
if (isset($_POST['search'])) {
    if (empty($_POST['srch_product'])) {
    $error = "Product not found";
    }
    else
    {
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->showProduct($conobj,"product",$_POST['srch_username']);
    
    $connection->CloseCon($conobj);
    }
}
?>