<?php
include('../model/project.php');

$user = $_POST['uname'];

if($user!="")
{
$connection = new project();
$conobj=$connection->start();

$MyQuery=$connection->GetUserByUname($conobj,"paregistration",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>fname</th><th>lname</th><th>contact</th><th>nid</th><th>email</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["contact"]."</td><td>".$row["nid"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}