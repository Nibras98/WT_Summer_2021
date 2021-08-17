<?php
if (isset($_GET['error'])) {
		
	if($_GET['error'] == 'null_value'){
		echo "Username/Password field can't left empty...";
	}

	if($_GET['error'] == 'invalid_user'){
		echo "Invalid username or Password";
	}

	if($_GET['error'] == 'invalid_request'){
		echo "You have to login first...";
	}

}else if(isset($_GET['success'])){
	
	if($_GET['success'] == 'registration_done'){
		echo "Registration Done! Now you can login...";
	
	}
}


	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient login</title>
	<script type="text/javascript" src="../js/Patientlogin.js"></script>
	<link rel="stylesheet" href="../css/Patientlogin.css">

</head>
<body>
	
	<ul>
	<li><a href="Home.php">Home</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="about.php">About</a></li>
	</ul>
	

	<form action="../include/palogincheck.php" method="post">
	<h1 align='center'>SignIn</h1>

			
			<table align='center'>
				<tr>
					<td>Email : </td>
					<td><input type="text" id="email" name="email" onkeyup="emailRemover()" onblur="emailEmpty()"></td>
				<td><i id="emailMsg" ></i></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="password" id="password" name="password" onkeyup="pRemover()" onblur="passwordEmpty()"></td>
				<td><i id="passMsg"></i></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				<tr>
					<td></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td></td>
					<td>Don't have an account?</td>
				</tr>
				<tr>
					<td></td>
					<td id="signup_btn"><a href="PatientRegistration.php">Signup</a></td>
				</tr>
			</table>
			
	</form>
	
	</div> 
</body>
</html>