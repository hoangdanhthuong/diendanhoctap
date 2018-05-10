<?php
if(isset($_GET['xem'])){
	$tam = $_GET['xem'];
}else{
	$tam = "";
}
if($tam == "dangky"){
	include("modules/content/nguoi_dung/dang_ky.php");
}elseif($tam =="dangnhap"){
	include("modules/content/nguoi_dung/dang_nhap.php");
}elseif($tam =="chude"){
	include("modules/content/chu_de/danh_sach.php");
}elseif($tam =="gioithieu"){
	include("modules/content/gioi_thieu.php");
}else{
	include("modules/content/trang_chu.php");	
}



if(!isset($_SESSION['dang_nhap_dien_dan'])){
	if(isset($_GET['xem'])){
		if($_GET['xem']!="dangnhap"){
			include('modules/content/dang_nhap.php');			
		}
		if($_GET['xem']!="dangky"){
			include('modules/content/dang_ky.php');		
		}
	}else{

		include('modules/content/dang_ky.php');		

		include('modules/content/dang_nhap.php');	
	}
	
}
include('modules/content/search.php');
?>