<?php
session_start(); 


include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2 align='center'>Profile Page</h2>


<?php
//$connection1 = new db();
//$conobj1=$connection1->OpenCon();

//$userQuery1=$connection1->searchUser($conobj1,"student",$_POST["usernames"]);

?>

<?php
$user=$radio1=$radio2=$radio3="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);
$userQuery1=$connection->searchUser($conobj,"student",$_POST["usernames"]);
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
     
      if(  $row["gender"]=="male" )
      { $radio1="checked"; }
      else if($row["gender"]=="female")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
} 
  else {
    echo "0 results";
  }



?>
     <h1 align='center'>Search Your Profile:</h1>
<form action="" method="post">
			<table  align='center'>	
			<tr>
			<td>Search by username :</td>
			<td><input type="text" name="username" placeholder="Enter your username"> 
			</tr>	
			<tr><td align='center'><br><input type="submit" name="update" value="Search"></td></tr>
<form action="" method="post">
			<table  align='center'>	
			<tr>
			<td>Firstname :</td>
			<td><input type="text" name="firstname" placeholder="Enter your name"> 
			</tr>	
			<tr>
			<td>Email :</td>
			<td><input type="email" name="email" placeholder="Enter your E-Mail"> 
			</tr>
			<tr>
			<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"><?php echo $radio1; ?> Male
						<input type="radio" id="female" name="gender" value="Female"> <?php echo $radio2; ?>Female
						<input type="radio" id="other" name="gender" value="Other"> <?php  $radio3; ?>  Other
					</td>					
		
			<tr><td align='center'><br><input type="submit" name="update" value="update"></td></tr>   
<br>
<br>
<tr>
<td align='center'><a href="../view/pageone.php">Back </a></td></tr>
<tr><td align='center'><a href="../control/logout.php"> logout</a></td>
</tr>
</body>
</html>