<?php
session_start(); 
include('../model/project.php');

$radio1=$radio2=$radio3=$radioValidation=$dob="";
$Serial="";
$Payment="";
$Problem="";
 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['Serial']) || empty($_POST['Payment']) || empty($_POST['Problem'])) {
$error = "input given is invalid";
}
else
{
$connection=new project();
$con=$connection->start();
$sql=$connection->updatedata($conn,"padetails",$_SESSION["username"],$_SESSION=["dob"], $_SESSION=["Serial"],$_SESSION=["Payment"],$_SESSION=["Problem"],$_SESSION=["gender"]);
if($sql==TRUE)

{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conn);

}
}


?>
