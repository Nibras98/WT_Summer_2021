<?php
include('../model/na.php');


 $error="";

if (isset($_POST['update'])) {


$connection = new na();
$conobj=$connection->strt();
$id=$_POST['id'];
$hname=$_POST['hname'];
//$contact=$_POST['contact'];
$userQuery=$connection->UpdateUser($conobj,"nurseregistration",$id,$_POST['name'],$_POST['email'],$hname);
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
