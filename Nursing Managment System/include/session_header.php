<?php
	session_start();
    include('../model/project.php');
	if(!isset($_SESSION['email'])){
		header('location: ../view/Patientlogin.php');
	}
?>