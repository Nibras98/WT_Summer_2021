<?php
include('../model/db.php');

$user = $_POST['uname'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"register",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>name</th><th>email</th><th>gender</th><th>dob</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}