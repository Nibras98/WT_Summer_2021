<?php
 
 session_start();
 session_destroy();
 header("location:../views/login.php");
//  if(isset($_SESSION['username']))
//  {
//     unset($_SESSION['username']);
//     header("location:../view/login.php");
//  }
//  else
//  {
//     header("location:../view/login.php");
//  }

?>