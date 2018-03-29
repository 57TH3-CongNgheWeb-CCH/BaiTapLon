<?php 
	
	session_start();

	include("ketnoi.php");

	if(isset($_POST["btn_login"])){
		$sql = 'select * from taikhoan where Email ="'.$_POST['email'].'" and Password = "'.$_POST['pw'].'" ';
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			echo "Đăng nhập thành công! Chào ".$_POST["email"];

			$_SESSION['email'] = $_POST['email'];
			if($_SESSION['email']=='admin'){
				header('Location: Admin/Admin.php');
			}
			else{
				echo "<script>console.log( 'Debug Objects: " . $_SESSION['email'] . "' );</script>";
				header('Location: Webtong/web.php');
			}
		}
			
		else{
			echo "Bạn đăng nhập không đúng tài khoản!";
		}
	} 

	mysqli_close($conn);
 ?>