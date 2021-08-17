<? php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		
	</head>
	<body>
	<h1 align='center'>ALL user DATA Form</h1>	                    
		<form action="" method="post">
			<table  align='center'>	
			<tr>
            <td><h2>admin data info is  :</h2></td>
			<td><button type="button"><a href="adjquery.php">admin data here</a></button><br> </h2>
			</tr>
            
			<tr>
			<td><h2>patient data info  :<h2></td>
			<td><button type="button"><a href="adpatienddetail222.php">patient data here</a></button><br> </h2>
			</tr>
			<tr>
			<td><h2>nurse data info  :<h2></td>
			<td><button type="button"><a href="adnusedetail.php">nurse data here</a><br> </button></h2>
			</tr>					
			<tr>
			<br><br><br>
			<td><h2>Do you want to delete the any admin data<h2></td>
			<td><button type="button"><a href="admindelete.php">delete admin data</a></button></td>

			</tr>

			<tr>
			<br><br><br>
			<td><h2>Do you want to delete the any patient data<h2></td>
			<td><button type="button"><a href="adpatdel.php">delete patent</a></button></td>

			</tr>

			<tr>
			<td><h2> Do you want to delete the any nurse data<h2></td>
			<td><button type="button"> <a href="adnurdel.php">delete nurse</a></button></td><br>
			</tr>

            <tr>
            <td><h2> update the any information of admin data<h2></td>
            <td> <button type="button"><a href="adminupdate.php">update admin </a></button></td><br>
			</tr>
			<tr>
            <td><h2> update the any information of patient data<h2></td>
            <td> <button type="button"><a href="adupdatepatient.php">update patient </a></button></td><br>
			</tr>
			<tr>
            <td><h2> update the any information of Nurse data<h2></td>
            <td><button type="button"> <a href="adupnurse.php">update nurse  </a></button></td><br>
			</tr>
			<tr><td align='center'><br><button type="button"><a href="adlogin.php"> logout</a></button></td></tr>
        
            			
		</form>
	</body>
</html>