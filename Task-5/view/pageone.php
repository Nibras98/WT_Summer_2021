<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h1 align='center'>Home Page</h1>


<h3 align='center'>Do You Want to Visit your Profile <a href="pagetwo.php"> MY Profile</a></h3>

<br/>
 <h3 align='center'>Go Back <a href="../control/logout.php">logout</a></h3>

</body>
</html>

<?php


?>   


