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
		include("ketnoi.php");
		if (isset($_POST["submit"])){
			$email = $_POST['email'];
			$comment = $_POST['comment'];

			$sql = "insert into lienhe(Email, noidung) values('$email','$comment');";
			$result = mysqli_query($conn, $sql);
			if ($email == "" && $comment == ""){
				echo "Không được bỏ trống! Mời bạn điền đẩy đủ thông tin";
			}
			else{		
				if($result){
					echo "Đã gửi";
				}
				else{
					echo "Không thành công";
				}
			}
		}
	mysqli_close($conn);
 	?>
	
			<div id="logo">
				<a href="appliaction/web.php">
					<img src="images/logo2.png">
				</a>
			</div><br><br><br>	
			<form name="frm" method="POST">  
				<p><span class="error">* trường bắt buộc</span></p><br>
				<br>
				E-mail: <input type="text" name="email" required>*
				
				<br><br>
				
							
				Bình luận:<br> <textarea name="comment" class="main_txt_area" rows="10" cols="100" required onkeyup="return displayWordCounter();" ></textarea>*<br>
				<div class="total_count">Số ký tự còn lại:
				<input class="show_count" name="totalWordLimit" size="4" readonly="" value="1000" type="text">
				</div>
				<br> 
				<input id="nutgui" type="submit" name="submit" value="Gửi"> 
			</form>
</body>
</html>
			
			
