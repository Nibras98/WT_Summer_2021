<?php
session_start(); 
include('../include/paprocess.php');

?>


<!DOCTYPE html>
<html>


 <h1 align='center' style="font-family:Algerian"> My Info</P></h1>
	<table  align='center'>
	<form action=" " method="POST">
	<table  align='center'>
            <tr>
					<td>First Name :</td>
                    <td><input name="fname" type="text"><?php $firstname;?></td>
				</tr>
                <tr>
                <td>Last Name :</td>
                <td><input name="lname" type="text"><?php $lastname;?></td>
                </tr>
				<tr>
				<td>Contact :</td>
				<td><input type="text" name="contact"> <?php echo $validatecont ?></td>
				</tr>
				<tr>
	                <td>Serial :</td>
					<td><input type="text" name="serial"> <?php echo $validateserial ?></td>  
				
					</td>
				</tr>
                <tr>
	                <td>Payment :</td>
					<td><input type="text" name="payment"> <?php echo $validatepayment ?></td>  
				
					</td>
				</tr>
				<tr>
	                <td>Problem :</td>
					<td><textarea rows="4" cols="40" name="Address"></textarea> <?php echo $validateproblem ?></td>
					
					</td>
				</tr>
				
				<tr><td align='center'><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td></tr>
				
</table>
</form>

</body>
<a  href="../include/logout.php"><h4 align='center' style="font-family:Algerian">Log-Out</a>
</div>
</html>

  


