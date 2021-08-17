<?php
require_once('userService.php');


function getAllProduct(){
    $conn = dbConnection();

    if(!$conn){
        echo "DB connection error";
    }

    $sql = "select * from product_list";
    $result = mysqli_query($conn, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    return $users;
}

function getByProductID($id){
    $conn = dbConnection();

    if(!$conn){
        echo "DB connection error";
    }

    $sql = "select * from product_list where id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function complainDelete($complain_id){
    $conn = dbConnection();
    if(!$conn){
        echo "DB connection error";
    }

    $sql = "delete from  complain where id={$complain_id}";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

// create purchased order

function insertOrderPlace($purchase){
    $conn = dbConnection();

    if(!$conn){
        echo "DB connection error";
    }
   
    $sql = "insert into purchase_history values('', '{$purchase['product_id']}', '{$purchase['order_from']}', '{$purchase['user_id']}', '{$purchase['order_date']}', '{$purchase['customer_name']}', '{$purchase['contact_number']}', '{$purchase['address']}')";		
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}


?>