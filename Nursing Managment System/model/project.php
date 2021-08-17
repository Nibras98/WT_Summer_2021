<?php

class project
{
    function start()
    {
        $host="localhost";
        $user="root";
        $pass="";
        $name="project";

        $conn=new mysqli($host,$user,$pass,$name);;
        return $conn;
    }
    function insert($conn,$table,$ID,$fname,$lname,$contact,$nid,$email,$password,$gender,$Address)
    {
       
        $ins=$conn->query("insert into $table VALUES('$ID','$fname','$lname','$contact','$nid','$email','$password','$gender','$Address')");
        return $ins;
    }
    function add ($conn,$table,$UserName,$Contact,$Serial,$Payment,$Problem)
    {
      
       $iner = $conn->query("INSERT INTO $table VALUES('$UserName', '$Contact','$Serial','$Payment','$Problem')");
        return $iner;
    }
  
    function check($conn,$table,$email,$password)
    {
        $ins = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
        
        return $ins;
    }
    function getByName($userinfo){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from register where username='{$userinfo}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
    function ShowAll($conn,$table)
    {
   $result = $conn->query("SELECT * FROM  $table");
    return $result;
    }
    function GetUserByUname($conn,$table, $uname)
    {
   $result = $conn->query("SELECT * FROM  $table WHERE fname='$uname'");
    return $result;
    }
   

    function UpdateUser($conn,$table,$username,$fname,$email,$contact)
 {
     $sql = "UPDATE $table SET fname='$fname', email='$email', contact='$contact' WHERE nid='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

   
 function del($conn,$table,$nid)
 {
    $d="DELETE FROM $table WHERE nid='$nid'";
    
    return  $d;
 }
    function CloseCon($conn)
    {
       $conn -> close();
    }
}
?>