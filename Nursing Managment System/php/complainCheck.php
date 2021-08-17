<?php
session_start();
require_once('../service/our_service.php');
// require_once('../service/userService.php');

    if(isset($_GET['id']))
    {
        $complain_id= $_GET['id'];
        
        $cmp = complainDelete($complain_id);
        if($cmp==true)
        {
           
        header("location:../views/Moderator_view/complain1.php?Message:DeleteSuccessFul");
        }
        else
        {
            //echo "Delete Failed!";
            header("location:../views/Moderator_view/complain1.php?Message:DeleteFailed");
        }

    }

?>
    