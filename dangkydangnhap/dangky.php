<?php 
	include("../ketnoi.php"); 

	if (isset($_POST["btn_signup"])){
		$email = $_POST['email'];
		$pw = $_POST['pw'];
		$pw=md5($pw);
		$sql = "insert into taikhoan(Email, Password) values('$email','$pw');";
		$result = mysqli_query($conn, $sql);
		if ($email == "" && $pw == ""){
			echo "Không được bỏ trống! Mời bạn điền đẩy đủ thông tin";
		}
		else{
			if($result){
				echo "Đăng ký tài khoản $email thành công";
			}
			else{
				echo "Không thành công";
			}
		}
	}

	mysqli_close($conn);
 ?>