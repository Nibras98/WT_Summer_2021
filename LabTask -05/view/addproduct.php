<?php
session_start(); 

include ("../control/addproductcheck.php");


if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>

<h1 align='center'>Add New Product</h1>
<form action="" method="post">
<table  align='center'>	
			<tr>
			<td>Product Name:</td>
			<td><input type="text" name="pname" placeholder="Enter your Product name"></td> 
			</tr>
            <tr>
			<td>Product Description:</td>
			<td><textarea name="pdesc" placeholder="Enter a short description"> </textarea></td>  
			</tr>
            <tr>
			<td>Product category: </td>
			<td><input type="text" name="pcategory" placeholder="Enter your Product category"></td> 
			</tr>
            <tr>
			<td>Product Price:</td>
			<td><input type="number" name="pprice" placeholder="Enter your Product price"> </td>
			</tr>
            <tr>
			<td>Product Image: </td>
			<td><input type="file" name="pimage" placeholder="Enter your Product name"></td> 
			</tr>
            <tr><td align='center'><br><input type="submit" name="add" value="ADD PRODUCT"></td></tr>

  
</form>          
</table>

<h3 align ='center' > <a href="pageone.php">GO back</a></h3>
</body>
</html>