<?php
include('../model/na.php');

//$user = $_POST['uname'];



$error="";

if (isset($_POST['delete'])) {


$connection = new na();
$conobj=$connection->strt();
$nid=$_POST['id'];

$userQuery=$connection->del($conobj,"nurseregistration",$nid);
$error="bh";

if ($conobj->query($userQuery) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  


$connection->CloseCon($conobj);


}

else
{
  
$connection = new na();
$conobj=$connection->strt();

$MyQuery=$connection->GetUserByUname($conobj,"nurseregistration",$_POST['uname'] );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>name</th><th>contact</th><th>id</th><th>hname</th><th>email</th><th>gender</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["id"]."</td><td>".$row["hname"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

}



?>