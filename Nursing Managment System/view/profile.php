<?php

session_start();


if(isset($_SESSION['CurrentUser'])){

    echo "Welcome". $_SESSION [ 'CurrentUser' ] ."This is your profile";
    echo "<br>";
    echo "<br>";
    echo "<a href='select t.php'><h1>1.Employee details</h1><a>";
    echo "<a href='select pack.php'><h1>2.Patient details</h1><a>";
    echo "<a href='selectac.php'><h1 >3.Nurse details</h1><a>";

}

else{
    echo "you must be logged in";
}






?>
