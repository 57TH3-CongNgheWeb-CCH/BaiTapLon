<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery-3.3.1.min.js"></script>
	<style>
		#Menu ul li{
			list-style: none;
			height: 50px;
			line-height: 50px;
			border-bottom: solid 1px black;
			width: 100px;
		}
		#Menu ul li a{
			padding-left: 20px;
		}
		#Menu{
			border: solid 1px black;
			float: left;
		}
		.content{
			width: 300px;
			color: green;
			float: left;
			border: solid 1px black;
			line-height: 100px;
			margin-left: 20px;
		}
		.limauxanh:hover{
				background: red;
		}
	</style>
</head>
<body>
	<div id="Menu">
		<ul>
			<li value= "abc" class="limauxanh"><a href="#">1</a></li>
			<li class="limauxanh"><a href="#">1</a></li>
			<li class="limauxanh"><a href="#">1</a></li>
			<li class="limauxanh"><a href="#">1</a></li>
			<li class="limauxanh"><a href="#">1</a></li>
		</ul>
	</div>
	<div class="content">
		<p>noi dung xu ly</p>
	</div>
</body>
<script>
	$(function(){
		$('li').hover(function() {
			/* Stuff to do when the mouse enters the element */
			$(this).addClass('limauxanh');
		}, function() {
			/* Stuff to do when the mouse leaves the element */
			$(this).remove('limauxanh');
		});
		$('li').click(function(){
		/* Act on the event */
		$('.content').text($(this).text()+'-'+$(this).attr('value'));
	});
	});
	
</script>
</html>