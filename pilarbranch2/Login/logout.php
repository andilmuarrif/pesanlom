<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:../Home/Home.html"); //to redirect back after logging out
exit();
?>