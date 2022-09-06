<?php 
	$localhost = "localhost";
	$db_name = "root";
	$db_pass = "";
	$db_u_name = "library_project";
	$conn = mysqli_connect($localhost,$db_name,$db_pass,$db_u_name);

	if (!$conn) {
		die("connection failed!!" .mysqli_connect_error());
		// code...
	}else{
		//echo "Connection successfully done!";
	}
	



?>