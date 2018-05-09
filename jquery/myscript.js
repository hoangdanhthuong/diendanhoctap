 $(document).ready(function () {
 	var url = window.location;
 	$('ul.nav a[href="'+ url +'"]').parent().addClass('active');
 	$('ul.nav a').filter(function() {
 		return this.href == url;
 	}).parent().addClass('active');
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
