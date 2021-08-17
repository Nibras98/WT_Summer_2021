<?php
	include('../model/project.php');
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: ../view/FirstPage.php');
		}else{

			
			if($status){
				$_SESSION['username'] = $username;
				
				
				{
				header('location: ../view/FirstPage.php');
				}
				
			}else{
				header('location: palogincheck.php');
				//header('location: ../views/login.php?error=invalid_user');
			}
		}
	}
