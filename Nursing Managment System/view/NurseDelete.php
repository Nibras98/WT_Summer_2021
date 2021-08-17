<?php
session_start(); 

include('../control/NurseDeleteID.php');

?>

 <?php echo $error; ?>
<form action='' method='post'>
id : <input type='text' name='id'   >
<br><br>
     <br>
     <input name='delete' type='submit' value='delete'>  

    
</form>

</body>
</html>