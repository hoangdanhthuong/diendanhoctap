<?php
include("modules/navbar.php");
if(isset($_GET['quanly'])){
	$tam = $_GET['quanly'];	
}else{
	$tam = '';
}
if($tam == 'loaitin'){
include("modules/content/quan_ly_loai_tin/main.php");
}elseif($tam == 'chude'){
include("modules/content/quan_ly_chu_de/main.php");
}elseif($tam == 'hoidap'){
include("modules/content/quan_ly_hoi_dap/main.php");
}elseif($tam == 'khoahoc'){
include("modules/content/quan_ly_khoa_hoc/main.php");
}else{
	include("modules/content/dashboard.php");
}
?>