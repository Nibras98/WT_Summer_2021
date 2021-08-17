<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$userinfo = getByName($_SESSION['username']);
	//echo $userinfo['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="../../css/home.css">
</head>
<body>

<div id="navbar">

<p id="logo"><b>VINTAGE</b></p> 

</div>

<ul>
	
	<li><a href="../../php/logout.php">LogOut</a></li>
	<li><a href="#about">About</a></li>
	<li><a href="#about">Blog</a></li>
	<li><a href="#contact">Contact</a></li>
	<li><a href="Customer_home.php">Home</a></li>

</ul>
<!--<form action="../php/profile_picturecheck.php" method="post" enctype="multipart/form_data">-->
<fieldset>
    <legend>My profile Info</legend>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">


	<table cellpadding="0" cellspacing="0" align='center'>
    <tr>
        <td > <img width="300" src="../../upload/image.png"></td>
	</tr>
    <tr>
		<td><input type="file" name="filetoupload"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
	</table>
           
</form>

    
    <table cellpadding="0" cellspacing="0" align='center'>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?=$userinfo['name']?></td>
				
			</tr>	
				
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?=$userinfo['email']?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?=$userinfo['gender']?></td>
				
			</tr>
			<tr><td colspan="3"><hr/></td></tr>	
             
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><?=$userinfo['address']?></td>
				
			</tr>
			<tr><td colspan="3"><hr/></td></tr>	

			<tr>
				<td>Contact No</td>
				<td>:</td>
				<td><?=$userinfo['contact_number']?></td>
				
			</tr>

			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?=$userinfo['dob']?></td>
			</tr>
			<tr><td>.<td></tr>
      <tr>
				<td></td>
				<td></td>
			</tr>
		</table>
		
		</fieldset>





</body>
</html>