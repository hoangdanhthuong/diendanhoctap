$(document).ready(function(){
	$('#table_bai_dang').DataTable({
		'columnDefs':[
		{'searchable' : false , 'orderable' : false, 'targets':5},
		{'searchable' : false , 'orderable' : false, 'targets':6},
		]
	});
})
$(".btn_xoa").click(function(e){
	var id = $(this).closest('tr').find('td:eq(0)').text();
	$.ajax({
		url: 'modules/content/quan_ly_bai_dang/xu_ly.php',
		type: "POST",
		data: {id:id},
		success: function(data){
			if(data){
				alert(data);
			}else{
				window.location = window.location.href;
			}
		}
	});
	e.preventDefault();
});
$('.tinh_trang').click(function(e){
	var row = $(this).closest('tr');
	var id  = row.find("td:eq(0)").text();
	var tinh_trang  = row.find("td:eq(4)").attr('id');
	$.ajax({
		url:"modules/content/quan_ly_bai_dang/edit_status.php",
		type: "POST",
		data:{id:id, tinh_trang: tinh_trang},
		success: function(data){
			if(data){
				alert(data);
			}else{
				window.location = window.location.href;
			}
		}
	})
	e.preventDefault();
})