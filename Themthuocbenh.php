<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm thuốc bệnh</title>
</head>
<body>
	<?php
		include("Them.php");
 	?>
	<a href="admin.php">Quay lại</a>
	<h1>Thêm thuốc</h1>
	<form name="frm" method="POST">
		Mã thuốc: <input type="text" name="idthuoc"><br><br>
		Tên thuốc: <input type="text" name="tenthuoc"><br><br>
		Nguồn gốc: <input type="text" name="nguongoc"><br><br>
		Công dụng: <br><textarea name="congdung" rows="10" cols="100" overflow="scroll"></textarea><br><br>
		<input type="submit" name="submit" value="Thêm">
	</form>
	<h1>Thêm bệnh</h1>
	<form method="POST">
		Tên bệnh: <input type="text" name="tenbenh"><br><br>
		Biểu hiện: <br><textarea name="bieuhien" rows="10" cols="100" overflow="scroll"></textarea><br><br>
		Phương pháp: <br><textarea name="phuongphap" rows="10" cols="100" overflow="scroll"></textarea><br><br>
		<input type="submit" name="submit2" value="Thêm">
	</form>
	
</body> 
</html>