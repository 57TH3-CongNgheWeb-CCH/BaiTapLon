<?php
	require('../ketnoi.php');
	mysqli_set_charset($conn,'UTF8');
	$sql="SELECT * FROM lienhe";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$hienthi='<p>"'.$row['noidung'].'"</p>';
			echo $hienthi;

		}
	}else{
		echo "Không tồn tại bản ghi";
	}	
	mysqli_close($conn);	
 ?>