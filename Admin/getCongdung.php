<?php

	$idthuoc=$_GET['idthuoc'];
	require('../ketnoi.php');
	mysqli_set_charset($conn,'UTF8');
	$sql="SELECT * FROM thuoc where idthuoc='$idthuoc'";
	$result=mysqli_query($conn,$sql);
	
	while($row=mysqli_fetch_assoc($result)){
			$hienthi='<p>"'.$row['congdung'].'"</p>';
			echo $hienthi;
	}
	
	mysqli_close($conn);	
 ?>