<?php
include('../include/palogincheck.php');

if(isset($_SESSION['username'])){
header("location: paregistration.php");
}
else{
    $data = file_get_contents('../json/painfo.json');
    $data_array = json_decode($data, true);
    

    if (isset($_POST['submit'])) {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        foreach ($data_array as $key => $value) {
            if($value['email']==$email)
            {
                if($value['password']==$pass)
                {
                     $_SESSION['username']=$value['name'];
                     setcookie('username', $value['name'], time() + (86400 * 5), "/");
                        header("Location:FirstPage.php"); 
                }
            }
        }
        
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h1 align='center'>Login Form</h1>	                    
		<form action="" method="post">
			<table  align='center'>	
			<tr>
			<td>Email :</td>
			<td><input type="email" name="email"> 
			</tr>
			<tr>
			<td>Password :</td>
			<td><input type="password" name="password"> 
			</tr>					
			<tr>
			<tr>
			<tr><td align='center'><br><input type="submit" name="submit" value="Login"></td></tr>
        
            <tr><td align='center'><br>
			Don't have an account yet?
				<a href="paregistration.php">
					Create an account
				</a>								
        	</tr>			
		</form>
		<tr><td align='center'><br>
			Return To Home
				<a href="Home.php">
					Home
				</a>								
        	</tr>
<?php echo $error; ?>

</body>
</html>