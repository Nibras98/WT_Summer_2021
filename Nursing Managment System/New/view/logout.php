
<?php
	 session_start();
	 extract($_SESSION);
	
	 unset($_SESSION['username']);
	 
	 header("Location:FirstPage.php");
  ?>