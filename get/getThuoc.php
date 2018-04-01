<?php 
	include("../ketnoi.php");// ket noi db
	mysqli_set_charset($conn,"UTF8"); 
	$sql = "SELECT * FROM thuoc";// truy van trong db
	$result = mysqli_query($conn,$sql); 
	if(mysqli_num_rows($result)>0){
		while ($rows=mysqli_fetch_assoc($result)) {
		$a = '<img id="img" src ="'  . $rows["anh"].  '"><div class = "desc"><p class="cc" id = "'.$rows["idthuoc"].'"> '.$rows["tenthuoc"].'</p></div>'; // dat bien $a duoi dang the anh, idthuoc, tenthuoc
		echo "<div class ='tt'>".$a."</div>";
	}
	}else{// neu khong ton tai ban ghi
		echo "Không tồn tại bản ghi nào!";
	}
	
	mysqli_close($conn);
 ?>