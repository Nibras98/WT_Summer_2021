<?php
include('../model/db.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["username"],$_POST['firstname'],$_POST['email']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}
else if (isset($_POST['search'])) {
if (empty($_POST['usernames'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->searchUser($conobj,"student",$_POST['usernames']);

/*if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}*/
$connection->CloseCon($conobj);

}
}


?>