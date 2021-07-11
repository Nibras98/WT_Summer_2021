<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../view/palogin.php"); // Redirecting To Home Page
}
?>