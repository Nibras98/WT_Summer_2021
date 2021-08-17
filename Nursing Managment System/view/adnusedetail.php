<?php
include('../model/na.php');

//$user = $_POST['uname'];



$connection = new na();
$conobj=$connection->strt();

$MyQuery=$connection->show($conobj,"nurseregistration" );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>name</th><th>contact</th><th>id</th><th>hname</th><th>hid</th><th>email</th><th>password</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["id"]."</td><td>".$row["hname"]."</td><td>".$row["hid"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

