<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản Lý Dữ Liệu</title>
	<link rel="stylesheet" href="../css/quanly2.css">
	<link rel="icon" href="../cannabis.ico">

</head>
<body>
	
	
	
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
			<h2>Quản Lí Thuốc</h2>
			<input id="place" type="text" name="txttenbang" value="thuoc" readonly="readonly"><br>
			<input id="place" type="text" name="txtidthuoc" placeholder="ID Thuốc"><br>
			<input id="place" type="text" name="txttenthuoc" placeholder="Tên Thuốc"><br>
			<input id="place" type="text" name="txtnoidung" placeholder="Nội Dung"><br>
			<input id="place" type="text" name="txtanh" placeholder="Ảnh"><br>
			<input id="nut" type="submit" name="btnthem" value="Thêm">
			<input id="nut" type="submit" name="btnsua" value="Sửa">
			<input id="nut" type="submit" name="btnxoa" value="Xóa">
		</div>
		
	</form>
	<?php 
	include('../ketnoi.php');
	mysqli_set_charset($conn,'UTF8');
		//thêm thuoc
	if(isset($_POST['btnthem']))
	{
			// Gán tên biến vào giá trị của nút
		$tenbang = mysqli_real_escape_string($conn,$_POST['txttenbang']);
		$idthuoc = mysqli_real_escape_string($conn,$_POST['txtidthuoc']);
		$tenthuoc = mysqli_real_escape_string($conn,$_POST['txttenthuoc']);
		$noidung = mysqli_real_escape_string($conn,$_POST['txtnoidung']);
		$anh = mysqli_real_escape_string($conn,$_POST['txtanh']);
		$sql = "INSERT INTO $tenbang(idthuoc,tenthuoc,noidung,anh) VALUES('$idthuoc','$tenthuoc','$noidung','$anh')";
		$result = mysqli_query($conn,$sql);
		echo("<script>console.log('PHP: ".$sql."');</script>");
		if($idthuoc == null )
		{
			echo '<script>alert("Bạn cần nhập id Thuốc")</script>';
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
		$idthuoc = mysqli_real_escape_string($conn,$_POST['txtidthuoc']);
		$tenthuoc = mysqli_real_escape_string($conn,$_POST['txttenthuoc']);
		$noidung = mysqli_real_escape_string($conn,$_POST['txtnoidung']);
		$anh = mysqli_real_escape_string($conn,$_POST['txtanh']);
		
		$sql = "UPDATE $tenbang SET `tenthuoc`='$tenthuoc',`noidung`='$noidung',`anh`='$anh' WHERE `idthuoc`='$idthuoc'";
		$result = mysqli_query($conn,$sql);
		if($idthuoc == null)
		{
			echo '<script>alert("Bạn cần nhập id bài đăng!")</script>';
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
		//xóa bài đăng
	if(isset($_POST['btnxoa']))
	{
		$tenbang = mysqli_real_escape_string($conn,$_POST['txttenbang']);
		$idthuoc = mysqli_real_escape_string($conn,$_POST['txtidthuoc']);
		$sql = "DELETE FROM $tenbang WHERE idthuoc='$idthuoc'";

		$result = mysqli_query($conn,$sql);
		echo("<script>console.log('PHP: ".$sql."');</script>");
		if($idthuoc == null)
		{
			echo '<script>alert("Bạn cần nhập id bài đăng!")</script>';
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
		mysqli_close($conn);

	}
	?>
</body>
</html>