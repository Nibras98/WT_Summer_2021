
<?php
	 session_start();
	 extract($_SESSION);
	 extract($_COOKIE);
	 unset($_SESSION['username']);
  ?>
<!DOCTYPE html>
<html>
<head>
		<title>First Page</title>
    <link rel="stylesheet" type="text/css" href="../css/firstpage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("img").hide();
  });
});
</script>
</head>
<body>
     
<ul>
<li><a href="logout.php">Logout</a></li>
<li><a href="BookSerial.php">Book A Serial</a></li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profile</a>
    <div class="dropdown-content">
     
      <a href="paupdate.php">Update My Profile</a>
      <a href="padelete.php">Delete My Profile</a>
      <a href="check.php">Search Profile Info</a>
    </div>
  </li>
<li><a href="Home.php">Home Page</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About</a></li>
</ul>
<h1 align='center'>Welcome To This Page</h1>  
<center><a href="FirstPage.php"><img  src="../abc/patient.jpg" ></a></center>

<br><a href="FirstPage.php"><img  src="../abc/14.jpg" ></a>
<a href="FirstPage.php"><img  src="../abc/13.jpg" ></a>
<a href="FirstPage.php"><img  src="../abc/image.jpg" ></a>

</body>
<button>Click me to hide all page</button>
</html>
