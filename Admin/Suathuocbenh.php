<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa thuốc bệnh</title>
</head>
<body>
	<?php
		include("Sua.php");
		
				
 	?>
	<a href="admin.php">Quay lại</a>
	<h1>Sửa thuốc</h1>
	<form method="POST">
		Tên thuốc: <input type="text" name="tenthuoc" ><br><br>
		Nguồn gốc: <input type="text" name="nguongoc"><br><br>
		Công dụng: <br><textarea name="congdung" rows="10" cols="100" overflow="scroll"></textarea><br><br>
		<input type="submit" name="submit" value="Sửa">
	</form>
	
	<h1>Sửa bệnh</h1>
	<form method="POST">
		Tên bệnh: <input type="text" name="tenbenh"><br><br>
		Biểu hiện: <br><textarea name="bieuhien" rows="10" cols="100" overflow="scroll"></textarea><br><br>
		Phương pháp: <br><textarea name="phuongphap" rows="10" cols="100" overflow="scroll"></textarea><br><br>
		<input type="submit" name="submit2" value="Sửa">
	</form>
</body>
</html>