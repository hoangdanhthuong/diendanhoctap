<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/quan_ly_thanh_vien/them.php");
}elseif($tempac == "sua"){
	include("modules/content/quan_ly_thanh_vien/sua.php");
}else{
	include("modules/content/quan_ly_thanh_vien/danh_sach.php");
}
?>

<script type="text/javascript" src="js/thanh_vien.datatable.js"></script>