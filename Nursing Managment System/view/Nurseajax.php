<?php

//include('../control/NurseajaxControl.php');


?>


<!DOCTYPE html>
<html>
  <head>
<body>
<h2>Home</h2>
Hii, 
<br/><h5>Welcome to home page.</h5>




 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../control/NurseajaxControl.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>



<label>find the first name which one you want delete</label><br>

  <input type="text" id="uname" onkeyup="showmyuser()">
  

<p id="mytext"></p>


<form action='../control/NurseajaxControl.php' method='post'>
nid : <input type='text' name='id'   >
<br><br>
     <br>
     <input name='delete' type='submit' value='delete'>  

    
</form>


</body>
</html>

<?php


?>   


