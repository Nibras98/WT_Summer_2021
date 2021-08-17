<?php
session_start();
include('../model/project.php');
$name_error = "";
$cont_error = "";
$id_error="";
$setschedule_error="";
$serial_error = "";
if (isset($_POST['submit']))
{
    if (empty($_POST["name"]))
    {
        $name_error = " enter your  name";

    }
 
    
    if (empty($_REQUEST["Contact"]) || (strlen($_REQUEST["Contact"]) < 3))
    {
        $cont_error = "Enter Your Contact Nubmer";

    }
    else
    {
        $cont_error = "Your Contact Nubmer is entered " . $cont;
    }

    if (empty($_REQUEST["ID"]) || (strlen($_REQUEST["id"]) ))
    {
        $id_error = "Enter Your ID ";
    }
    else
    {
        $id_error = "Your ID is entered " . $id;
    }
    if (empty($_REQUEST["Schedule"]) || (strlen($_REQUEST["schedule"]) < 0))
    {
        $schedule_error = "Enter your Schedule";

    }
    else
    {
        $schedule_error = "Your Schedule is entered" . $schedule;
    }

    if (empty($_REQUEST["serial"]) || (strlen($_REQUEST["serial"]) < 0))
    {
        $serial_error = "Enter your Serial";

    }
    else
    {
        $serial_error = "Your Serial is entered " . $serial;
    }

    $connection=new project();
    $con=$connection->strt();


    $iner=$connection->add($con,"nursedetails", $_POST['name'], $_POST['contact'],$_POST['id'],$_POST['schedule'],$_POST['serial']);
    if($iner==true)
    {
        echo "Data has been inputed successfully";
    }
    else
    {
        echo "Data has not been taken";
    }

    if($name_error=="" &&  $cont_error=="" && $id_error=="" && $schedule_error=="" && $serial_error=="" )
    {
    $formdata = array(
        'name'=> $_POST['name'],
        'contact'=> $_POST['contact'],
        'id' => $_POST['id'],
        'set schedule' => $_POST['set schedule'],
        'serial' => $_POST['serial'],
        );

    
    $existingdata = file_get_contents('../json/NurseData.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("../json/Nursedata.json", $jsondata)){
            $_SESSION['message']='Data successfully saved.';
            header("Location:../view/SetSchedule.php");
        } else{
            $_SESSION['message']="No data saved";
            header("Location:../view/SetSchedule.php");
        }  
    }
    else{
        
        $_SESSION['name_error']=$name_error;
        $_SESSION['cont_error']=$cont_error;
        $_SESSION['id_error']=$id_error;
        $_SESSION['schedule_error']=$schedule_error;
        $_SESSION['serial_error']=$serial_error;
       
        header("Location:../view/SetSchedule.php");
    }
    }
        ?> 