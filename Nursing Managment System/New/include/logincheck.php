<?php
include('../model/project.php');
session_start(); 

 $error="";

if (isset($_POST['submit'])) {
if (empty($_POST['UserName']) ) {
$error = "Username  is invalid";
}
else
{
$UserName=$_POST['UserName'];
$connection=new project();
$con=$connection->start();
$sql=$connection->updatedata($conn,"padetails",$UserName);

if ($sql->num_rows > 0) {
$_SESSION["UserName"] = $UserName;


   }
 else {
$error = "Username is invalid";
}
$connection->CloseCon($conn);

}
}


?>
