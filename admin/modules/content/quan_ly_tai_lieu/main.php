<?php
if(isset($_GET['ac'])){
	$tempac = $_GET['ac'];
}else{
	$tempac = '';
}
if($tempac == "them"){
	include("modules/content/quan_ly_tai_lieu/them.php");
}elseif($tempac == "sua"){
	include("modules/content/quan_ly_tai_lieu/sua.php");
}else{
	include("modules/content/quan_ly_tai_lieu/danh_sach.php");
}
?>

<script type="text/javascript" src="js/tai_lieu.datatable.js"></script>