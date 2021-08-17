<?php
	 session_start();
	 extract($_SESSION);
	 
	 unset($_SESSION['username']);
	 

  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Nursing Service System</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
  </head>
 <body>
			<h1 align='center' >Nursing Service System</h1>
 <table >
    <tr  style>
        <th ><a   href=" ">Admin</a></th>
        <th ><a  href="palogin.php">Patient</a></th>
        <th ><a  href=" ">Nurse</a></th>
        <th ><a  href="../views/login.php ">Modarator</a></th>
    </tr>
    </table>
        <h1 align='center' >" The best way to find yourself is to lose yourself in the service of others "</h1>
        <center><a href="Home.php"><img src="../abc/12.jpeg" alt=""></a></center>
        
        <h3 align='center' >STAY HOME , STAY SAFE</h3>   
        <div >
    <center><font >
     <br>
    
    <tr >
            <th ><button type="button"><a href="aboutUs.php" class='aboutPbl'><h2>About Us</h2></a></button></th>
     <th><button type="button"><a href="contactUs.php" class='contactUs'><h2>Contact </h2></a></button> </th>   
</tr>
   
    </font></center>
    </div> 
  </body>    
</html>