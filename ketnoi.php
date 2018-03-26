<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "caythuoc";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if (!$conn){
		die("Kết nối thất bại! Lỗi: " .mysqli_connect_error());
	}

 ?>