<?
	$host='localhost';
	$root='root';
	$pass='';
	$db='caythuoc';
	$link=mysqli_connect($host,$root,$pass,$db);
	if(!$link){
		echo 'Ket noi khong thanh cong'.'-'.mysqli_connect_error();
	}else{
			
			echo 'Ket noi thanh cong';
		}
	}
?>