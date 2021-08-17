<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
</body>
</html>















<?php

   if(isset($_POST['submit'])){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $country=$_POST['country'];

  

    $minimum=5;
    $maximum=10;
    $pasmaximum=6;

    if(strlen($firstname)<$minimum){
        echo "name not allowed";
    }
    elseif(strlen($lastname)>$maximum){
        echo "name not allowed";
    }
    
    elseif(empty($_POST['firstname'])){
        echo "username must be completed";
    }
    elseif(strlen($password)<$pasmaximum){
        echo "Password at least 6 characters";
    }
    elseif(empty($_POST['password'])){
        echo "password must be fillup";
    
    }
    elseif(empty($_POST['email'])){
        echo "email must be fillup";
    }
    elseif(empty($_POST['country'])){
        echo "country must be selected";
    }
    else{
       echo "  Hello   "  .$firstname;
        echo "<br>";
        echo " Your email is "  .$email;
        echo "<br>";

        echo 'Registration Successfully done';
    }

   }









?>
