<?php
include('../model/ad.php');


 $error="";

if (isset($_POST['update'])) {


$connection = new ad();
$conobj=$connection->strt();
$nid=$_POST['nid'];
$aname=$_POST['aname'];
$contact=$_POST['contact'];
$userQuery=$connection->UpdateUser($conobj,"admn",$nid,$_POST['lname'],$_POST['mail'],$aname,$contact);
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
