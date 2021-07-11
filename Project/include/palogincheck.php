<?php

session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];

   }
 
}



?>
