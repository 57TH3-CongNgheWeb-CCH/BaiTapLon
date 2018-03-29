<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xoá thuốc bệnh</title>
</head>
<body>
	<?php
	require("../ketnoi.php");
	if (isset($_POST["submit"])){
		$idthuoc = $_POST['idthuoc'];
		$sql = "DELETE FROM thuoc WHERE idthuoc='$idthuoc';";
		$result = mysqli_query($conn, $sql);		
		if ($idthuoc == ""){
			echo "Không được bỏ trống! Mời bạn điền đẩy đủ thông tin";
		}		
		else{
			if($result){
				echo "Đã xoá thành công";
			}
			else{
				echo "Không thành công";
			}
		}
	}
	if (isset($_POST["submit2"])){
		$tenbenh = $_POST['tenbenh'];
		

		$sql = "DELETE FROM benh WHERE tenbenh='$tenbenh';";
		$result = mysqli_query($conn, $sql);
		

		if ($tenbenh == ""){
			echo "Không được bỏ trống! Phải điền đẩy đủ thông tin";
		}		
		else{
			if($result){
				echo "Đã xoá thành công";
			}
			else{
				echo "Không thành công";
			}
		}
	}

	mysqli_close($conn);
	?>
	<a href="admin.php">Quay lại</a>
	<h1>Xoá thuốc</h1>
	<form name="frm" method="POST">
		Mã thuốc: <input type="text" name="idthuoc">
		
		<input type="submit" name="submit" value="Xoá">
	</form>
	<h1>Xoá bệnh</h1>
	<form method="POST">
		Tên bệnh: <input type="text" name="tenbenh">
		
		<input type="submit" name="submit2" value="Xoá">
	</form>
	
</body> 
</html>