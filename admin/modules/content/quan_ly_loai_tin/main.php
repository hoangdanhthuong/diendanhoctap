<?php
if(isset($_GET['ac'])){
	$temp = $_GET['ac'];
}else{
	$temp = '';
}
if($temp == "them"){
	include("modules/content/quan_ly_loai_tin/them.php");
}elseif($temp == "sua"){
	include("modules/content/quan_ly_loai_tin/sua.php");
}else{
include("modules/content/quan_ly_loai_tin/danh_sach.php");
}
?>