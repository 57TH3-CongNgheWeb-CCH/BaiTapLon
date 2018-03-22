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
			<a href="#">
				<img src="images/logo2.png">
			</a>
		</div>
		<div id="menu-bar">
			<nav>
				<a href="web1.php">Trang chủ</a>
				<a href="webbenh.php">Tra cứu bệnh</a>
				<a href="webthuoc.php" style="color: green">Tra cứu thuốc</a>
				<a href="Lienhe.php">Liên hệ</a>
				<a href="login.php">Đăng Nhập</a>
				<a href="signup.php">Đăng Ký</a>
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
			    $nameErr = "Name is required";
			  } else {
			    $name = test_input($_POST["name"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Only letters and white space allowed"; 
			    }
			  }
			  
			  if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			  } else {
			    $email = test_input($_POST["email"]);
			    // check if e-mail address is well-formed
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format"; 
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
				<p><span class="error">* required field.</span></p>
				Name: <input type="text" name="name" value="<?php echo $name;?>">
				<span class="error">* <?php echo $nameErr;?></span>
				<br><br>
				E-mail: <input type="text" name="email" value="<?php echo $email;?>">
				<span class="error">* <?php echo $emailErr;?></span>
				<br><br>
				Comment:<br> <textarea name="comment" class="main_txt_area" rows="10" cols="100" onkeyup="return displayWordCounter();"><?php echo $comment;?></textarea><br>
				<div class="total_count">total remaining Charatctor:
				<input class="show_count" name="totalWordLimit" size="4" readonly="" value="100" type="text">
				</div>
				<br> 
				<input id="nutgui" type="submit" name="submit" value="Gửi"> 
			</form>
			
		</div>
		<div id="right">
			

		</div>
	<div id="footer">		
	</div>
	<script src="D:/Cong nghe web/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow2.js"></script>
	<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

</body>
</html>