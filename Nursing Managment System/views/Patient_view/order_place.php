
<?php
	require_once('../../php/session_header.php');
	require_once('../../service/product_service.php');
    require_once('../../service/userService.php');
    $my_id = $_SESSION['user_id'];
    $userinfo = getByID($my_id);    
    $product_id =$_GET['p_id'];
?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/home.css">
	<link rel="stylesheet" href="order_place.css">
	<title> Products order </title>
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

      <div class="wrapper">
          <h1 align="center">Select a Shipping Address</h1>
          <h2 align="center">Add a new address</h2>
          <div class="order_form">
          <form action="../../php/order_controller.php" method="post">
          <table >
				
                <tr>
					<td><input type="hidden"  name="product_id" value="<?=$product_id?>" ></td>
				</tr>
                <tr>
					<td><input type="hidden"  name="order_from" value="VINTAGE" ></td>
				</tr>				
				<td>Full name(First ans Last name)</td>
                </tr>
                <tr>
					<td><input type="text" id="text_field" name="customer_name" value="<?=$userinfo['name']?>" ></td>
				</tr>
				<tr>
					<td>Phone number</td>
                </tr>
                <tr>
					<td><input type="text" id="text_field" name="contact_number" value="<?=$userinfo['contact_number']?>" width="40x" height="50x"></td>
				</tr>

                <tr>
					<td>Order date</td>
                </tr>
                <tr>
					<td><input type="date" id="text_field" name="order_date" width="40x" height="50x"></td>
				</tr>

                <tr>
					<td>Address</td>
                </tr>
                <tr>
					<td><input type="text" id="text_field" name="address" value="<?=$userinfo['address']?>"></td>
				</tr>

				<tr>
					<td>
						<input type="hidden" name="user_id" value="<?=$userinfo['id']?>">
						<input type="submit" name="submit_order" value="Submit"> 
						<a href="Customer_home.php">Back</a>
					</td>
				</tr>
			</table>
            </form>
          
          </div>

      </div>

</body>
</html>