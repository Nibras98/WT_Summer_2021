<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title align="center" >Patient Registration Form</title>
	<link rel="stylesheet" href="../css/PatientRegistration.css">
</head>
<body>

<ul>
		
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="Patientlogin.php">Login</a></li>
		<li><a href="Home.php">Home</a></li>

	</ul>

<h1 align='center'>	Signup</h1>
				                    
<script type="text/javascript" src="../js/PatientRegistration.js"></script>
	<form id="form" action="../include/pacontrol.php" onsubmit="validation()" method="post">
<table>
            <tr>
					<td>First Name :</td>
                    <td><input name="fname" id="fname" onkeyup="validfname()" onblur="fnameEmpty()" type="text"></td>
                <td><i id="fnameMsg" ></i></td>
				<td>
					<?php if(!empty($_SESSION['firstname_error']))
							{echo $_SESSION['firstname_error'];}
							?>
							
				</td>
				</tr>
                <tr>
                <td>Last Name :</td>
                <td><input name="lname" id="lname" onkeyup="validlname()" onblur="lnameEmpty()" type="text"></td>
                <td><i id="lnameMsg" ></i></td>
				<td><?php if(!empty($_SESSION['lastname_error']))
							{echo $_SESSION['lastname_error'];}
							?></td>
							
                </tr>
				<tr>
				<td>contact_number :</td>
				<td><input type="contact_number" id="contact_number" onkeyup="validcontact()" onblur="contactEmpty()" name="contact"></td>
                <td><i id="contactMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['cont_error'])){
							echo $_SESSION['cont_error'];}
							?> 
							</td>
				</tr>
                <tr>
                <td>Nid :</td>
				<td><input type="nid" id="nid" onkeyup="validnid()"  onblur="nidEmpty()" name="nid"></td>
                <td><i id="nidMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['Nid_error'])){
							echo $_SESSION['Nid_error'];}
							?>
							 </td>
				</tr>
				<tr>
				<td>Email :</td>
				<td><input type="email" id="email" onkeyup="validemail()" onblur="emailEmpty()" name="email"></td>
                <td><i id="emailMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['email_error'])){
							echo $_SESSION['email_error'];}
							?>
							</td>
				</tr>
				<tr>
				<td>Password :</td>
				<td><input type="password" id="pass"  name="password"  onkeyup="pRemover()" onblur="PEmpty()"> </td>
                <td><i id="passMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['pass_error'])){
						 	echo $_SESSION['pass_error'];}
							 ?>
		</td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()"> Male
						<input type="radio" id="female" name="gender" value="Female" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()"> Female
						<input type="radio" id="other" name="gender" value="Other" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()"> Other
						</td>
                <td><i id="genderMsg" ></i></td>
				<td>

					<?php if(!empty($_SESSION['gender_error']))
							{
							 	echo $_SESSION['gender_error'];} 
								 ?>
					</td>
				</tr>
                <tr>
				<td>Address:</td>
				<td><textarea rows="4" cols="40"  id="Address" name="Address" onkeyup="validadd()" onblur="addEmpty()"></textarea> </td>
                <td><i id="addMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['add_error'])){
							 	echo $_SESSION['add_error'];}
								 ?>
								 </td>
				</tr>
            <br>
        		<tr><td align='center'><h2><input type="submit" name="submit" value="Submit">&nbsp<input type="reset" value="Reset"></td></tr>
                </tr>
			</table>
			
	</form>
</body>
</html>