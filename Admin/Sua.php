
	<?php
		include("../ketnoi.php");
		if (isset($_POST["submit2"])){
			
			$tenbenh = $_POST['tenbenh'];
			$bieuhien = $_POST['bieuhien'];
			$phuongphap = $_POST['phuongphap'];
			$sql = "UPDATE benh SET bieuhien='$bieuhien', pp='$phuongphap' where tenbenh='$tenbenh';";
			$result = mysqli_query($conn, $sql);
			echo("<script>console.log('PHP: ".$sql."');</script>");
			
			if ($tenbenh == ""){
				echo "Không được bỏ trống! Mời bạn điền đẩy đủ thông tin";
			}		
			else{
				if($result){
					echo "Đã sửa thành công";
				}
				else{
						echo "Không thành công";
				}
			}
		}
		if (isset($_POST["submit"])){
			
			$tenthuoc = $_POST['tenthuoc'];
			$nguongoc = $_POST['nguongoc'];
			$congdung = $_POST['congdung'];
			$sql = "UPDATE thuoc SET nguongoc='$nguongoc', congdung='$congdung' where tenthuoc='$tenthuoc';";
			$result = mysqli_query($conn, $sql);
			echo("<script>console.log('PHP: ".$sql."');</script>");
			
			if ($tenthuoc == ""){
				echo "Không được bỏ trống! Mời bạn điền đẩy đủ thông tin";
			}		
			else{
				if($result){
					echo "Đã sửa thành công";
				}
				else{
						echo "Không thành công";
				}
			}
		}
	
		mysqli_close($conn);
 	?>
	
