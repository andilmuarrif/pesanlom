<?php   
session_start(); 
session_destroy(); 
header("location:../Home/Home.html"); //logout dan kembali ke halaman awal
exit();
?>
