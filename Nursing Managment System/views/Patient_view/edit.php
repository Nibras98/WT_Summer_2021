<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$username=$_SESSION['username'];
	$userinfo = getByName($username);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<link rel="stylesheet" href="../../css/navbar_customerhome.css">
	<style>
		fieldset{
			background-color:#CCD1D1;
		}
	</style>
</head>
<div id="navbar">

<p id="logo"><b>VINTAGE</b></p> 
  
</div>
<ul>
  <li><a href="../../php/logout.php">Logout</a></li>
  <li><a href="#contact">Contact</a></li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profile</a>
    <div class="dropdown-content">
      <a href="../../views/Customer_view/customerprofile.php">My Profile</a>
      <a href="../../views/Customer_view/edit.php">Update My Profile</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">History</a>
    <div class="dropdown-content">
      <a href="../../views/Customer_view/purchase_history.php">Purchase History</a>
      <a href="../../views/Customer_view/complain.php">Complains</a>
    </div>
  </li>
  <li><a href="/Shop_sys/home.php">Home</a></li>
</ul>


	<form action="../../php/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table align='center'>
				<tr>
				
					<td>Name</td>
					<td><input type="text" name="name" value="<?=$userinfo['name']?>"></td>
				</tr>

				<tr>
				    <td>Address</td>
				    <td><input type="text" name="address" value="<?=$userinfo['address']?>"></td>
			   </tr>

			   <tr>
				    <td>Contact Number</td>
				    <td><input type="text" name="contact_number" value="<?=$userinfo['contact_number']?>"></td>
			   </tr>

				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$userinfo['password']?>"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="text" name="confirm_password" value="<?=$userinfo['confirm_password']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$userinfo['id']?>">
						<input type="submit" name="edit" value="Update"> 
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>