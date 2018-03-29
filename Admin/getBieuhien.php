
<?php
	
	$tenbenh=$_GET['tenbenh'];
	require('../ketnoi.php');
	mysqli_set_charset($conn,'UTF8');

	$sql="SELECT bieuhien FROM benh where tenbenh='$tenbenh'";
	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		$hienthi='<p>"'.$row['bieuhien'].'"</p>';
		echo $hienthi;
	}

	mysqli_close($conn);
	
	
?>
