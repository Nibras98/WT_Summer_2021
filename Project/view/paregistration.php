<?php
session_start(); 
include('../include/pacontrol.php');


?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Registration</title>

	</head>
	<body>
	<h1 align='center'>Patient Registration Form</h1>
				                    
                            <form action="" method="post">
			<table  align='center'>
            <tr>
					<td>First Name :</td>
                    <td><input name="fname" type="text"><?php $firstname;?></td>
				</tr>
                <tr>
                <td>Last Name :</td>
                <td><input name="lname" type="text"><?php $lastname;?></td>
                </tr>
				<tr>
				<td>Contact :</td>
				<td><input type="contact" name="contact"> <?php echo $validatecont ?></td>
				</tr>
                <tr>
                <td>Nid :</td>
				<td><input type="nid" name="nid"> <?php echo $validatenid ?></td>
				</tr>
				<tr>
				<td>Email :</td>
				<td><input type="email" name="email"> <?php echo $validateemail; ?></td>
				</tr>
				<tr>
				<td>Password :</td>
				<td><input type="password" name="password"> <?php echo $validatepass ?></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
					</td>
				</tr>
                <tr>
					<td></td>
					<td>
                        <?php echo $validateradio; ?>
					</td>
				</tr>
                <tr>
				<td>Address:</td>
				<td><textarea rows="4" cols="40" name="Address"></textarea> <?php echo $validateadd; ?></td>
				</tr>
            <br>
        		<tr><td align='center'><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td></tr>
				<tr><td align='center'><br>
                Already have an account?
									<a href="palogin.php">
										Log-in
								</a>
						
									
							
								
            	</tr>
						
				</form>
	</body>

</html>


<?php


?>   


