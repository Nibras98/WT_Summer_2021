<?php
session_start(); 
include('../model/project.php');
$UserName_error = "";
$cont_error = "";
$Serial_error = "";
$Problem_error= "";
$Payment_error="";  
$message="";   
        if (isset($_POST['submit']))
        {
        
            if (empty($_POST["UserName"]))
            {
                $UserName = " enter your UserName";
        
            }

    if (empty($_POST["Contact"]))
    {
        $cont_error = "Enter Your Contact Nubmer";

    }
    else
    {
        if((strlen($_POST["Contact"]) < 3))
        {
            $cont_error = "Contact Number must be more than 3 characters";
        }
    }
    if(empty($_POST['Payment'])) {
        $Payment_error="Please Enter a Payment";
     }
     
     if (empty($_POST["Problem"]) || (strlen($_POST["Problem"]) < 3))
     {
         $Problem_error = "Enter Your problem";
 
     }
     
   
 
     if (empty($_POST["Serial"]))
     {
         $Serial_error = "Please Enter a Serial Number";
     }
     
    $connection=new project();
    $con=$connection->start();


    $iner=$connection->add($con,"padetails", $_POST['UserName'], $_POST['Contact'],$_POST['Serial'],$_POST['Payment'],$_POST['Problem']);
    if($iner==true)
    {
        echo "Data has been inputed successfully";
    }
    else
    {
        echo "Data has not been taken";
    }

    if($username_error=="" &&  $prob_error=="" && $cont_error=="" && $payment_error=="" && $serial_error=="" )
    {
    $formdata = array(
        'username'=> $_POST['UserName'],
        'contact'=> $_POST['Contact'],
        'payment'=> $_POST['Payment'],
        'serial'=> $_POST['Serial'],
        'problem' => $_POST['Problem'],
    
    ); 
$existingdata = file_get_contents('../json/padata.json');
    $tempJSONdata = json_decode($existingdata, true);
    $tempJSONdata[] =$formdata;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if(file_put_contents("../json/padata.json", $jsondata)){
        $_SESSION['message']='Data successfully saved.';
        header("Location:../view/padetails.php");
    } else{
        $_SESSION['message']="No data saved";
        header("Location:../view/padetails.php");
    }  
}
else{
    
    $_SESSION['UserName_error']=$UserName_error;
    $_SESSION['Contact_error']=$Contact_error;
    $_SESSION['Serial_error']=$Serial_error;
    $_SESSION['Payment_error']=$Payment_error;
    $_SESSION['Problem_error']=$Problem_error;
    header("Location:../view/padetails.php");
}
}
    ?>