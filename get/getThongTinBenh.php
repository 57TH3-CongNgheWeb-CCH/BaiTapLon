<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin chi tiết bệnh</title>
	<link rel="stylesheet" type="text/css" href="../css/benh.css">
</head>
<body>
	<div id="bg">
	<?php 
	$id = $_GET['idbenh']; //lay id thuoc
	include("../ketnoi.php");
	mysqli_set_charset($conn,"UTF8");
	$sql = "SELECT * FROM benh WHERE idbenh = '$id'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){ // neu ton tai idthuoc = '$id'
		while($rows = mysqli_fetch_assoc($result)){
			$hienthi = '<div class="img1"><img src ="../images/'. $rows["anh"].'"></div><div class = "tenthuoc">'.$rows["tenbenh"].'</div><div class="noidung">'.$rows["noidung"].'</div>';
			echo $hienthi; // hien thi chi tiet thong tin thuoc
		}
	}
	else{
		echo "Không có bản ghi nào!";
	}

	mysqli_close($conn);
	?>
	<div class="quaylai">
		<a href="webbenh.php" id="quaylai">Quay lại</a>
	</div>
</body>
</html>