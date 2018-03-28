<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Admin.css">
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
				<a><button id="themthuoc">Thêm Thuốc</button></a>
				<a><button id="xoathuoc">Xóa Thuốc</button></a>
				<a><button id="thembenh">Thêm Bệnh</button></a>
				<a><button id="xoabenh">Xóa Bệnh</button></a>
			</nav>
		</div>
		<!-- Thêm Thuốc-->
		<script> 
			$(document).ready(function(){
    		$("#themthuoc").click(function(){
       	 	$("#them").animate({
            height: 'toggle'
        	});
    			});
				});
		</script> 
		
		<div id="them" >
				<p>Tên Thuốc: <input type="text" value="" size="30" /></p>
				<p>Số Lượng: <input type="text" value="" size="30" /></p>
				<p>Công Dụng: <input type="text" value="" size="10" /></p>
				<p><input type="submit" value="Thêm Thuốc" /></p>
		</div>
		<br><br><br>
		<!-- Xóa Thuốc-->
		<script> 
			$(document).ready(function(){
    		$("#xoathuoc").click(function(){
       	 	$("#xoa").animate({
            height: 'toggle'
        	});
    			});
				});
		</script> 
		
		<div id="xoa" >
				<p>Tên Thuốc: <input type="text" value="" size="30" /></p>
				<p>Số Lượng: <input type="text" value="" size="30" /></p>
				<p><input type="submit" value="Xóa Thuốc" /></p>
		</div>
		<br><br><br>
		<!-- Thêm Bệnh-->
		<script> 
			$(document).ready(function(){
    		$("#thembenh").click(function(){
       	 	$("#thembenh1").animate({
            height: 'toggle'
        	});
    			});
				});
		</script> 
		
		<div id="thembenh1" >
				<p>Tên Bệnh: <input type="text" value="" size="30" /></p>
				<p>Triệu Chứng <input type="text" value="" size="30" /></p>
				<p><input type="submit" value="Thêm Bệnh" /></p>
		</div>
		<br><br><br>
		<!-- Xóa Bệnh-->
		<script> 
			$(document).ready(function(){
    		$("#xoabenh").click(function(){
       	 	$("#xoabenh1").animate({
            height: 'toggle'
        	});
    			});
				});
		</script> 
		
		<div id="xoabenh1" >
				<p>Tên Bệnh: <input type="text" value="" size="30" /></p>
				<p>Triệu Chứng: <input type="text" value="" size="30" /></p>
				<p><input type="submit" value="Xóa Bệnh" /></p>
		</div>
</body>
</html>