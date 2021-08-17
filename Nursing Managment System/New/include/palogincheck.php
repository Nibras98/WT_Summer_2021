<?php
include('../model/project.php');
session_start();

$error="";

if(isset($_POST["submit"]))
{
    if(empty($_POST["email"]))
    {
         $error="enter the value";
    }
    else
    {
        $email=$_POST['email'];
$password=$_POST['password'];

$connection = new project();
$conobj=$connection->start();

$userQuery=$connection->check($conobj,"patient",$email,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
header("loction:../view/FirstPage.php");

   }
 else {
$error = "Username or Password is invalid";
}
        $connection->CloseCon($conobj);
    }
}
?>