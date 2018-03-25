<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liên hệ</title>	
	<link rel="icon" href="cannabis.ico">
	<link rel="stylesheet" type="text/css" href="askForm.css">
	<script type="text/javascript" src="lienhescript.js"></script>
</head>
<body>
	
	<div id="menu">
		<div id="logo">
			<a href="index.php">
				<img src="images/logo2.png">
			</a>
		</div>
		<div id="menu-bar">
			<nav style="display:inline-block;">
				<a href="web1.php">Trang chủ</a>
				<a href="webbenh.php">Tra cứu bệnh</a>
				<a href="webthuoc.php" >Tra cứu thuốc</a>
				<a href="Lienhe.php" style="color: green">Liên hệ</a>
				<div id="dndk" style="display: inline-block;">
					<a href="login.php">Đăng nhập</a>
					<a href="signup.php">Đăng ký</a>
				</div>		
			</nav>
		</div>
	</div>	
	<div id="content">
		<div id="left">
			<?php
				// define variables and set to empty values
				$nameErr = $emailErr = $genderErr = $websiteErr = "";
				$name = $email = $gender = $comment = $website = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  if (empty($_POST["name"])) {
				    $nameErr = "Bắt buộc điền tên";
				  } else {
				    $name = test_input($_POST["name"]);
				    // check if name only contains letters and whitespace
				    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				      $nameErr = "Chỉ cho phép chữ cái và khoảng trắng"; 
				    }
				  }
				  
				  if (empty($_POST["email"])) {
				    $emailErr = "Bắt buộc điền email";
				  } else {
				    $email = test_input($_POST["email"]);
				    // check if e-mail address is well-formed
				    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				      $emailErr = "Sai định dạng email"; 
				    }
				  }			    
				  
				  if (empty($_POST["comment"])) {
				    $comment = "";
				  } else {
				    $comment = test_input($_POST["comment"]);
				  }			  
				}

				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
			?>
			
			<form name="frm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				<p><span class="error">* trường bắt buộc</span></p><br>
				Tên của bạn: <input type="text" name="name" value="<?php echo $name;?>">
				<span class="error">* <?php echo $nameErr;?></span>
				<br><br>
				E-mail: <input type="text" name="email" value="<?php echo $email;?>">
				<span class="error">* <?php echo $emailErr;?></span>
				<br><br>
				Chủ đề: Thuốc <input type="radio" name="radiobtn" >
				Bệnh <input type="radio" name="radiobtn">
				Khác <input type="radio" name="radiobtn"><br>
				Bình luận:<br> <textarea name="comment" class="main_txt_area" rows="10" cols="100" onkeyup="return displayWordCounter();"><?php echo $comment;?></textarea><br>
				<div class="total_count">Số ký tự còn lại:
				<input class="show_count" name="totalWordLimit" size="4" readonly="" value="1000" type="text">
				</div>
				<br> 
				<input id="nutgui" type="submit" name="submit" value="Gửi"> 
			</form>
			<?
				$link=mysql_connect("localhost","root","","thuoc");
				if(!$link){
					echo 'Ket noi khong thanh cong'.'-'.mysql_connect_error();
				}else{
					mysql_set_charset($link,'UTF-8');
					alert('thanh cong');
				}
			?>
		</div>
		<div id="right">
			

		</div>
	<div id="footer">		
	</div>
	<script src="JqueryBootstrap/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow2.js"></script>
	<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

</body>
</html>