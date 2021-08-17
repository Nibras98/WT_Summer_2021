<?php
include('../model/pa.php');

//$user = $_POST['uname'];



  $error="";

if (isset($_POST['delete'])) {


$connection = new pa();
$conobj=$connection->strt();
$nid=$_POST['nid'];

$userQuery=$connection->del($conobj,"paregistration",$nid);
$error="bh";

if ($conobj->query($userQuery) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  


//$connection->CloseCon($conobj);


}
else
{
  
$connection = new pa();
$conobj=$connection->strt();

$MyQuery=$connection->GetUserByUname($conobj,"paregistration",$_POST['uname'] );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>fname</th><th>lname</th><th>email</th><th>contact</th><th>nid</th><th>gender</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["nid"]."</td><td>".$row["gender"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

}



?>