<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	require_once('../../service/our_service.php');
	$username=$_SESSION['username'];	
	$userinfo = getByName($username);
	$my_id= $userinfo['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/navbar_customerhome.css">
	<link rel="stylesheet" href="../../css/orders.css">
    <link rel="stylesheet" type ="text/css" href="../css/header.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
    <link rel="stylesheet" type ="text/css" href="../css/signupPage.css">

	<title>History</title>
</head>
<body>

	<div id="navbar">
		<p id="logo"><b>NURSING SERVICE SYSTEM</b></p> 
	</div>
	<ul>
		<li><a href="../../php/logout.php">Logout</a></li>
		<li><a href="#contact">Contact</a></li>

		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Profile</a>
			<div class="dropdown-content">
			<a href="../../views/Patient_view/patientprofile.php">My Profile</a>
			<a href="../../views/Patient_view/edit.php">Update My Profile</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">History</a>
			<div class="dropdown-content">
			<a href="../../views/patient_view/purchase_history.php">Purchase History</a>
			<a href="../../views/Patient_view/complain.php">Complains</a>
			</div>
		</li>
		<li><a href="moderatorhome.php">Home</a></li>
	</ul>
		
        <h3 align="center">BRANCHES</h3>
<div class="wrapper">

    <meta charset="UTF-8">
    
 
</head>
<body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(87, 137, 194))">
    <div class="topSection">
        <h1 class='topTitle'>BRANCHES</h1>
        <h4 class='devider'>|</h4>
    </div>
    <div class='navbar'>
        <div class='navCont'>

        </div>
       
        <br><br><br><br> 
        <div class="empReg">
            <h2>Motijheel Branch</h2>
            <p>Address: <br><br> Plot # 9/i, Motijheel C/A, Dhaka City Corporation: PHONE:01777777777</p><br><br><br><br>     
      </div> 
        <div class="cusReg">
            <h2>Khilgaon Branch</h2>
            <p>Address: <br><br>  934/C, Khilgaon, Shahid Baki Rd, 1219 Dhaka: PHONE:0199999999 </p><br><br><br><br>   
        </div>
        <div class="cusReg">
            <h2>Kuril Branch</h2>
            <p>Address: <br><br> Shimul Trade Centre, Ka-​86/1, Kuril Bishwaroad :01888888888 </p><br><br><br><br>  
        </div>  
    </footer>

    </div>   
</body>
</html>

</div>
</form>
</body>
</html>