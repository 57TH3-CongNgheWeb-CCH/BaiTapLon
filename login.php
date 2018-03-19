<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập tài khoản</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="icon" href="cannabis.ico">	
</head>
<body>
	<a href="web1.php" ><img src="images/logo2.png" id="image"></a>
	<form action="action_page.php" class="modal-content">
		<div class="imgcontainer">
			<img src="images/user-ava.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label for="id"><b>Tên tài khoản</b></label>
			<input type="text" placeholder="Tên người dùng" name="id" required>

			<label for="pw"><b>Mật khẩu</b></label>
			<input type="password" placeholder="Mật khẩu" name="pw" required>

			<button type="submit">Đăng nhập</button>
		</div>
	</form>
</body>
</html>