<?php
$validatename = "";
$validateemail = $validatepass = $validatecmt= "";
$validatecheckbox = "";
$validateradio = "";
$h1 = $h2 = $h3 = "";
$name = $email = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_REQUEST["fname"];
    $email = $_REQUEST["email"];
    $cmt = $_REQUEST["comment"];

    if (empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"]) < 3))
    {
        $validatename = "You must enter name";

    }
    else
    {
        $validatename = "Your name is " . $name;
    }

    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $validateemail = "You must enter email";
    }
    else
    {
        $validateemail = "Your email is " . $email;
    }

    if (empty($_REQUEST["comment"]) || (strlen($_REQUEST["comment"]) < 3))
    {
        $validatecmt = "You have to write something";

    }
    else
    {
        $validatecmt = "Your comment is " . $cmt;
    }
    
    if(isset($_POST['password'])) {
        $password = $_POST['password'];
        
        if(strlen($password) < 6) {
            $validatepass = "Password must be at least 6 characters";
        } else {
            $validatepass = "Your password is entered";
        }
    }

    if (!isset($_REQUEST["hobby1"]) && !isset($_REQUEST["hobby2"]) && !isset($_REQUEST["hobby3"]))
    {
        $validatecheckbox = "Please select at least one";

    }
    else
    {
        if (isset($_REQUEST["hobby1"]))
        {
            $h1 = $_REQUEST["hobby1"];
        }
        if (isset($_REQUEST["hobby2"]))
        {
            $h2 = $_REQUEST["hobby2"];
        }
        if (isset($_REQUEST["hobby3"]))
        {
            $h3 = $_REQUEST["hobby3"];
        }
    }
    if (isset($_REQUEST["gender"]))
    {
        $validateradio = $_REQUEST["gender"];
    }
    else
    {
        $validateradio = "Please select any one";
    }

}
?>
