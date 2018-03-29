<?php
	require('../ketnoi.php');
	mysqli_set_charset($conn,'UTF8');
	$sql="SELECT * FROM benh";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$hienthi='<li name="TenBenh" value="'.$row['tenbenh'].'"><a href="#">&raquo; '.$row['tenbenh'].'</a></li>';
			echo $hienthi;

		}
	}else{
		echo "Không tồn tại bản ghi";
	}	
	mysqli_close($conn);	
 ?>