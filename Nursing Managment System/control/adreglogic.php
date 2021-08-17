<?php
session_start();
include('../model/ad.php');

$firstname_error = "";
$lastname_error = "";
$cname="";
$cont_error = "";
$Nid_error = "";
$email_error = $add_error= $posi_error="";
$posi_error = $_mail_error="";
$pass_error="";
$fi="";
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

    if (empty($_POST["aname"]))
    {
        $cname = " enter your company  name";

    }
    

    if (empty($_POST['mail']) )
    {
        $mail_error = "You must enter email";
    }
    

    if (empty($_POST["adate"]) )
    {
        $add_error = "Enter the date";

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
    

    
    if (empty($_POST["posi"]))
    {
        $posi_error ="Please Check Your Gender";
    }

    if (empty($_POST["nid"]))
    {
        $Nid_error = "Please Enter a Nid Number";
    }
    
   
    
    if($firstname_error=="" && $lastname_error==""&& $mail_error==""&& $cname=="" && $add_error=="" && $cont_error=="" && $pass_error=="" && $posi_error=="" && $Nid_error=="")
    {
        $formdata = array(
        'name'=> $_POST['fname'],
        'lnam'=> $_POST['lname'],
        'coname'=>$_POST['aname'],
        'contact'=> $_POST['contact'],
        'nid' => $_POST['nid'],
        'email'=> $_POST['mail'],
        'password'=> $_POST['password'],
        'position'=> $_POST['posi'],
        'Date' => $_POST['adate'],
        
        );   

        $existingdata = file_get_contents('../json/daa.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../json/daa.json", $jsondata)){
            $_SESSION['message']='Data successfully saved.';
            header("Location:../view/adregistration.php");
        } else{
            $_SESSION['message']="No data saved";
            header("Location:../view/adregistration.php");
        }  
    }
    else{
        $_SESSION['firstname_error']=$firstname_error;
        $_SESSION['lastname_error']=$lastname_error;
        $_SESSION['cname']=$cname;
        $_SESSION['mail_error']=$mail_error;
        $_SESSION['add_error']=$add_error;
        $_SESSION['cont_error']=$cont_error;
        $_SESSION['pass_error']=$pass_error;
        $_SESSION['posi_error']=$posi_error;
        $_SESSION['Nid_error']=$Nid_error;
        
        header("Location:../view/adregistration.php");
    }

    $connection=new ad();
    $con=$connection->strt();


    $iner=$connection->insert($con,"admn", $_POST["fname"], $_POST["lname"],$_POST["aname"],$_POST["nid"],$_POST["contact"],$_POST["mail"],$_POST["password"],$_POST["posi"],$_POST["adate"]);
    if($iner==true)
    {
        echo "suceffful";
    }
    else
    {
        echo "no";
    }
}
?>
