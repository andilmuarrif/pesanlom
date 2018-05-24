<?php   
session_start(); 
session_destroy(); 
header("location:../Login/loginindex.html"); //logout dan kembali ke halaman login
exit();
?>
