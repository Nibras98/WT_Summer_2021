<?php
include('../include/logincheck.php');

if(isset($_SESSION['username'])){
header("location: paupdate.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
   
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $error; ?>

</body>
</html>