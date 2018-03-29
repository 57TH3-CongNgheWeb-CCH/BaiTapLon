$(function(){

    $('button').click(function(){
        var id = $(this).attr('id');

        if(id == "ListThuoc"){
            $('#div1').load("../Admin/getListThuoc.php");
        }
        else if(id=="ListBenh"){
            $('#div1').load("../Admin/getListBenh.php");
        }      
    });

    $("#div1").on("click", "li",function(){

        var value = $(this).attr('value');
        var name = $(this).attr('name');

        if(name == "TenThuoc" )
        {
            //value chua idthuoc
            $.get("../Admin/getCongdung.php", {idthuoc:value}, function(data){$('#div2').html(data);});
            $.get("../Admin/getNguongoc.php", {idthuoc:value}, function(data){$('#div3').html(data);});
        }
        if(name == "TenBenh")
        {
            alert(value);
            $.get("../Admin/getBieuhien.php", {tenbenh:value}, function(data){$('#div2').html(data);});
        }
    });

})