<?php
include('../include/pacontrol.php');
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Patient Registration Form</title>
		<link rel="stylesheet" type="text/css" href="../css/paregistration.css">
		<script src="../js/pacontrol.js"></script>
	</head>
	<body>
	<h1 align='center'>Patient Registration Form</h1>
				                    
	<form action="" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
			<table  align='center'>
            <tr>
					<td>First Name :</td>
                    <td><input name="fname" id="fname" onkeyup="validfname()" type="text"><span id="err-fname" ></span>
					<?php if(!empty($_SESSION['firstname_error']))
							{echo $_SESSION['firstname_error'];}
							?>
							
				</td>
				</tr>
                <tr>
                <td>Last Name :</td>
                <td><input name="lname" id="lname" onkeyup="validlname()" type="text"><span id="err-lname" ></span>
				<?php if(!empty($_SESSION['lastname_error']))
							{echo $_SESSION['lastname_error'];}
							?>
							</td>
                </tr>
				<tr>
				<td>Contact :</td>
				<td><input type="contact" id="contact" onkeyup="validcontact()" name="contact"><span id="err-contact" ></span>
				<?php if(!empty($_SESSION['cont_error'])){
							echo $_SESSION['cont_error'];}
							?> 
							</td>
				</tr>
                <tr>
                <td>Nid :</td>
				<td><input type="nid" id="nid" onkeyup="validnid()" name="nid"><span id="err-nid" ></span>
				<?php if(!empty($_SESSION['Nid_error'])){
							echo $_SESSION['Nid_error'];}
							?>
							 </td>
				</tr>
				<tr>
				<td>Email :</td>
				<td><input type="email" id="email" onkeyup="validemail()" name="email"><span id="err-email" ></span> 
				<?php if(!empty($_SESSION['email_error'])){
							echo $_SESSION['email_error'];}
							?>
							</td>
				</tr>
				<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" onkeyup="validpass()" name="password"> <span id="err-pass" ></span>
				<?php if(!empty($_SESSION['pass_error'])){
						 	echo $_SESSION['pass_error'];}
							 ?>
		</td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
						<span id="err-gender" ></span>
					</td>
				</tr>
                <tr>
					
					<td>
					<?php if(!empty($_SESSION['gender_error']))
							{
							 	echo $_SESSION['gender_error'];} 
								 ?>
					</td>
				</tr>
                <tr>
				<td>Address:</td>
				<td><textarea rows="4" cols="40"  id="add" name="Address"></textarea> <span id="err-add" ></span>
				<?php if(!empty($_SESSION['add_error'])){
							 	echo $_SESSION['add_error'];}
								 ?>
								 </td>
				</tr>
            <br>
        		<tr><td align='center'><h2><input type="submit" name="submit" value="Submit">&nbsp<input type="reset" value="Reset"></td></tr>
				<tr><td align='center'>
                Already have an account?
									<a href="palogin.php">
										Log-in
								</a>
						
									
							
					</td>			
            	</tr>
						
				</form>
				
	</body>

</html>


<?php
	unset($_SESSION['firstname_error']);
	unset($_SESSION['lastname_error']);
    unset($_SESSION['email_error']);
    unset($_SESSION['add_error']);
    unset($_SESSION['cont_error']);
    unset($_SESSION['pass_error']);
    unset($_SESSION['Nid_error']);
	unset($_SESSION['gender_error']);
    unset($_SESSION['message']);

?>   


