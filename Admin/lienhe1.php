<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản Lý Dữ Liệu</title>
	<link rel="stylesheet" type="text/css" href="../css/quanly2.css">
	<link rel="stylesheet" type="text/css" href="../JqueryBootstrap/bootstrap.min.css">
	<script type="text/javascript" src="../JqueryBootstrap/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../JqueryBootstrap/bootstrap.min.js"></script>
	
</head>
<body>
	<?php
	include('../ketnoi.php');//tao ket noi
	?>
	<div id="menu">
		<div id="logo">
			<a href="../Webtong/web.php">
				<img src="../images/logo2.png">
			</a>
		</div>
		<div id="menu-bar"><!-- thanh menu -->
			<nav>
				<a href="../Webtong/web.php">Trang chủ</a>
				<a href="quanlythuoc.php">Quản lý thuốc</a>
				<a href="quanlybenh.php">Quản lý bệnh</a>
				<a href="lienhe1.php">Liên hệ</a>
			</nav>
		</div>
	</div>
	<form action="" method="post">
		<div id="dulieu" class="container">
			<h2>Liên hệ</h2>			
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6" id="div1">
							 <?php
								include('getLienhe.php');//lay du lieu tu getLienhe.php
							?>
						</div>
						<div id="div2" class="col-md-6">
							<?php include('getNoidung.php'); ?><!-- lay du lieu tu getNoidung.php -->
						</div>
						
					</div>
				</div>			
		</div>
	</form>
</body> 