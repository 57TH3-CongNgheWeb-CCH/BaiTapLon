//su dung ajax load
$(function(){
	$('.cc').click(function(){ // bat su kien click vao class cc
		var id = $(this).attr('id');  // lay gia tri id 
		$('#content').load('../getThongTinBenh.php?idbenh='+id);//load sang trang getThongTinThuoc
	})
})