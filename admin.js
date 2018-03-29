$(function(){

	$('#ListThuoc').click(function(){
		var objHTTP = new XMLHttpRequest();
		var id = $(this).attr('value');
		objHTTP.readystagechange=function(){
			if(objHTTP.readyState==4)
				if(objHTTP.status==200)
				{
					$('#div1').text(objHTTP.responseText);
				}

		}
		objHTTP.open('GET','getListThuoc.php');
		objHTTP.send();
	})
})