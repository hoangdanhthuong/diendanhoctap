<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/quan_ly_bai_dang/them.php");
}elseif($tempac == "sua"){
	include("modules/content/quan_ly_bai_dang/sua.php");
}else{
	include("modules/content/quan_ly_bai_dang/danh_sach.php");
}
?>

<script type="text/javascript" src="js/bai_dang.datatable.js"></script>