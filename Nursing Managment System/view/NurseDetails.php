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
		<title>Nurse Details Form</title>
		<link rel="stylesheet" type="text/css" href="../css/NurseDetails.css">

	</head>
	<body>
	    <ul>
	
	    <li><a href="NurseLogout.php">LogOut</a></li>
	    <li><a href="HomePage.php">Home Page</a></li>
        <li><a href="ContactUs.php">Contact</a></li>
        <li><a href="AboutUs.php">About</a></li>

</ul>
	
	<h1 align='center'>Nurse Information</h1>			                    
   
 
<script type="text/javascript" src="../js/NurseProcess.js"></script>
	<form id="form" action="../view/NurseProcess.php" onsubmit="validation()" method="post">
<table>

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
	                <td>Set Schedule :</td>
					<td><input type="time" id="setschedule" onkeyup="validsetschedule()" onblur="setscheduleEmpty()" name="setschedule"></td>
					<td><i id="setscheduleMsg" ></i></td>
					<td>
					<?php if(!empty($_SESSION['schedule_error'])){
							echo $_SESSION['schedule_error'];}
							?>
                 
					</td>
					To
					<td><input type="time" id="setschedule" onkeyup="validsetschedule()" onblur="setscheduleEmpty()" name="setschedule"></td>
					<td><i id="setscheduleMsg" ></i></td>
					<td>
					<?php if(!empty($_SESSION['schedule_error'])){
							echo $_SESSION['schedule_error'];}
							?>
                 
					</td>
				</tr>

				<tr>
				<td> Serial :</td>
				<td><input type="serial"  id="serial" name="serial" onkeyup="validserial()" onblur="serialEmpty()"></td>
                <td><i id="serialMsg" ></i></td>
				<td>
				<?php if(!empty($_SESSION['serial_error'])){
							echo $_SESSION['serial_error'];}
							?> 
							</td>
				</tr>

				<br>
        		<tr><td align='center'><h2><input type="submit" name="submit" value="Submit">&nbsp<input type="reset" value="Reset"></td></tr>
                </tr>
			</table>
			</body>

</html>	 