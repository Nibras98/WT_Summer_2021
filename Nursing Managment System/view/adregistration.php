<?php
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>  
		<title>Admin  Registration</title>
		<link rel="stylesheet" type="text/css" href="../css/registration.css">
		<script src='../csf/adreg.js'></script>
		


	</head>
	<body>
	<h1 align='center'>Admin Registration Form</h1>
	                    
		<form action="../control/adreglogic.php" onsubmit="return regvalid()" method="post"><br>
			
		Enter your first Name :<input name="fname"  id="fname" onkeyup="a()"  type="text"> <p id="errorname"></p>
			
							
		<br><br>			
		Enter your last Name :<input name="lname" id="lname" onkeyup="b()" type="text">  <p id="errorroll"></p>
		<br><br>

		your company Name:<input type="text"  id="aname" onkeyup="c()" name="aname">   <p id="erroraname"></p>

		<br><br>	
				
	    your company Nid  number:<input type="nid" id="nid" onkeyup="d()"  name="nid">   <p id="errornid"></p>

		<br><br>	

		Contact :<input type="contact"  id="contact" onkeyup="e()" name="contact">  <p id="errorcontact"></p>
		<br><br>

		Give your  emmail :<input type="email" id="mail" onkeyup="f()" name="mail">  <p id="errormail"></p>
		<br><br>

		Password :<input type="password" id="password" onkeyup="g()" name="password">   <p id="errorpassword"></p>
		<br><br>

		what is your position :<input type="radio" id="manager" name="posi" value="manager"> Manager
						<input type="radio" id="web developer" name="posi" value="web developer"> wed developer
						<input type="radio"  id="other" name="posi" value="Other"> Other 
		
		<br>	<br>					 
		
		input the date:<input type="date" id="adate"  onkeyup="h()" name="adate">  <p id="erroradate"></p>
					
		<br><br>
		
        <br>
        	
        <input type="submit" name="submit" value="Submit">
		<input type="reset" value="Reset">
        		
				
		<br>			
	              <h3>  Already have an account?
					<a href="adlogin.php">
						Log-in
					</a>	</h3>			
            	
		</form>
	</body>
</html>

<?php
	unset($_SESSION['firstname_error']);
	unset($_SESSION['lastname_error']);
	unset($_SESSION['cname']);
    unset($_SESSION['mail_error']);
    unset($_SESSION['add_error']);
    unset($_SESSION['cont_error']);
    unset($_SESSION['pass_error']);
    unset($_SESSION['posi_error']);
    unset($_SESSION['Nid_error']);
    unset($_SESSION['message']);
?>