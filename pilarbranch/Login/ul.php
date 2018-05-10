<?php
session_start();
include('connection.php');
	if(isset($_POST["submit"])){
		$username = htmlentities(strip_tags($_POST["username"]));
		$password = htmlentities(strip_tags($_POST["password"]));
		
		$syntax="SELECT * FROM user where username='$username' and password='$password'";
		

		$login = mysqli_query($link,$syntax);

		if ($login->num_rows > 0){
			//output data of each row
			header ('location:../Home/index.php');
				$_SESSION["username"] = $username;

		}else{
			header ('location:loginuser.html');}

			
	}


?>