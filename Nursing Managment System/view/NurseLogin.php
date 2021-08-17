<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "email/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid email or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		
		}
	}


	include('../control/NurseLogincheck.php');
	if(isset($_SESSION['username'])){
	header('location: NurseRegistration.php');
	}
	else{
		$data = file_get_contents('../json/NurseInfo.json');
		$data_array = json_decode($data, true);
		if (isset($_POST['submit'])) {
			$email=$_POST['email'];
			$pass=$_POST['password'];
			foreach ($data_array as $key => $value) {
				if($value['email']==$email)
				{
					if($value['password']==$pass)
					{
						 $_SESSION['username']=$value['name'];
					  
							header("Location:HomePage.php"); 
					}
				}
			}
			
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nurse Login</title>
	<script type="text/javascript" src="../js/NurseLogin.js"></script>
	<link rel="stylesheet" href="../css/NurseLogin.css">
</head>
<body>
	
	<ul>
		<li><a href="ContactUs.php">Contact</a></li>
		<li><a href="HomePage.php">Home</a></li>
		<li><a href="AboutUs.php">About</a></li>
	</ul>
	

	<form action="" method="post">
	<h1 align='center'>SignIn</h1>

			
			<table align='center'>
				<tr>
					<td>Email : </td>
					<td><input type="text" id="email" name="email" onkeyup="emailRemover()" onblur="emailEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="emailMsg" ></i></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="password" id="password" name="password" onkeyup="pRemover()" onblur="passwordEmpty()"></td>
				</tr>
				<tr>
				<td></td>
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
					<td id="signup_btn"><a href="NurseRegistration.php">Signup</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
	
	</div> 
</body>
</html>