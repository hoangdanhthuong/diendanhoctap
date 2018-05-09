<?php
if(isset($_GET['ac'])){
	$temp = $_GET['ac'];
}else{
	$temp = '';
}
if($temp == "them"){
	include("modules/content/quan_ly_chu_de/them.php");
}elseif($temp == "sua"){
	include("modules/content/quan_ly_chu_de/sua.php");
	echo "sua";
}else{
include("modules/content/quan_ly_chu_de/danh_sach.php");
}
?>