<?php
include('../model/db.php');

$error="";

if(isset($_POST['add']))
{
    if (empty($_POST['pname']) || empty($_POST['pdesc'])|| empty($_POST['pcategory'])|| empty($_POST['pprice']) || empty($_FILES['pimage']['name'])) 
    {
        $error = "input given is invalid";
    }
    else
        {

        $connection = new db();
        $conobj=$connection->OpenCon();
        $target_destination="../file/".$_FILES['pimage']['name'];
        
        $userQuery=$connection->AddProduct($conobj,"product",$_POST['pname'],$_POST['pdesc'],$_POST['pcategory'],$_POST["pprice"],$target_destination);
        if($userQuery==TRUE)
        {
            if (move_uploaded_file($_FILES["pimage"]["tmp_name"],  $target_destination)) {
              echo "file upload done";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        else
        {
            echo "could not update";    
        }
        $connection->CloseCon($conobj);
        
        }


}