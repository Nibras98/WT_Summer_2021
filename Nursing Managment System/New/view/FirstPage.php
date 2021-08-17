
<?php
	 session_start();
	 extract($_SESSION);
	 extract($_COOKIE);
	 unset($_SESSION['username']);
  ?>
<!DOCTYPE html>
<html>
<head>
		<title>First Page</title>
    <link rel="stylesheet" type="text/css" href="../css/firstpage.css">
</head>
<body>
<h1 >Welcome To This Page</h1>       
        
<center><a href="FirstPage.php"><img  src="../abc/patient.jpg" ></a></center>

    <table >
    <tr  style>
            <th ><a  href="Home.php"><h2>Home Page</h2></a></th>
        
            <th ><a  href="padetails.php"><h2>Patient Details</h2></a></th>
          
            <th ><a  href="login.php"><h2 >Upgrage Patient Info </h2></a></th>
       
            <th ><a  href=""><h2 >Delete Patient</h2></a></th>
        </tr>
</table>
<br>
<a href="FirstPage.php"><img  src="../abc/13.jpg" ></a>
<a href="FirstPage.php"><img  src="../abc/image.jpg" ></a>
</body>
</html>
