<?php
session_start(); 

include('../control/NurseUpdatecheck.php');



?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, 
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3=$radioValidation=$dob="";
$name=$email="";
$connection = new project();
$conobj=$connection->strt();




?>
 <?php echo $error; ?>
<form action='' method='post'>
input id number : <input type='text' name='id'  >
<br><br>
name : <input type='text' name='name'><br><br>
hname name : <input type='text' name='hname'><br><br>
email : <input type='text' name='email'  > <br><br>
   <br>
     <input name='update' type='submit' value='Update'>  

    
<br>
<br>
<a href="../view/NurseProfile.php">Back </a>

<a href="../view/NurseLogout.php"> logout</a>

</body>
</html>