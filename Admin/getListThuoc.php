<?php
	require('../ketnoi.php');
	$sql="SELECT * FROM thuoc";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$hienthi='<li name="TenThuoc" value="'.$row['idthuoc'].'"><a href="#">&raquo; '.$row['tenthuoc'].'</a></li>';
			echo $hienthi;

		}
	}else{
		echo "Không tồn tại bản ghi";
	}	
	mysqli_close($conn);	
 ?>
 
	
	