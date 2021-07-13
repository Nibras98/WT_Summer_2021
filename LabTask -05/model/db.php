<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function AddProduct($conn,$table,$pname,$pdesc,$pcategory,$pprice,$pimage)
 {
    $result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcategory',$pprice,'$pimage')");
    return $result;
 }

 function showProduct($conn,$table,$pcategory){
    $result = $conn->query("SELECT * FROM ". $table." WHERE P_Category='". $pcategory."'");
    return $result;
}

 function ShowAll($conn,$table)
 {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$gender,$dob)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender',dob='$dob' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>