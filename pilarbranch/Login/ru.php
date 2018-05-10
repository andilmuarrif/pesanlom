<?php

include('connection.php');
	if(isset($_POST["submit"])){
		$username = htmlentities(strip_tags($_POST["username"]));
		$password = htmlentities(strip_tags($_POST["password"]));
		$email = htmlentities(strip_tags($_POST["email"]));
		$no_hp = htmlentities(strip_tags($_POST["no_hp"]));
		$kafe = htmlentities(strip_tags($_POST["kafe"]));
		$manager = htmlentities(strip_tags($_POST["manager"]));
		$alamat = htmlentities(strip_tags($_POST["alamat"]));

		
		$syntax="insert into user values('$kafe','$manager','$username','$password','$email','$alamat','$no_hp')";
		$login = mysqli_query($link,$syntax);
		header ('location:loginuser.html');
	}
?>


