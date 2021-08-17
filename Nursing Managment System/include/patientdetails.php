<?php
session_start(); 
include('../model/project.php');
$username_error = "";
$contact_error = "";
$payment_error = "";
$problem_error="";  
$message="";   
        if (isset($_POST['submit']))
        {
        
            if (empty($_POST["name"]))
            {
                $username_error = " enter your  name";
        
            }
            
 
    if (empty($_POST["contact"]))
    {
        $contact_error = "Enter Your Contact Nubmer";

    }
    else
    {
        if((strlen($_POST["contact"]) < 3))
        {
            $contact_error = "Contact Number must be more than 3 characters";
        }
    }
    if(empty($_POST['payment'])) {
        $payment_error="Please Enter your payment";
     }
     
     if (empty($_POST["problem"]) || (strlen($_POST["problem"]) < 3))
     {
         $problem_error = "Enter Your problem";
 
     }
     
    
    $connection=new project();
    $con=$connection->start();


    $iner=$connection->add($con,"SerialBooking",$_POST['Serial'], $_POST["name"], $_POST['contact'], $_POST['payment'], $_POST['problem']);
    if($iner==true)
    {
        echo "Data has been inputed successfully";
    }
    else
    {
        echo "Data has not been taken";
    }

       
    if($username_error =="" && $contact_error ==""&& $payment_error=="" && $problem_error=="" )
     {
        $formdata = array(
            'Name'=> $_POST['name'],
            'contact'=> $_POST['contact'],
            'payment' => $_POST['payment'],
            'problem'=> $_POST['problem'],
         
        ); 
    $existingdata = file_get_contents('../json/padata.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../json/painfo.json", $jsondata)){
            $_SESSION['message']='Data successfully saved.';
            header("Location:../view/BookSerial.php");
        } else{
            $_SESSION['message']="No data saved";
            header("Location:../view/BookSerial.php");
        }  
    }
    else{


            $_SESSION['username_error']=$username_error ;
            $_SESSION['contact_error']=$contact_error;
            $_SESSION['payment_errorr']=$payment_errorr;
            $_SESSION['problem_error']=$problem_error;
           
            $_SESSION['message']= $message; 
        header('Location:../view/BookSerial.php');
    }
}
        ?>