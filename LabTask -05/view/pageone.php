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
<h2> Hi,I am  <?php echo $_SESSION["username"];?></h2>

<h3 align='center'>Do You Want to Visit your Profile <a href="pagetwo.php"> MY Profile</a></h3>
<h4  align='center'><a href="showProduct.php">View Product</a></h4>
<h3 align='center'>Do you want to  <a href="addproduct.php"> Add Product</a></h3>


 <h3 align='center'>Go Back <a href="../control/logout.php">logout</a></h3>

</body>
</html>

<?php


?>   


