<?php
	session_start();

	
    
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Delete Patient</title>
		
	</head>
	<body>
	<h1 align='center'>Delete Patient Form</h1>	<br>                    
		<form action="../include/delpatphp.php" method="post">
			<table align='center' >	
			<tr>
			<td>  give the Nid number <input type="text" name="nid"  > :</td>
			

			</tr>
								
			<tr>
			<tr>
			<tr><td align='center'><br><input type="submit" name="submit" value="Login"></td></tr>
            <tr><td align='center'><br>
			Return To FirstPage
				<a href="FirstPage.php">
					FirstPage
				</a>								
        	</tr>
           			
		</form>
	</body>
</html>