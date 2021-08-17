<?php
include('../model/project.php');

$error="";

if (isset($_POST['delete'])) {


$connection = new project();
$conobj=$connection->start();
$nid=$_POST['nid'];

$userQuery=$connection->del($conobj,"paregistration",$nid);
$error=" ";

if ($conobj->query($userQuery) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  


$connection->CloseCon($conobj);


}


?>