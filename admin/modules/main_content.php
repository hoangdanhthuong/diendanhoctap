<?php
include("modules/navbar.php");
if(isset($_GET['quanly'])){
	$tam = $_GET['quanly'];	
}else{
	$tam = '';
}
if($tam == 'loaitin'){
include("modules/content/quan_ly_loai_tin/main.php");
}else{
	include("modules/content/dashboard.php");
}
?>