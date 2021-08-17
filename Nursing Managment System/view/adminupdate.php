<?php
session_start(); 

include('../control/adminupdatelogic.php');



?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="../css/info.css">
</head>
<body>

<br><h1> Your update your profilePage</h1>.
<br><br>
<?php
$radio1=$radio2=$radio3=$radioValidation=$dob="";
$firstname=$email="";
$connection = new ad();
$conobj=$connection->strt();




?>
 <?php echo $error; ?>
<form action='' method='post'>
input nid number : <input type='text' name='nid'  >
<br><br>
lasttname : <input type='text' name='lname'  >
<br><br>
email : <input type='text' name='mail'  > <br><br>
     <br>
company name : <input type='text' name='aname'  > <br><br>
contact number : <input type='text' name='contact'  > <br><br>
     <input name='update' type='submit' value='Update'>  
     <button type="button"><a href="aduserdata.php"> admin from  detail</a></button>
    
<br>

</body>
</html>