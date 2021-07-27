<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
		<script src="js/validation.js"></script>
	</head>
	<body>
		<h1>Registration Form</h1>
		
		<hr>
		
		<form action="" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
			<table>
				<tr>
				<td>Name :</td>
				<td><input name="fname" id="fname" type="text"> <span id="err-fname" >*</span></td>
				</tr>
				
				<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"> <span id="err-email" >*</span></td>
				</tr>
				
				<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="password"> <span id="err-pass" >*</span></td>
				</tr>
				
				<tr>
				<td>Comment :</td>
				<td><textarea rows="4" cols="40" id="cmt" name="comment"></textarea> <span id="err-cmt" >*</span></td>
				</tr>
				
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
						<span id="err-gender" >*</span>
					</td>
				</tr>
			   
				<tr>
					<td>Please Choose a hobby :</td>
					<td>
						<input type="checkbox" id="hobby1" name= "hobby1" value="Singing"> Singing
						<input type="checkbox" id="hobby2" name= "hobby2" value="Dancing"> Dancing
						<input type="checkbox" id="hobby3" name= "hobby3" value="Reading"> Reading
						<span id="err-chkbox" >*</span>
					</td>
				</tr>
				<tr>
					<td>Please Choose a file :</td>
					<td>
						<input type="file" id="filetoupload" name="filetoupload">
						<span id="err-file" >*</span>
					</td>
				</tr>
				
				<tr>
					<td><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
	</body>
</html