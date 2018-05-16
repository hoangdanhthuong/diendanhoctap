<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/quan_ly_binh_luan/them.php");
}elseif($tempac == "sua"){
	include("modules/content/quan_ly_binh_luan/sua.php");
}else{
	include("modules/content/quan_ly_binh_luan/danh_sach.php");
}
?>

<script type="text/javascript" src="js/binh_luan.datatable.js"></script>