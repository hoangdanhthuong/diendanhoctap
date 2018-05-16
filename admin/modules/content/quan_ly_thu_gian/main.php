<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/quan_ly_khoa_hoc/them.php");
}elseif($tempac == "sua"){
	include("modules/content/quan_ly_khoa_hoc/sua.php");
}else{
	include("modules/content/quan_ly_khoa_hoc/danh_sach.php");
}
?>

<script type="text/javascript" src="js/khoa_hoc.datatable.js"></script>