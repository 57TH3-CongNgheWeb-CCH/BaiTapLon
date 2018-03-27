<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liên hệ</title>
	<link rel="stylesheet" type="text/css" href="askForm.css">
	<script type="text/javascript" src="lienhescript.js"></script>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<body>
	
	<?php
		// define variables and set to empty values
		$nameErr = $emailErr = $genderErr = $websiteErr = "";
		$name = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  
				  
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
			<div id="logo">
				<a href="appliaction/web.php">
					<img src="images/logo2.png">
				</a>
			</div><br><br><br>	
			<form name="frm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				<p><span class="error">* trường bắt buộc</span></p><br>
				<br>
				E-mail: <input type="text" name="email" value="<?php echo $email;?>">
				<span class="error">* <?php echo $emailErr;?></span>
				<br><br>
				
							
				Bình luận:<br> <textarea name="comment" class="main_txt_area" rows="10" cols="100" onkeyup="return displayWordCounter();"><?php echo $comment;?></textarea><br>
				<div class="total_count">Số ký tự còn lại:
				<input class="show_count" name="totalWordLimit" size="4" readonly="" value="1000" type="text">
				</div>
				<br> 
				<input id="nutgui" type="submit" name="submit" value="Gửi"> 
			</form>
</body>
</html>
			
			
