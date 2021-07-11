<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<?php echo $error; ?>

<h1 align='center'>Login Form</h1>
<form action="" method="post">
<table  align='center'>	
			<tr>
			<td>Username :</td>
			<td><input type="text" name="username" placeholder="Enter your username"> 
			</tr>
			<tr>
			<td>Password :</td>
			<td><input type="password" name="password" placeholder="Enter your Password"> 
			</tr>					
			<tr>
			<tr>
			<tr><td align='center'><br><input type="submit" name="submit" value="Login"></td></tr>
   
</form>
<br>


</body>
</html>