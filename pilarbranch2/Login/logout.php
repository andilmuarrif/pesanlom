<?php   
session_start(); 
session_destroy(); 
header("location:../Home/index.php"); //logout dan kembali ke halaman index
exit();
?>
