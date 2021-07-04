  
<?php
	 session_start();
	 extract($_SESSION);
	 extract($_COOKIE);
	 unset($_SESSION['username']);
	 setcookie('username', $_SESSION['username'], time() -(86400 * 5), "/");
	 header("Location:Home.php");
  ?>