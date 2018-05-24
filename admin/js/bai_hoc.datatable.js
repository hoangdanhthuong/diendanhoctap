$(document).ready(function(){
	$('#table_bai_hoc').DataTable();
});
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#view_hinh_anh').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$("#hinh_anh").change(function() {
	readURL(this);
});
$('#form_sua_bai_hoc').submit(function(e){
	$.ajax({
		url: $(this).attr('action'),
		type: 'POST',
		data: new FormData(this),
		cache: false,
		processData: false,
		contentType: false,
		success: function(data){
			if(data){
				alert(data);	
			}else{
				alert("Sửa thành công!");
				window.location = "index.php?quanly=baihoc";
			}
			
		}
	})
	e.preventDefault();
});
$('[id^="btn_xoa_"]').click(function(e){
	if(confirm("Bạn có chắc chắn xóa!")){
		var id = $(this).attr('id').substring(8);
		$.ajax({
			url: "modules/content/quan_ly_bai_hoc/xu_ly.php",
			type: "POST",
			data: {xoa:id},
			cache:false,
			success: function(data){
				if(data){
					alert(data);	
				}else{
					alert("Xóa thành công!");
					window.location = "index.php?quanly=baihoc";
				}
			}
		})	
	}
	
	e.preventDefault();
})