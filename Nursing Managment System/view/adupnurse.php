<?php
session_start(); 

include('../control/adupnurselogic.php');



?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="../css/info.css">
</head>
<body>
<h2>nurse update Page</h2>

Hii, 
<br>Your Profile Page.
<br><br>

 <?php echo $error; ?>
<form action='' method='post'>
input nid number : <input type='text' name='id'  >
<br><br>
lasttname : <input type='text' name='name'  >
<br><br>
email : <input type='text' name='email'  > <br><br>
     <br>
     hname name : <input type='text' name='hname'  > <br><br>

     <input name='update' type='submit' value='Update'>  

    
<br>
<br>

</body>
</html>