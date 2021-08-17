<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$userinfo = getByName($_SESSION['username']);
	//echo $userinfo['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="../../css/signup.css">
	<link rel="stylesheet" href="../../css/profile.css">
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
		<li><a href="../../views/Moderator_view/moderatorhome.php">Home</a></li>
		<li><a href="adminhome.php">Dashboard</a></li>

	</ul>
	<!--<form action="../php/profile_picturecheck.php" method="post" enctype="multipart/form_data">-->


	<div class="card">

		<img src="../../upload/imgmale.png" alt="John" style="width:95%">
		<h1><?=$userinfo['name']?></h1>
		<p class="title"><?=$userinfo['user_type']?>, NURSING SERVICE SYSTEM</p>
		<div class="info"><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;<?=$userinfo['email']?></div>
		<div class="info"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;<?=$userinfo['contact_number']?></div>
		<div class="info"><i class="fas fa-birthday-cake"></i>&nbsp;&nbsp;<?=$userinfo['dob']?></div>
		<div class="info"><i class="fas fa-venus-mars"></i>&nbsp;&nbsp;<?=$userinfo['gender']?></div>
		<div class="info"><i class="fas fa-map-marked"></i>&nbsp;&nbsp;<?=$userinfo['address']?></div>
		<div class="info"><i class="fas fa-user-edit"></i><a href="update_own.php">o</a>Update</div>
	</div>


</body>
</html>








<?php
//include('../control/db.php');
//session_start(); 

//if(empty($_SESSION["username"])) // Destroying All Sessions
  //{
    //header("Location: ../control/login.php"); // Redirecting To Home Page
  //}
?>

<!--<!DOCTYPE html>
<html>
<body>
  <h2>Profile Page</h2>

    Hii, <h3>
    <?php //echo $_SESSION["username"];?></h3>
  <br/>Your Profile Page. -->

<?php
  //$connection = new db();
  //$conobj=$connection->OpenCon();

  //$userQuery=$connection->ShowAll($conobj,"student");

//if ($userQuery->num_rows > 0) {
  //  echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Profession</th></tr>";
    // output data of each row
    //while($row = $userQuery->fetch_assoc()) {
      //echo "<tr><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["profession"]."</td></tr>";
    //}
    //echo "</table>";
  //} else {
    //echo "0 results";
  //}

?>