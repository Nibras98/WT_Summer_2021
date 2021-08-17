<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
  require_once('../../service/product_service.php');
	$userinfo = getByName($_SESSION['username']);
?>

<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/navbar_customerhome.css">
<link rel="stylesheet" href="item_list_style.css">

<title> SHOP </title>
</head>

<body>

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
  <li><a href="/Vintage/home.php">Home</a></li>
</ul>

  <div id="info">
    <?php
         $product=getAllProduct(); //from
         for($i=0; $i<count($product);$i++)
         {
        ?> 
       <div class="img"> 
       <a href="add_to_cart.php?id=<?=$product[$i]['id']?>##">  
        <img style:"#333" src="../images/All_Dress_Images/<?=$product[$i]['product_image']?>" >  
        </a>   
           <div class="img-desc">
            <p><b>Price:</b>$<?=$product[$i]['product_price']?></p>
            
            <a href="add_to_cart.php?id=<?=$product[$i]['id']?>##"> 
            <button>
            Add to Cart
            </button>
            </a>  
            
        </div>
    </div>
    </tr>
    <?php
    }?>
  </div>
</body>
</html>

