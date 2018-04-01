<?php 
	
	session_start();

	include("ketnoi.php");

	if(isset($_POST["btn_login"])){
		$_POST['pw'] = md5($_POST['pw']);
		$sql = 'select * from taikhoan where Email ="'.$_POST['email'].'" and Password = "'.$_POST['pw'].'" ';
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
				if ($_POST['email'] == admin) {
					$_SESSION['admin'] = $_POST['email'];
				}
				else{
					$_SESSION['email'] = $_POST['email'];
				}
			
			header("Location: Webtong/web.php?email='".$_SESSION['email']."'");
		}
		else{
			echo "Bạn đăng nhập không đúng tài khoản!";
		}
	} 

	mysqli_close($conn);
 ?>