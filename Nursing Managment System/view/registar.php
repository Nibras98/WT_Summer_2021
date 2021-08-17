<?php


?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
</head>
<body>
    <form action="validate.php"method="post" >
    <fieldset class="fi">
       <legend class="le">Registration: </legend>
       Firstname:
       <input type="text" name="firstname"><br><br>
       Lastname:
       <input type="text" name="lastname"><br><br>
       Password:
       <input type="password" name="password"><br><br>
        Email:
        <input type="email" name="email"><br><br>

        Gender:
        <select name="country" class="se">
            <option>Select Any One</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
           





        </select>
        <br><br><br><br>
        <br><br>
        <br><br>
        <div class="ii">
        <input type="submit"name="submit" value="Registration" class="su">

        

        <button type="button" class="btn"><a href="login.php">Go Back To Login</a></button>
        </div>

    
    
    
    
    
    
    
    </fieldset>
    </form>
</body>
</html>