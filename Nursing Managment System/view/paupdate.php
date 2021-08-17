<?php
include('../include/updatecheck.php');

?>

<!DOCTYPE html>
<html>
<head>
		<title>Patient Update Form</title>
		<link rel="stylesheet" type="text/css" href="../css/PatientRegistration.css">
		
	</head>
<body>
<ul>
	
	<li><a href="logout.php">LogOut</a></li>
    <li><a href="FirstPage.php">First Page</a></li>
	<li><a href="Home.php">Home Page</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php">About</a></li>

</ul>
<h1 align='center'>Profile Update</h1>

<?php
$radio1=$radio2=$radio3=$radioValidation=$dob="";
$firstname=$email="";
$connection = new project();
$conn=$connection->start();




?>
 <?php echo $error; ?>
<form action='' method='post'>
input nid number : <input type='text' name='nid'  >
<br><br>
lasttname : <input type='text' name='fname'  >
<br><br>
email : <input type='text' name='email'  > <br><br>
     <br>
     contact : <input type='text' name='contact'  > <br><br>

     <input name='update' type='submit' value='Update'>  
           
</body>

</html>
            