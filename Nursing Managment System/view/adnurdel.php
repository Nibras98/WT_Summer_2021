<?php

//include('../control/log.php');


?>


<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/info.css">
<body>

<br/><h1>Welcome to nurse delete page.</h1>
<br><br>



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
  xhttp.open("POST", "../control/adnurdellogic.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>



<label><h3> find the first name which one you want delete<h3></label><br>

  <input type="text" id="uname" onkeyup="showmyuser()">
  

<p id="mytext"></p>


<form action='../control/adnurdellogic.php' method='post'>
nid : <input type='text' name='id'   >
<br><br>
     <br>
     <input name='delete' type='submit' value='delete'>  <br>
     <button type="button"><a href="aduserdata.php"> admin from  detail</a></button>

    
</form>


</body>
</html>

<?php


?>   


