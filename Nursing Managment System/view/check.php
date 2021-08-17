<?php



?>


<!DOCTYPE html>
<html>
<head>
	<title align="center" > User Details</title>
	<link rel="stylesheet" href="../css/PatientRegistration.css">

<body>

<ul>
		
<li><a href="logout.php">Logout</a></li>
<li><a href="FirstPage.php">First Page</a></li>
<li><a href="Home.php">Home Page</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About</a></li>

	</ul>



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

<h1 align='center'>Details of User</h1>
<table align='center'>
				<tr>
					<td>Find Detail of User </td>
					<td><input type="text" id="uname" onkeyup="showmyuser()"></td>
				<td><p id="mytext"></p></td>
				</tr>
        </table>

</body>
</html>

<?php


?>   


