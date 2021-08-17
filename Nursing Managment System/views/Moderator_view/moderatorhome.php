<?php
require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$userinfo = getByName($_SESSION['username']);

?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>
<body>

<h1>WELCOME TO THE NURSING SERVICE SYSTEM</h1>

</body>
</html>
    <link rel="stylesheet" href="../../css/navbar_customerhome.css">
    <link rel="stylesheet" href="../../css/adminhome.css">
</head>

<body>
<div id="navbar">

<p id="logo"><b>NURSING SERVICE SYSTEM</b></p> 
  
</div>
<ul>
  <li><a href="../../php/logout.php">Logout</a></li>
  <li><a href="#contact">Contact</a></li>

  <li>
    <a href="../../views/Moderator_view/complain.php">Complains</a>
  </li>
  <li><a href="../../view/home.php">Home</a></li>
</ul>

    <section class="grid-section">
      <div class="admin-grid">
        <div class="admin-img">
        <img src="../images/icon1.jpg" class="image">
          <div class="middle">
            <div class="text"><a href="moderatorprofile.php"> MY PPROFILE </a></div>
          </div>
        </div>      
      </div>

      <div class="admin-grid">
        <div class="admin-img">
          <img src="../images/icon2.jpg" class="image">
            <div class="middle">
              <div class="text"><a href="empinfo.php"> EMPLOYEE </a></div>
            </div>
        </div>       
      </div>

      <div class="admin-grid">
        <div class="admin-img">
          <img src="../images/icon4.jpg" class="image">
          <div class="middle">
            <div class="text"><a href="branch.php">BRANCH</a></div>
          </div>
        </div>
      </div>

      <div class="admin-grid">
        <div class="admin-img">
        <img src="../images/icon3.jpg" class="image">
          <div class="middle">
            <div class="text"><a href="info.php">INFORMATION</a></div>
          </div>  
        </div>     
      </div>
      <div class="admin-grid">
        <div class="admin-img">
        <img src="../images/iconsearch.jpg" class="image">
          <div class="middle">
            <div class="text"><a href="..\14ajax\view\check.php">SEARCH</a></div>
          </div>  
        </div>     
      </div>
      <div class="admin-grid">
        <div class="admin-img">
        <img src="../images/icon123.jpg" class="image">
          <div class="middle">
            <div class="text"><a href="complain1.php">COMPLAIN</a></div>
          </div>  
        </div>     
      </div>
    </section>
    <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#w3s").attr({
      "href" : "https://www.facebook.com/jquery/",
      "title" : "W3Schools jQuery Tutorial"
    });
  });
});
</script>
</head>
<body>

<p>Find us On<a href="https://www.youtube.com" title="some title" id="w3s">YOUTUBE</a></p>
--------------------------
--------------------------


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#w4s").attr({
      "href" : "https://www.facebook.com/jquery/",
      "title" : "W3Schools jQuery Tutorial"
    });
  });
});
</script>
</head>
<body>

<p>Find us On<a href="https://www.facebook.com" title="some title" id="w4s">FACEBOOK</a></p>



</body>
</html>

</body>
</html> 


