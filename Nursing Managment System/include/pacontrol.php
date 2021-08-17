<?php
session_start(); 
include('../model/project.php');
$firstname_error = "";
$lastname_error = "";
$cont_error = "";
$Nid_error = "";
$email_error = $add_error= $gender_error="";
$gender_error= $_mail_error="";
$pass_error="";  
$message="";   
        if (isset($_POST['submit']))
        {
        
            if (empty($_POST["fname"]))
            {
                $firstname_error = " enter your first  name";
        
            }
            
            if (empty($_POST["lname"]))
            {
                $lastname_error = " enter your last name";
        
            }
            if (empty($_POST['mail']) )
    {
        $mail_error = "You must enter email";
    }
    if (empty($_POST["contact"]))
    {
        $cont_error = "Enter Your Contact Nubmer";

    }
    else
    {
        if((strlen($_POST["contact"]) < 3))
        {
            $cont_error = "Contact Number must be more than 3 characters";
        }
    }
    if(empty($_POST['password'])) {
        $pass_error="Please Enter a Password";
     }
     
     if (empty($_POST["Address"]) || (strlen($_POST["Address"]) < 3))
     {
         $add_error = "Enter Your Address";
 
     }
     
     if (empty($_POST["gender"]))
     {
         $posi_error ="Please Check Your Gender";
     }
 
     if (empty($_POST["nid"]))
     {
         $Nid_error = "Please Enter a Nid Number";
     }
     
    $connection=new project();
    $con=$connection->start();


    $iner=$connection->insert($con,"paregistration", $_POST["ID"],$_POST["fname"],$_POST["lname"], $_POST['contact'],$_POST['nid'],$_POST['email'], $_POST['password'], $_POST['gender'],
   $_POST['Address']);
    if($iner==true)
    {
        echo "Data has been inputed successfully";
    }
    else
    {
        echo "Data has not been taken";
    }

       
    if($firstname_error=="" && $lastname_error==""&& $email_error=="" && $add_error=="" && $cont_error=="" && $pass_error=="" && $gender_error=="" && $Nid_error=="")
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
    $existingdata = file_get_contents('../json/painfo.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../json/painfo.json", $jsondata)){
            $_SESSION['message']='Data successfully saved.';
            header("Location:../view/PatientRegistration.php");
        } else{
            $_SESSION['message']="No data saved";
            header("Location:../view/PatientRegistration.php");
        }  
    }
    else{
            $_SESSION['firstname_error']=$firstname_error;
            $_SESSION['lastname_error']=$lastname_error;
            $_SESSION['email_error']=$email_error;
            $_SESSION['add_error']=$add_error;
            $_SESSION['cont_error']=$cont_error;
            $_SESSION['pass_error']=$pass_error;
            $_SESSION['Gender_error']=$Gender_error;
            $_SESSION['Nid_error']=$Nid_error;
            $_SESSION['message']= $message; 
        header('Location:../view/PatientRegistration.php');
    }
}
        ?>