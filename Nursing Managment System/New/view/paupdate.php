<?php
include('../include/updatecheck.php');
if(empty($_SESSION["UserName"])) 
{
header("Location: ../view/login.php");
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Update</h2>
 

 <form action='' method='post'>
DOB : <input type='date' name='dob' value="<?php echo $dob; ?>" ><br><br>
serial : <input type='serial' name='serial' value="<?php echo $Serial; ?>" ><br><br>
payment : <input type='payment' name='payment' value="<?php echo $Payment; ?>" ><br><br>
problem : <input type='problem' name='problem' value="<?php echo $Problem; ?>" ><br><br>
 Gender:
 <?php echo $radioValidation; ?>
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php echo $radio3; ?> > Other
     <br>
     <br>
     <input name='update' type='submit' value='Update'>  

</body>
<a href="../view/login.php">Back </a>

<a href="../view/logout.php"> logout</a>
</html>