<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang benh-PerfectCannabis</title>
	<link rel="stylesheet" type="text/css" href="benh.css">
	<script src="script.js"></script>
	<link rel="icon" href="cannabis.ico">
</head>
<body>
	<div id="menu">
		<div id="logo">
			<a href="#">
				<img src="images/logo2.png">
			</a>
		</div>
		<div id="menu-bar">
			<nav>
				<a href="web1.php" >Trang chủ</a>
				<a href="webbenh.php" style="color: green">Tra cứu bệnh</a>
				<a href="webthuoc.php">Tra cứu thuốc</a>
				<a href="#">Liên hệ</a>
				<a href="#">Đăng nhập</a>
				<a href="#">Đăng ký</a>				
			</nav>
		</div>
		
		
	</div>
	<div id="slides">		
		<img class="myslides" src="slides/atiso.jpg">
		<img class="myslides" src="slides/ThuocDuoc.jpg">
		<img class="myslides" src="images/bacha.jpg">
		<img class="myslides" src="slides/hoaanhtuc.jpg">
		<img class="myslides" src="slides/oaihuong.jpg">
		<button class="btn" id="btn1" onclick="prev(1)">&#10094</button>
		<button class="btn" id="btn2" onclick="next(1)">&#10095</button>
	</div>								
	<div id="content">
		
		<div id="content-column1">
			<a href="" id="a">
				<img src="images/viemganb.jpg" id="img">
				<p id="p">Viêm gan B</p>
			</a>
			<a href="" id="a">
				<img src="images/benhbeophi.jpg" id="img">
				<p id="p">Béo phì</p>
			</a>
			<a href="" id="a">
				<img src="images/benhsoithan.jpg" id="img">
				<p id="p">Sỏi thận</p>
			</a>
		</div>
		<div id="content-column2">
			<a href="" id="a">
				<img src="images/huyetap.jpg" id="img">
				<p id="p">Huyết áp</p>
			</a>
			<a href="" id="a">
				<img src="images/Timmach.jpg" id="img">
				<p id="p">Tim mạch</p>
			</a>
			<a href="" id="a">
				<img src="images/matngu.jpg" id="img">
				<p id="p">Mất ngủ</p>
			</a>
		</div>

		<div id="content-column3">
			<a href="" id="a">
				<img src="images/tieuduong.jpg" id="img">
				<p id="p">Tiểu đường</p>
			</a>
			<a href="" id="a">
				<img src="images/tri.jpg" id="img">
				<p id="p">Bệnh trĩ</p>
			</a>
			<a href="" id="a">
				<img src="images/mat.jpg" id="img">
				<p id="p">Bệnh về mắt</p>
			</a>
		</div>
	</div>
	<div id="footer">footer</div>	
</body>
</html>