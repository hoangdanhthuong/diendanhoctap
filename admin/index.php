<!DOCTYPE html>
<html>
<head>
	<title>Quản trị diễn đàn</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="../style/login.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="../jquery/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
	<?php
	include('modules/config.php');
	include("modules/xu_ly_dang_nhap.php");
	?>
</body>
<script src="../jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
	tinymce.init({
		selector: "textarea",
		setup: function (editor) {
			editor.on('change', function () {
				editor.save();
			});
		}
	});
</script>
</html>