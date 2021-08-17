<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Serial Booking</title>
		<link rel="stylesheet" type="text/css" href="../css/padetails.css">
		
	</head>
	<body>
	<ul>
	
	<li><a href="logout.php">LogOut</a></li>
    <li><a href="FirstPage.php">First Page</a></li>
	<li><a href="Home.php">Home Page</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php">About</a></li>

</ul>
	
	<h1 align='center'>Book a Serial</h1>	



<script type="text/javascript" src="../js/BookSerial.js"></script>
	<form id="form" action="../include/patientdetails.php" onsubmit="validation()" method="post">
		<table>
			    <tr>
					<td>UserName : </td>
					<td><input type="name" id="name" name="name" size="20" onkeyup="nameRemover()" onblur="nameEmpty()" ></td>
					<td><i id="nameMsg"></i></td>
                    <td><?php if(!empty($_SESSION['username_error']))
							{echo $_SESSION['username_error'];}
							?></td>
				</tr>
				<tr>
					<td>Contact Number : </td>
					<td><input type="contact" id="contact" name="contact" size="15" onkeyup="contactRemover()" onblur="contactEmpty()"></td>
				<td><i id="contactMsg" ></i></td>
                <td>
				<?php if(!empty($_SESSION['contact_error'])){
							echo $_SESSION['contact_error'];}
							?> 
							</td>
				</tr>
                <tr>
				<td>Payment :</td>
				<td><input type="payment"  id="payment" name="payment" onkeyup="validcpayment()" onblur="paymentEmpty()"></td>
                <td><i id="paymentMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['payment_error'])){
							echo $_SESSION['payment_error'];}
							?> 
							</td>
				</tr>
				<tr>
					<td>Problem : </td>
					<td><textarea rows="3" cols="25" id="problem" name="problem" onkeyup="problemRemover()" onblur="problemEmpty()"></textarea></td>
				<td><i id="problemMsg" ></i></td>
                <?php if(!empty($_SESSION['problem_error'])){
							 	echo $_SESSION['problem_error'];}
								 ?>
								 </td>
				</tr>
			
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" ></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>