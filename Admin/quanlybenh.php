<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản Lý Dữ Liệu</title>
	<link rel="stylesheet" type="text/css" href="../css/quanly2.css">
</head>
<body>
	<?php
	// Tạo file kết nối
	include('../ketnoi.php');
	?>
	<div id="menu">
		<div id="logo">
			<a href="../Webtong/web.php">
				<img src="../images/logo2.png">
			</a>
		</div>
		<div id="menu-bar">
			<nav>
				<a href="../Webtong/web.php">Trang chủ</a>
				<a href="quanlythuoc.php">Quản lý thuốc</a>
				<a href="quanlybenh.php">Quản lý bệnh</a>
				<a href="lienhe1.php">Liên hệ</a>
			</nav>
		</div>
	</div>
	<form action="" method="post">
		<div id="dulieu">
			<h2>Quản Lí Bệnh</h2>
			<input id="place" type="text" name="txttenbang" value="benh" readonly="readonly"><br>

			<input id="place" type="text" name="txttenbenh" placeholder="Tên Bệnh"><br>
			<input id="place" type="text" name="txtnoidung" placeholder="Nội Dung"><br>
			<input id="place" type="text" name="txtanh" placeholder="Ảnh"><br>
			<input id="nut" type="submit" name="btnthem" value="Thêm">
			<input id="nut" type="submit" name="btnsua" value="Sửa">
			<input id="nut" type="submit" name="btnxoa" value="Xóa">
		</div>
		
	</form>
	<?php 
		//thêm bệnh
	if(isset($_POST['btnthem']))
	{
			// Gán tên biến vào giá trị của nút
		$tenbang = mysqli_real_escape_string($conn,$_POST['txttenbang']);
		$tenbai = mysqli_real_escape_string($conn,$_POST['txttenbenh']);
		$noidung = mysqli_real_escape_string($conn,$_POST['txtnoidung']);
		$anh = mysqli_real_escape_string($conn,$_POST['txtanh']);
		//câu lệnh sql thêm bản ghi 
		$sql = "INSERT INTO $tenbang(tenbenh,noidung,anh) VALUES('$tenbai','$noidung','$anh')";
		$result = mysqli_query($conn,$sql);
		//câu lệnh điều kiện kiểm tra đã nhập tên bệnh hay chưa.
		if($tenbai==null)
		{
			echo '<script>alert("Bạn cần nhập tên bệnh")</script>';
		}
		else
		{
			if($result)
			{
				echo '<script>alert("Thêm bài đăng thành công!")</script>';
			}
			else
			{
				echo '<script>alert("Thêm Thất Bại!")</script>';
			}			
		}
		mysqli_close($conn);
	}
		//sửa bài đăng
	if(isset($_POST['btnsua']))
	{
		$tenbang = mysqli_real_escape_string($conn,$_POST['txttenbang']);

		$tenbenh = mysqli_real_escape_string($conn,$_POST['txttenbenh']);
		$noidung = mysqli_real_escape_string($conn,$_POST['txtnoidung']);
		$anh = mysqli_real_escape_string($conn,$_POST['txtanh']);
		//câu lệnh sưa dữ liệu trong bảng có biến tên bảng vs trường nội dung = vs biện nội dung vs điều kiện trường bệnh bằng vs biến bệnh
		$sql = "UPDATE $tenbang SET `noidung`='$noidung',`anh`='$anh' WHERE `tenbenh`='$tenbenh'";
		//chứa kết quả thực truy xuất từ csdl
		$result = mysqli_query($conn,$sql);
		if($tenbenh == null)
		{
			echo '<script>alert("Bạn cần nhập tenbenh!")</script>';
		}
		else
		{
			if($result)
			{
				echo '<script>alert("Sửa Thành Công!")</script>' ;
			}
			else
			{
				echo $sql .mysqli_connect_error($sql);
			}
		}
		mysqli_close($conn);
	}
		//xóa bệnh
	if(isset($_POST['btnxoa']))
	{
		$tenbang = mysqli_real_escape_string($conn,$_POST['txttenbang']);
		$tenbenh = mysqli_real_escape_string($conn,$_POST['txttenbenh']);
		$sql = "DELETE FROM $tenbang WHERE `tenbenh`='$tenbenh'";

		$result = mysqli_query($conn,$sql);
		if($tenbenh == null)
		{
			echo '<script>alert("Bạn cần nhập id bệnh!")</script>';
		}
		else
		{
			if($result)
			{
				echo '<script>alert("Xóa Thành Công!")</script>' ;
			}
			else
			{
				echo '<script>alert("Xóa Thất Bại!")</script>';
			}
		}
		// đóng kết nối 
		mysqli_close($conn);
	}
	?>
</body>
</html>