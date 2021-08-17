<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$username=$_SESSION['username'];
	$userinfo = getByName($username);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/update_own.css">
</head>
<body>

	<div id="navbar">
		<p id="logo"><b>NURSING SERVICE SYSTEM</b></p> 
	</div>

	<ul>
		
		<li><a href="../../php/logout.php">Logout</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#about">Blog</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="../../home.php">Home</a></li>
		<li><a href="moderatorhome.php">Dashboard</a></li>

	</ul>

    <div class="grids">
        <div class="demo">
        </div>
        <div class="info">
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
                                <input type="submit" name="edit_admin" value="Update"> 
                                <a href="moderatorprofile.php">Back</a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
        <div class="demo">
        </div>
    </div>



</body>
</html>