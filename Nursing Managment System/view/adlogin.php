<?php
include('../control/adlogincheck.php');
if(isset($_SESSION['email'])){
    header("location: aduserdata.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
        <script src='../csf/adloginjs.js'></script>
        
</head>
<body>
<form action="" onsubmit="return validateForm()" method="post">
    enter your email id:<input type="text" id="email" onkeyup="va()"name="email"><br><br><br><p id="errorname"></p>
    enter your password;<input type="text" id="password"  onkeyup="val()" name="password"><br><br><br>    <p id="errorroll"></p>
    <input type="submit" name="submit" value="submit">  <br><br>OR you have any account <button type="button" ><a href="adregistration.php">GO To Regestration</a></button>
    

    
</form>
<?php echo $err; ?>
</body>
</html>

<?php
unset($_SESSION['email']);
?>