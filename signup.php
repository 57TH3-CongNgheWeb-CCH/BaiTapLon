<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký tài khoản</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="icon" href="cannabis.ico">	
</head>
<body>
	<div id="logo"><a href="web1.php" ><img src="images/logo2.png"></a></div>
	<form action="action_page.php" class="modal-content">
		<div class="imgcontainer">
			<img src="images/user-ava.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label for="id"><b>Email người dùng</b></label>
			<input type="text" placeholder="Mời bạn nhập email" name="email" required>

			<label for="pw"><b>Mật khẩu</b></label>
			<input type="password" placeholder="Mời bạn nhập mật khẩu" name="pw" required>

			<label for="pw"><b>Nhập lại mật khẩu</b></label>
			<input type="password" placeholder="Mời bạn nhập lại mật khẩu" name="pw" required>

			<button type="submit">Đăng ký</button>
		</div>
	</form>
</body>
</html>