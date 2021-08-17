<?php
	 session_start();
	 extract($_SESSION);
	 extract($_COOKIE);
	 unset($_SESSION['username']);
	 
	 header("Location:HomePage.php");
  ?>