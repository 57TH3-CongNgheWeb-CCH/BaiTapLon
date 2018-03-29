
	<?php
		include("../ketnoi.php");
		if (isset($_POST["submit"])){
			$idthuoc = $_POST['idthuoc'];
			$tenthuoc = $_POST['tenthuoc'];
			$nguongoc = $_POST['nguongoc'];
			$congdung = $_POST['congdung'];
			$sql = "insert into thuoc(idthuoc, tenthuoc, nguongoc, congdung) values('$idthuoc', '$tenthuoc','$nguongoc','$congdung');";
			$result = mysqli_query($conn, $sql);
			echo("<script>console.log('PHP: ".$sql."');</script>");
			
			if ($tenthuoc == "" && $congdung == ""){
				echo "Không được bỏ trống! Mời bạn điền đẩy đủ thông tin";
			}		
			else{
				if($result){
					echo "Đã thêm thành công";
				}
				else{
						echo "Không thành công";
				}
			}
		}
		if (isset($_POST["submit2"])){
			$tenbenh = $_POST['tenbenh'];
			$bieuhien = $_POST['bieuhien'];
			$phuongphap = $_POST['phuongphap'];
			
			$sql = "insert into benh(tenbenh, bieuhien, pp) values('$tenbenh', '$bieuhien','$phuongphap');";
			$result = mysqli_query($conn, $sql);
			echo("<script>console.log('PHP: ".$sql."');</script>");
			
			if ($tenbenh == ""){
				echo "Không được bỏ trống! Phải điền đẩy đủ thông tin";
			}		
			else{
				if($result){
					echo "Đã thêm thành công";
				}
				else{
						echo "Không thành công";
				}
			}
		}
		
	mysqli_close($conn);
 	?>
	
	
	
