<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liên hệ</title>
	<link rel="stylesheet" type="text/css" href="../css/benh.css">
	<link rel="stylesheet" type="text/css" href="../css/askForm.css">
	<script type="text/javascript" src="../js/lienhescript.js"></script>
	<script type="text/javascript" src="../jquery-3.3.1.min.js"></script>
</head>
<body>

	<?php 
	include("../dangnhap.php");
	include("../Webthuoc/Menu.php");
	include("../Webthuoc/header.php");
	?>	
	<?php
		require("../ketnoi.php");//tao ket noi
		mysqli_set_charset($conn,'UTF8');//chuyen bang ma ky tu
		//lay du lieu tu form
		if (isset($_POST["submit"])){
			$email = $_POST['email'];
			$comment = $_POST['comment'];
			$sql = "insert into lienhe(Email, noidung) values('$email','$comment');";
			$result = mysqli_query($conn, $sql);
			if ($email == "" && $comment == ""){//kiem tra nguoi dung nhap thong tin
				echo "Không được bỏ trống! Mời bạn điền đẩy đủ thông tin";
			}
			else{		
				if($result){//thong bao ket qua
					echo "Đã gửi";
				}
				else{
					echo "Không thành công";
				}
			}
		}
		//dong ket noi
		mysqli_close($conn);
		?>

		
		<!-- form nhap thong tin	 -->
		<form id="form" name="frm" method="POST">  

			<br>
			<?php if(isset($_SESSION['email'])){ ?><!-- lay emai cua nguoi dung -->
			E-mail: <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" readonly="readonly"><!-- hien thi email nguoi dung -->

			<br><br>
			<?php }?>

			Bình luận:<br> <textarea name="comment" class="main_txt_area" rows="10" cols="100" required onkeyup="return displayWordCounter();" ></textarea><br>
			<!-- gioi han so ky tu nhap vao
				moi ky tu nhap vao lam cho so ky tu con lai giam di 1
			 -->
			<div class="total_count">Số ký tự còn lại:
				<input class="show_count" name="totalWordLimit" size="4" readonly="" value="1000" type="text">
			</div>
			<br> 
			<input id="nutgui" type="submit" name="submit" value="Gửi"> 
		</form>
	</body>
	</html>


