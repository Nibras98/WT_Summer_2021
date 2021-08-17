<?php
class na
{
    function strt()
    {
        $erhost="localhost";
        $eruser="root";
        $erpass="";
        $ername="project1";

        $conn=new mysqli($erhost,$eruser,$erpass,$ername);
        return $conn;



    }

    function insert($conn,$table,$fname,$lname,$aname,$nid,$contact,$mail,$password,$posi,$adate)
    {
       // $result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcategory',$pprice,'$pimage')");
        $ins=$conn->query("insert into $table VALUES('$fname','$lname','$aname','$nid','$contact','$mail','$password','$posi','$adate')" );
        return $ins;
    }

    function check($conn,$table,$mail,$password)
    {
        //$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
        $re = $conn->query("SELECT * FROM ".$table." WHERE mail='".$mail."' AND password='".$password."'");
        
        return $re;
    }

    function UpdateUser($conn,$table,$username,$name,$email,$hname)
    {
        $sql = "UPDATE $table SET name='$name', email='$email', hname='$hname' WHERE id='$username'";
   
       if ($conn->query($sql) === TRUE) {
           $result= TRUE;
       } else {
           $result= FALSE ;
       }
       return  $result;
    }

 function show($conn,$table)
 {
     $sh=$conn->query("SELECT * FROM ".$table."");
     return $sh;
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



    function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>