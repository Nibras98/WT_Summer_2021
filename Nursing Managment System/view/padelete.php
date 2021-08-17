

<?php
session_start(); 

include('../include/delete.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title align="center" > Delation Form</title>
	<link rel="stylesheet" href="../css/PatientRegistration.css">
</head>
<body>

<ul>
		
<li><a href="logout.php">Logout</a></li>
<li><a href="FirstPage.php">First Page</a></li>
<li><a href="Home.php">Home Page</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About</a></li>

	</ul>

<h1 align='center'>Patient Delete Form</h1>
 <?php echo $error; ?>
<form action='' method='post'>
nid : <input type='text' name='nid'   >
<br><br>
     <br>
     <input name='delete' type='submit' value='delete'>  

    
</form>

</body>
</html>