<?php

$databaseReport="";
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "nursingservice";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUserForLogin($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }


 function RegUser($conn,$table, $name, $email, $contact_number , $username , $gender , $dob, $address , $user_type , $password , $confirm_password){
    $sql="INSERT INTO register (name, email, contact_number , username , gender , dob, address , user_type , password , confirm_password )
    VALUES ('$name','$email','$name', '$email', '$contact_number' , '$username' , '$gender' , '$dob', '$address' , '$user_type' , '$password' , '$confirm_password')";    
    $res = $conn->query($sql);
    if($res){
        $databaseReport = "new record inserted";
    }
    else{
        $databaseReport = "error occurred".$conn->connect_error;
    }
}

function CheckUsername ($conn, $table, $username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
    return $result;
 } 

function UpdateUser($conn,$table, $name, $email, $username, $password, $nid, $dob, $mobile,$address)
 {

    $sql = "UPDATE $table SET name='$name', email='$email', password='$password', nid='$nid',dob='$dob' ,mobile='$mobile',address='$address' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function ShowAllspec($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE cusUsername ='". $id."' ");
 return $result;
 }
 
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM ". $table." ");
 return $result;
 }
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>