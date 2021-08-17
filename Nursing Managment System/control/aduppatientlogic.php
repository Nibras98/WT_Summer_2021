<?php
include('../model/pa.php');


 $error="";

if (isset($_POST['update'])) {


$connection = new pa();
$conobj=$connection->strt();
$nid=$_POST['nid'];
$contact=$_POST['contact'];
//$contact=$_POST['contact'];
$userQuery=$connection->UpdateUser($conobj,"paregistration",$nid,$_POST['fname'],$_POST['email'],$contact);
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
