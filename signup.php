<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng ký tài khoản</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<link rel="icon" href="cannabis.ico">	
</head>
<body>
	<?php include("dangky.php"); ?>

	<div id="logo"><a href="Webtong/web.php" ><img src="images/logo2.png"></a></div>
	<form method="POST">
		<div class="imgcontainer">
			<img src="images/user-ava.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label for="id"><b>Email người dùng</b></label>
			<input type="text" placeholder="Mời bạn nhập email" name="email" required>

			<label for="pw"><b>Mật khẩu</b></label>
			<input type="password" placeholder="Mời bạn nhập mật khẩu" name="pw" required>


			<button type="submit" name="btn_signup">Đăng ký</button>
		</div>
	</form>
</body>
</html>