<?php


$validfirstname = "";
$validlastname = "";
$validatecont = "";
$validateserial = "";
$validateproblem= "";
$validatepayment ="";
$firstname = $lastname = $problem = $serial = $payment ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $formdata = array(
        'FirstName'=> $_POST['fname'],
        'LastName' => $_POST['lname'],
        'contact'=> $_POST['contact'],
        'Serial' => $_POST['serial'],
        'Problem' => $_POST['problem'],
        'Payment' => $_POST['payment'],
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
 

    if (empty($_REQUEST["problem"]) || (strlen($_REQUEST["problem"]) ))
    {
        $validateproblem = "Enter Your problem";

    }
    else
    {
        $validateproblem = "Your problem is entered " . $problem;
    }
    if (empty($_REQUEST["Contact"]) || (strlen($_REQUEST["Contact"]) < 3))
    {
        $validatecont = "Enter Your Contact Nubmer";

    }
    else
    {
        $validatecont = "Your Contact Nubmer is entered " . $cont;
    }
    

    if (empty($_REQUEST["serial"]) || (strlen($_REQUEST["serial"]) < 0))
    {
        $validateserial = "serial";

    }
    else
    {
        $validateserial = "serial " . $serial;
    }

    if (empty($_REQUEST["payment"]) || (strlen($_REQUEST["payment"]) < 0))
    {
        $validatepayment = "payment";

    }
    else
    {
        $validatepayment = "payment " . $payment;
    }
    $existingdata = file_get_contents('../json/padata.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../json/padata.json", $jsondata)){
            echo 'Data successfully saved.';
        } else{
            echo "No data saved";
        }  
}


?>
