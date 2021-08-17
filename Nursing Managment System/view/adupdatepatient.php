<?php
session_start(); 

include('../control/aduppatientlogic.php');



?>

<!DOCTYPE html>
<html>
     <head>
     <link rel="stylesheet" type="text/css" href="../css/info.css">
</head>
<body>
<h2>Profile Page</h2>

Hii, 
<br>Your Profile Page.
<br><br>

 <?php echo $error; ?>
<form action='' method='post'>
input nid number : <input type='text' name='nid'  >
<br><br>
lasttname : <input type='text' name='fname'  >
<br><br>
email : <input type='text' name='email'  > <br><br>
     <br>
     contact : <input type='text' name='contact'  > <br><br>

     <input name='update' type='submit' value='Update'>  

    
<br>
<br>

</body>
</html>