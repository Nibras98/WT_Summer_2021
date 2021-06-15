<?php
    $validatename = "";
    $validateemail = $validatepass = $validatecmt= "";
    $validatecheckbox = "";
    $validateradio = "";
    $h1 = $h2 = $h3 = $infoh = $infog = $target_file=  "";
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
            
            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            
            if(strlen($password) < 6 || !$number || !$uppercase || !$lowercase) {
                $validatepass = "Password must be at least 6 characters and must contain at least one Number, one Upper case & one Lower case letter";
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
            $infoh = "You choose ";
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
            $infog = "Your are ";
            $validateradio = $_REQUEST["gender"];
        }
        else
        {
            $validateradio = "Please select any one";
        }
        $target_file = "files/".$_FILES["filetoupload"]["name"];

        if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)){
            echo "You have uploaded ".$_FILES["filetoupload"]["name"];
            echo "<img src=".$target_file.">";
        } else{
            echo "Sorry, there was an error uploading your file.";
        }

    }

?>