<?php
include('../model/ad.php');

//$user = $_POST['uname'];


$connection = new ad();
$conobj=$connection->strt();

$MyQuery=$connection->show($conobj,"admn" );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>fname</th><th>lname</th><th>mail</th><th>companyname</th><th>password</th><th>nid</th><th>adate</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["mail"]."</td><td>".$row["aname"]."</td><td>".$row["password"]."</td><td>".$row["nid"]."</td><td>".$row["adate"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>

  <button type="button"><a href="adjquery.php"> admin data hare</a></button>

