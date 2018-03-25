<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tra cứu thuốc</title>

	<link rel="stylesheet" type="text/css" href="tracuuthuoc.css">
	<link rel="icon" href="cannabis.ico">
	<link rel="stylesheet" type="text/css" href="askForm.css">
</head>
<body>

	<div id="menu">
		<div id="logo">
			<a href="#">
				<img src="images/logo2.png">
			</a>
		</div>
		<div id="menu-bar">
			<nav>
				<a href="web1.php">Trang chủ</a>
				<a href="webbenh.php">Tra cứu bệnh</a>
				<a href="webthuoc.php" style="color: green">Tra cứu thuốc</a>
				<a href="#">Liên hệ</a>
				<a href="#">Đăng Nhập</a>
				<a href="#">Đăng Ký</a>
			</nav>
		</div>
	</div>
	<div id="slides">
		<img class="myslides" src="slides/atiso.jpg">
		<img class="myslides" src="slides/ThuocDuoc.jpg">
		<img class="myslides" src="images/bacha.jpg">
		<img class="myslides" src="slides/hoaanhtuc.jpg">
		<img class="myslides" src="slides/oaihuong.jpg">
		<button class="btn" id="btn1" onclick="prev(1)">&#10094</button>
		<button class="btn" id="btn2" onclick="next(1)">&#10095</button>
	</div>
	<div id="content">
		<div id="left">
			<form name="lienhe" method="post" action="#">
			<p>Liên hệ</p><br>
			<p>Chủ đề</p>  
			<input type="text" name="txtInput1"><br>		
			Nội dung:<br>	
			<textarea name="noidung" rows="5" cols="50" required=""></textarea><br>		
			<button type="submit" name="sendAsk">Gửi</button>
		</form><br>
		<form name="phanhoi" method="post" action="#">
			<p>Phản hồi cho trang web</p>
			<p>Chủ đề</p><br>
			<input type="text" name="txtInput1"><br>
			<p>Phản hồi của bạn</p>
			<textarea name="noidungphanhoi" rows="5" cols="50" required=""></textarea><br>		
			<button type="submit" name="sendReply"><p text-align="center">Gửi</p></button>
		</form>
		</div>
		<div id="right">
			<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-page" data-href="https://www.facebook.com/caythuoc.org/" data-tabs="timeline" data-width="270" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<blockquote cite="https://www.facebook.com/caythuoc.org/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/caythuoc.org/">Cây thuốc nam</a></blockquote>
			</div>
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcaythuoc.org%2F&tabs=timeline&width=270&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>

	<div id="footer">
		
	</div>
	<script src="E:/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow2.js"></script>
	<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

</body>
</html>