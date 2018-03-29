<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="../JqueryBootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Admin.css">
	<script type="text/javascript" src="../jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/admin1.js"></script>
	<script type="text/javascript" src="../JqueryBootstrap/bootstrap.min.js"></script>
</head>
<body>

	<div id="menu">		
		<div id="menu-bar">	
			<?php echo "ADMIN" ?>	
			<button id="ListThuoc">Quản lý thuốc</button>
			<button id="ListBenh">Quản lý bệnh</button>
			<button id="ListTaiKhoan">Tài khoản</button>			
			<button id="LienHe">Liên hệ</button>
		</div>
		<div id="luachon">
			<ul>
				<li id="Them"><a href="Themthuocbenh.php">Thêm</a></li>
				<li id="Sua"><a href="Suathuocbenh.php">Sửa</a></li>
				<li id="Xoa"><a href="Xoa.php">Xoá</a></li>
			</ul>
			
		</div>	
	</div>	
	<div id="content" class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4" id="div1">			
				</div>
				<div id="div2" class="col-md-4"></div>
				<div id="div3" class="col-md-4"></div>	
			</div>
		</div>

	</div>	
</body>
</html>