<?php
	//tao ket noi
	require('../ketnoi.php');
	mysqli_set_charset($conn,'UTF8');//chuyen bang ma ky tu
	$sql="SELECT * FROM lienhe ";//thuc hien truy van toi bang lien he
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){//kiem tra ton tai ban ghi
		while($row=mysqli_fetch_assoc($result)){
			$hienthi='<p>"'.$row['idlienhe'].'-'.$row['noidung'].'"</p>';//lay gia tri tu truong idlienhe va noi tai moi hang
			echo $hienthi;
		}
	}else{
		echo "Không tồn tại bản ghi";
	}	
	mysqli_close($conn);//dong ket noi	
?>