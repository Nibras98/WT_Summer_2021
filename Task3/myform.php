<?php include "control/myaction.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<h1>Registration Form</h1>
		
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Full Name :</td>
<td><input name="fname" type="text"> <?php echo $validatename; ?></td>
</tr>
				
<tr>
<td>Email :</td>
<td><input type="email" name="email"> <?php echo $validateemail; ?></td>
</tr>
				
<tr>
<td>Password :</td>
<td><input type="password" name="password"> <?php echo $validatepass ?></td>
</tr>
				
<tr>
<td>Comment :</td>
<td><textarea rows="4" cols="40" name="comment"></textarea> <?php echo $validatecmt; ?></td></td>
</tr>
				
<tr>
<td>Gender :</td>
<td>
<input type="radio" id="male" name="gender" value="Male"> Male
<input type="radio" id="female" name="gender" value="Female"> Female
<input type="radio" id="other" name="gender" value="Other"> Other
</td>
</tr>
 <tr>
 <td>
 <?php echo $infog;?>
</td>
<td>
 <?php echo $validateradio; ?>
</td>
</tr>
			   
<tr>
<td>Please Choose a hobby :</td>
<td>
<input type="checkbox" name= "hobby1" value="Singing"> Singing
<input type="checkbox" name= "hobby2" value="Dancing"> Dancing
<input type="checkbox" name= "hobby3" value="Reading"> Reading
</td>
</tr>
 <tr>
 <td>
 <?php echo $infoh;?>
 </td>
 <td>
<?php echo $validatecheckbox; ?>
<?php echo $h1;?>
<?php echo $h2;?>
<?php echo $h3;?>
    
</td>
<tr>
<td>Please Choose a file :</td>
<td>
<input type="file" name="filetoupload">
</td>
</tr>
</tr>
				
<tr>
<td><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td>
</tr>
</table>
</form>
		
</body>
</html>