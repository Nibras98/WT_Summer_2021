<?php
 
include('../include/paprocess.php');
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Patient Details Form</title>
		<link rel="stylesheet" type="text/css" href="../css/padetails.css">
		<script src="../js/paprocess.js"></script>
	</head>
	<body>
	<h1 align='center'>My Information</h1>			                    
    <form action="" method="post">
	<table  align='center'>
        <tr>
			<td>UserName  :</td>
            <td><input name="username"  id="username" onkeyup="validusename()" type="text"><span id="err-username" ></span>
			   
			</td>
		</tr>       
		<tr>
			<td>Contact :</td>
			<td><input type="Contact"  id="contact"  name="Contact"><span id="err-contact" ></span>
			  
			</td>
		</tr>
                <tr>
                <td>Serial :</td>
				<td><input type="number"  id="serial" onkeyup="validserial()" name="Serial"><span id="err-serial" ></span>
				
							 </td>
				</tr>
			
				<tr>
				<td>Payment :</td>
				<td><input type="payment"  id="payment" name="Payment"> <span id="err-payment" ></span>
				
		</td>

                <tr>
				<td>Problem:</td>
				<td><textarea rows="5" cols="25"  id="problem"  name="Problem"></textarea> <span id="err-problem" ></span>
			
								 </td>
				</tr>
            <br>
			<tr><td align='center'><input type="submit" name="submit" value="Submit">&nbsp<input type="reset" value="Reset"></td></tr>					
		</td>			
	</tr>
	</table>		
	</form>

</body>
<h2 align='center'>Return To FirstPage:</h2><a  href="logout.php"><h2 align='center'  >Log Out</h2></a>
<h2 align='center'>Go Back To:</h2><a  href="../view/FirstPage.php"><h3 align='center' >First Page</a>
</html>

<?php
	unset($_SESSION['UserName_error']);
    unset($_SESSION['cont_error']) ;
    unset($_SESSION['Serial_error']);
    unset($_SESSION['Problem_error']);
    unset($_SESSION['Payment_error']);  
    unset($_SESSION['message']);
	

?>   
