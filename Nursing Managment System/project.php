<?php
class project
{
    function strt()
    {
        $host="localhost";
        $user="root";
        $pass="";
        $name="project";

      
        $conn=new mysqli($host,$user,$pass,$name);
        return $conn;
    }
    function insert($conn,$table,$name,$contact,$id,$hname,$hid,$email,$password,$gender)
    {
        $ins=$conn->query("insert into $table VALUES('$name','$contact','$id','$hname','$hid','$email','$password','$gender')");
        return $ins;
    }

    
    function add ($conn,$table,$name,$contact,$id,$setchedule,$serial)
    {
      
       $iner = $conn->query("INSERT INTO $table VALUES('$name', '$contact','$id','$setschedule','$serial')");
       return $iner;
    }
  
    function check($conn,$table,$email,$password)
    {
        $re = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
        
        return $re;
    }
    function GetUserByUname($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE name='$uname'");
 return $result;
 }


 function del($conn,$table,$nid)
 {
     //$sql = "UPDATE $table SET lname='$lname', mail='$mail' WHERE nid='$username'";
    $d="DELETE FROM $table WHERE id='$nid'";
    
    return  $d;
 }

   function UpdateNurse($conn,$table,$name,$hname,$email,$hid)
   {
     $sql = "UPDATE $table SET name='$name', email='$email', hname='$hname' WHERE id='$name'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
  }

//  function del($conn,$table,$id)
//   {
//     $d="DELETE FROM $table WHERE id='$id'";
    
//     return  $d;
//   }


    function CloseCon($conn)
    {
       $conn -> close();
    }
}
?>