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