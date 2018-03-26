<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liên hệ và góp ý </title>
	<link rel="stylesheet" type="text/css" href="askForm.css">
	<link rel="icon" href="cannabis.ico">
</head>
<body>
	<div id="logo"><a href="web1.php" ><img src="images/logo2.png"></a></div>
	<form method="post" action="#">
		Chủ đề:   
		<input type="radio" name="chude" value="suckhoe" required="">Sức khỏe
		<input type="radio" name="chude" value="caythuoc" required="">Cây thuốc
		<input type="radio" name="chude" value="gopy" required="">Góp ý cho Website
		<br><br>
		Nội dung:	
		<textarea name="noidung" rows="5" cols="50" required=""></textarea>
		<br>
		<button type="submit" name="sendAsk">Gửi</button>
	</form>
</body>
</html>