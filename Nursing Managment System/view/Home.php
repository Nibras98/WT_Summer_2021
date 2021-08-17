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

    <ul>
    <li ><a   href="#../views/login.php">Modarator</a></li>
        <li ><a  href="#NurseLogin.php">Nurse</a></li>
        <li ><a  href="Patientlogin.php ">Patient</a></li>
        <li ><a  href="#adlogin.php">Admin</a></li>
    <li><a href="contact.php">Contact</a></li>
	  <li><a href="about.php">About</a></li>

        
</ul>
    
        <h1 align='center' >" The best way to find yourself is to lose yourself in the service of others "</h1>
        <center><a href="Home.php"><img src="../abc/12.jpeg" alt=""></a></center>
        
        <h2 align='center' >STAY HOME , STAY SAFE</h2>   
       
  </body>    
</html>