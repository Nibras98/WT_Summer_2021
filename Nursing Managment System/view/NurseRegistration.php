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

         <title align="center" >Nurse Registration Form</title>
	     <link rel="stylesheet" href="../css/NurseRegistration.css">

	</head>
	<body>

	<ul>
		
		<li><a href="AboutUs.php">About</a></li>
		<li><a href="ContactUs.php">Contact</a></li>
		<li><a href="NurseLogin.php">Login</a></li>
		<li><a href="HomePage.php">Home</a></li>

	</ul>	
	<h1 align='center'> Signup </h1>

	<script type="text/javascript" src="../js/NurseRegistration.js"></script>
	<form id="form" action="../control/NurseControl.php" onsubmit="validation()" method="post">
   <table align='center'>
				       
				<tr>
					<td> Name :</td>
                    <td><input name="name" id="name" onkeyup="validname()" onblur="nameEmpty()" type="text"></td>
                <td><i id="nameMsg" ></i></td>
				<td>
					<?php if(!empty($_SESSION['name_error']))
							{echo $_SESSION['name_error'];}
							?>
							
				</td>
				</tr>

        	<tr>
	             <td>Contact :</td>
				 <td><input type="contact" id="contact" onkeyup="validcontact()" onblur="contactEmpty()" name="contact"></td>
                <td><i id="contactMsg" ></i></td>
				          <td>
	                     <?php if(!empty($_SESSION['cont_error']))
							  {echo $_SESSION['cont_error'];}
					            ?>
                 </td>
				</tr>

                <tr>
                <td>Id :</td>
				<td><input type="id" id="id" onkeyup="validid()"  onblur="idEmpty()" name="id"></td>
                <td><i id="idMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['id_error'])){
							echo $_SESSION['id_error'];}
							?>
							 </td>
				</tr>
				
				<tr>
					<td> Hospital Name :</td>
                    <td><input name="hname" id="hname" onkeyup="validhname()" onblur="hnameEmpty()" type="text"></td>
                <td><i id="hnameMsg" ></i></td>
				<td>
					<?php if(!empty($_SESSION['hname_error']))
							{echo $_SESSION['hname_error'];}
							?>
							
				</td>
				</tr>

				<tr>
                <td>Hospital Id :</td>
				<td><input type="hid" id="hid" onkeyup="validhid()"  onblur="hidEmpty()" name="hid"></td>
                <td><i id="hidMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['hid_error'])){
							echo $_SESSION['hid_error'];}
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
				
				<br>
        		<tr><td align='center'><h2><input type="submit" name="submit" value="Submit">&nbsp<input type="reset" value="Reset"></td></tr>
                </tr>
			</table>
			
	</form>
</body>
</html>          