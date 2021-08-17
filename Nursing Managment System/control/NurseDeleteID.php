<?php
include('../model/project.php');

$error="";

if (isset($_POST['delete'])) {


$connection = new project();
$conobj=$connection->strt();
$id=$_POST['id'];

$userQuery=$connection->del($conobj,"nurseregistration",$id);
$error="error occured";

if ($conobj->query($userQuery) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  


$connection->CloseCon($conobj);


}


?>
