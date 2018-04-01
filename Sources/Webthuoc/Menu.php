<?php if(isset($_POST["btn_logout"]))  
{  
	unset($_SESSION["email"]); 
	unset($_SESSION['admin']);
	header('Location: web.php') ;
} 
 ?>


<div id="menu">
	<div id="logo">
		<a href="web.php">
			<img src="../images/logo2.png">
		</a>
	</div>
	<div id="menu-bar">
		<nav>
			<a href="web.php">Trang chủ</a>
			<a href="webbenh.php">Tra cứu bệnh</a>
			<a href="webthuoc.php" onclick="getThuoc()">Tra cứu thuốc</a>
			
			<div id="menu2" style="display: inline-block;">
				<?php if(isset($_SESSION['email'])){ ?>
				
				<p>Xin chào - <?php echo $_SESSION['email']; ?></p>
				<form method="POST"><a href="Lienhe.php" >Liên hệ</a><button id="btnlogout" name="btn_logout">Đăng xuất</button></form>

				<?php }elseif(isset($_SESSION['admin'])){ ?>
				
				<p>Xin chào - <?php echo $_SESSION['admin']; ?></p>
				<form method="POST"><a href="../Admin/lienhe1.php" >Quản lý</a><button id="btnlogout" name="btn_logout">Đăng xuất</button></form>

				<?php } else { ?>
				<a href="../dangkydangnhap/login.php">Đăng nhập</a>
				<a href="../dangkydangnhap/signup.php">Đăng ký</a>
				<?php } ?>
			</div>
		</nav>
	</div>
</div>
<style type="text/css">
	#btnlogout{
		position: relative;
		left: 5%;
		width: 80px;
		height: 40px;
		text-align: center;

	}
	#btnlogout:hover{background-color: green;}
</style>