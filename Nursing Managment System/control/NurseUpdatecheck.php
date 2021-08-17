<?php
// session_start(); 
include('../model/project.php');

$error="";

if (isset($_POST['update'])) {

    $connection = new project();
    $conobj=$connection->strt();
    $id=$_POST['id'];
    $hname=$_POST['hname'];
    // $contact=$_POST['contact'];

$userQuery=$connection->UpdateNurse($conobj,"nurseregistration",$_POST['name'],$id,$hname,$_POST['email']);
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


?>
