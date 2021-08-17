<?php



?>



<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>
<body>

<h1>SEARCHING BY AJAX</h1>


</body>
</html>
<br/><h2>SEARCH THE INFORMATION</h2>


<h5>Do you want to go to <a href="../../../views/Moderator_view/moderatorhome.php"> GO back</a></h5>


<br/>

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
  xhttp.open("POST", "../control/log.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>



<label>find detail of user</label>

  <input type="text" id="uname" onkeyup="showmyuser()">
  

<p id="mytext"></p>



</body>
</html>

<?php


?>   


