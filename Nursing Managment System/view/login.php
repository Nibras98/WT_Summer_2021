
<?php

 session_start();


?>



<?php

$dbname="mr.ismailhossain123@gmail.com";
$dbpassword=123456;

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username==$dbname){
        if($password==$dbpassword){
            $_SESSION['CurrentUser']=$username;
            echo "welcome back".$username;
            echo "<br>";
           echo' <a href="profile.php"text-decoration:"none">Click Here to profile</h1></a>';
            
          
            
          
            
            
        }
    }

        else{
            echo 'Wrong Password </h1>';
        }
    
}




?>





<html lang="en">
<head>
   
    <title>Login</title>
    <link rel="" href="">
</head>
<body>

    <form action="" method="post" align="center" class="fo">

        <fieldset class="cl">
            <legend class="li" align="center">Login</legend>

            <div class="cont">
                Username:
                <input type="text" name="username">
                <br><br>
                Password:
                <input type="password" name="password">
                <br><br>
                <input type="submit"name="submit"value="Login" class="lo">
                <button type="button"class="reg"><a href="registar.php" >Go to regitartion</a></button>




            </div>
            
            



        

        </fieldset>






    </form>
</body>
</html>