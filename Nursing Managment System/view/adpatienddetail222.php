<?php
include('../model/pa.php');

//$user = $_POST['uname'];


$connection = new pa();
$conobj=$connection->strt();

$MyQuery=$connection->show($conobj,"paregistration" );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>fname</th><th>lname</th><th>email</th><th>contact</th><th>password</th><th>gender</th><th>Address</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["password"]."</td><td>".$row["gender"]."</td><td>".$row["Address"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

