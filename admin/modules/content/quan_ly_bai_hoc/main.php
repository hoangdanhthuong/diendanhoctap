<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/quan_ly_bai_hoc/them.php");
}elseif($tempac == "sua"){
	include("modules/content/quan_ly_bai_hoc/sua.php");
}else{
	include("modules/content/quan_ly_bai_hoc/danh_sach.php");
}
?>

<script type="text/javascript" src="js/bai_hoc.datatable.js"></script>