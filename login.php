<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập tài khoản</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="icon" href="cannabis.ico">	
</head>
<body>
	<?php include("dangnhap.php"); ?>
	<div id="logo"><a href="web1.php" ><img src="images/logo2.png"></a></div>
	<form method="POST">
		<div class="imgcontainer">
			<img src="images/user-ava.png" alt="Avatar" class="avatar">
		</div>
		
		<div class="container">
			<label for="id"><b>Email người dùng</b></label>
			<input type="text" placeholder="Tên người dùng" name="email" required>

			<label for="pw"><b>Mật khẩu</b></label>
			<input type="password" placeholder="Mật khẩu" name="pw" required>

			<button type="submit" name="btn_login">Đăng nhập</button>
		</div>
	</form>
</body>
</html>