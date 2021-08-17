<?php
session_start(); 
include('../model/project.php');
$name_error = "";
$cont_error = "";
$hname_error = "";
$hid_error = "";
$id_error = "";
$email_error = "";
$pass_error = "";
$gender_error = "";
$message="";   
if (isset($_POST['submit']))
{
  
    if (empty($_POST["name"]))
    {
        $name_error = " enter your  name";

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
   if (empty($_POST["hname"]))
   {
       $hname_error = " enter your  Hospital Name";

   }
   if (empty($_POST["hid"]))
   {
    $hid_error = "Please Enter a Hid Number";
   }
   if (empty($_POST["id"]))
  {
  $id_error = "Please Enter a Id Number";
  }

   if (empty($_POST['email']) )
   {
   $email_error = "Please enter your email";
   }

  if(empty($_POST['password'])) {
  $pass_error="Please Enter a Password";
  }

if (empty($_POST["gender"]))
{
 $gender_error ="Please Check Your Gender";
}

  $connection=new project();
    $con=$connection->strt();


    $iner=$connection->insert($con,"nurseregistration", $_POST["name"],$_POST['contact'],$_POST['id'],$_POST["hname"], $_POST['hid'],$_POST['email'], $_POST['password'], $_POST['gender']);
    if($iner==true)
    {
        echo "Successfull";
    }
    else
    {
        echo "Not Successfull";
    }



  if($name_error=="" && $cont_error=="" && $id_error=="" && $hname_error=="" && $hid_error=="" && $email_error=="" && $pass_error=="" && $gender_error=="")
     {
       $formdata = array(
        'name'=> $_POST['name'],
        'contact'=> $_POST['contact'],
        'Hospital Name'=> $_POST['hname'],
        'Hospital Id'=> $_POST['hid'],
        'Id' => $_POST['id'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'gender'=> $_POST['gender'],
       
        );   
        $existingdata = file_get_contents('../json/NurseInfo.json');
            $tempJSONdata = json_decode($existingdata, true);
            $tempJSONdata[] =$formdata;
            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    
            if(file_put_contents("../json/NurseInfo.json", $jsondata)){
                $_SESSION['message']='Data successfully saved.';
                header("Location:../view/NurseRegistration.php");
            } else{
                $_SESSION['message']="No data saved";
                header("Location:../view/NurseRegistration.php");
            }  
        }
        else{
                $_SESSION['name_error']=$name_error;
                $_SESSION['cont_error']=$cont_error;
                $_SESSION['hname_error']=$hname_error;
                $_SESSION['hid_error']=$hid_error;
                $_SESSION['id_error']=$id_error;
                $_SESSION['email_error']=$email_error;
                $_SESSION['pass_error']=$pass_error;
                $_SESSION['gender_error']=$gender_error;
                $_SESSION['message']= $message;
              
        
            header('Location:../view/NurseRegistration.php');
        }
    }
          
    ?>
    
    
    
       