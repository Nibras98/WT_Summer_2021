<?php
include('../model/ad.php');
session_start();

$err="";

if(isset($_POST["submit"]))
{
    if(empty($_POST["email"]))
    {
         $err="enter the value";
    }
    else
    {
        $email=$_POST['email'];
$password=$_POST['password'];

$connection = new ad();
$conobj=$connection->strt();

$userQuery=$connection->check($conobj,"admn",$email,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
header("loction:../view/aduserdata.php");

   }
 else {
$err = "Username or Password is invalid";
}
        $connection->CloseCon($conobj);
    }
}
?>