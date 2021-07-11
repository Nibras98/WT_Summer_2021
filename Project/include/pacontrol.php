<?php

$validfirstname = "";
$validlastname = "";
$validatecont = "";
$validatenid = "";
$validateemail = $validatepass = $validateadd= "";
$validateradio = "";
$firstname = $lastname = $add = $email = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $formdata = array(
        'FirstName'=> $_POST['fname'],
        'LastName' => $_POST['lname'],
        'contact'=> $_POST['contact'],
        'nid' => $_POST['nid'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'gender'=> $_POST['gender'],
        'Address' => $_POST['Address'],
       
        );
   
    if (empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"]) < 3))
    {
        $validatefirstname = "You must enter name";

    }
    else
    {
        $validatefirstname = "Your name is " . $firstname;
    }
    if (empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"]) < 3))
    {
        $validatelastname = "You must enter name";

    }
    else
    {
        $validatlastename = "Your name is " . $lastname;
    }
    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    {
        $validateemail = "You must enter email";
    }
    else
    {
        $validateemail = "Your email is " . $email;
    }

    if (empty($_REQUEST["Address"]) || (strlen($_REQUEST["Address"]) < 3))
    {
        $validateadd = "Enter Your Address";

    }
    else
    {
        $validateadd = "Your Address is entered " . $add;
    }
    if (empty($_REQUEST["Contact"]) || (strlen($_REQUEST["Contact"]) < 3))
    {
        $validatecont = "Enter Your Contact Nubmer";

    }
    else
    {
        $validatecont = "Your Contact Nubmer is entered " . $cont;
    }
    
    if(isset($_POST['password'])) {
        $password = $_POST['password'];
        
        if(strlen($password) < 6) {
            $validatepass = "Password must be at least 6 characters";
        } else {
            $validatepass = "";
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
    if (empty($_REQUEST["Nid"]) || (strlen($_REQUEST["Nid"]) < 3))
    {
        $validatenid = "Nid";

    }
    else
    {
        $validatenid = "Nid " . $nid;
    }
    $existingdata = file_get_contents('../json/painfo.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../json/painfo.json", $jsondata)){
            echo 'Data successfully saved.';
        } else{
            echo "No data saved";
        }  
}
?>



