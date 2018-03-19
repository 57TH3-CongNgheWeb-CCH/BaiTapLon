<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ-PerfectCannabis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<a href="web1.php" style="color: green">Trang chủ</a>
				<a href="webbenh.php">Tra cứu bệnh</a>
				<a href="webthuoc.php">Tra cứu thuốc</a>
				<a href="#">Liên hệ</a>
				<a href="login.php">Đăng nhập</a>
				<a href="signup.php">Đăng ký</a>
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
	
	<div id="slogan">
		<p><b>Better use medicines at the outset</b></p>
		<p><b>than at the last moment</b></p>
	</div>
	<div id="content1">
		<div id="padding">
			<h2>Giới thiệu</h2><br>
			<p style="line-height: 1.8; font-size: 18px">Trang web sẽ cung cấp, chia sẻ cho bạn đọc những thông tin hữu ích, là nơi để cộng đồng cùng thảo luận về các vấn đề sức khỏe cũng như những cây thuốc bổ ích.</p>
		</div>
	</div>
	<div id="content2">
		<div id="padding">
			<h2>Nhiệm vụ</h2><br>
			<p style="line-height: 1.8; font-size: 18px">Giúp các bạn đọc nâng cao được kiến thức về các loại cây dân gian, có kiến thức trong việc điều trị và chữa các bệnh nguy hiểm. Cải thiện cuộc sống sức khỏe hàng ngày của bản thân và gia đình.</p>
		</div>
	</div>
	<div id="content3">
		<div id="padding">
			<h2>Liên hệ</h2><br>
			<p style="line-height: 1.8; font-size: 18px">Để được giải đáp các thắc mắc liên quan đến sức khỏe, cũng như những cây thuốc, bạn có thể </p>
		</div>
	</div>
	<script src="JqueryBootstrap/bootstrap.min.js"></script>
	<script src="JqueryBootstrap/jquery-3.3.1.js"></script>
	<script src="script.js"></script>
</body>
</html>