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
		<title>SetSchedule</title>
		<link rel="stylesheet" type="text/css" href="../css/NurseDetails.css">
		
	</head>
	<body>
	<ul>
	
	<li><a href="NurseLogout.php">LogOut</a></li>
	<li><a href="HomePage.php">Home Page</a></li>
    <li><a href="ContactUs.php">Contact</a></li>
    <li><a href="AboutUs.php">About</a></li>

</ul>
	
	<h1 align='center'>Set a Schedule</h1>	



<script type="text/javascript" src="../js/SetSchedule.js"></script>
	<form id="form" action="../view/NurseDetails.php" onsubmit="validation()" method="post">
		<table>
			    <tr>
					<td>Name : </td>
					<td><input type="name" id="name" name="name" size="20" onkeyup="nameRemover()" onblur="nameEmpty()" ></td>
					<td><i id="nameMsg"></i></td>
                    <td><?php if(!empty($_SESSION['name_error']))
							{echo $_SESSION['name_error'];}
							?></td>
				</tr>
				<tr>
					<td> Contact : </td>
					<td><input type="contact" id="contact" name="contact" size="15" onkeyup="contactRemover()" onblur="contactEmpty()"></td>
				<td><i id="contactMsg" ></i></td>
                <td>
				<?php if(!empty($_SESSION['cont_error'])){
							echo $_SESSION['cont_error'];}
							?> 
							</td>
				</tr>
                <tr>
				<td>Id :</td>
				<td><input type="id"  id="id" name="id" onkeyup="validid()" onblur="idEmpty()"></td>
                <td><i id="validid" ></i></td>
				<td>
				<?php if(!empty($_SESSION['id_error'])){
							echo $_SESSION['id_error'];}
							?> 
							</td>
				</tr>
				<tr>
					<td>Set Schedule : </td>
					<td><input type="text" id="setschedule" name="setschedule" size="40" onkeyup="scheduleRemover()" onblur="scheduleEmpty()"></td>
				<td><i id="scheduleset" ></i></td>
                <?php if(!empty($_SESSION['schedule_error'])){
							 	echo $_SESSION['schedule_error'];}
								 ?>
								 </td>
				</tr>
			
                <tr>
					<td> Serial : </td>
					<td><input type="text" id="serial" name="serial" size="40" onkeyup="serialRemover()" onblur="serialEmpty()"></td>
				<td><i id="serialfixed" ></i></td>
                <?php if(!empty($_SESSION['serial_error'])){
							 	echo $_SESSION['serial_error'];}
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