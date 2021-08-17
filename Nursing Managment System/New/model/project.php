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
    function insert($conn,$table,$fname,$lname,$contact,$nid,$email,$password,$gender,$Address)
    {
       
        $ins=$conn->query("insert into $table VALUES('$fname','$lname','$contact','$nid','$email','$password','$gender','$Address')");
        return $ins;
    }
    function add ($conn,$table,$UserName,$Contact,$Serial,$Payment,$Problem)
    {
      
       $iner = $conn->query("INSERT INTO $table VALUES('$UserName', '$Contact','$Serial','$Payment','$Problem')");
        return $iner;
    }
  
    function check($conn,$table,$email,$password)
    {
        $re = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
        
        return $re;
    }

    function updatedata($conn,$table,$username,$dob,$Serial,$Payment,$Problem,$gender)
    {
        $sql = "UPDATE $table SET dob='$dob', serial='$Serial',payment='$Payment',problem='$Problem',gender='$gender' WHERE username='$username'";
   
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