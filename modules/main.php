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
}elseif($tam =="chitietkhoahoc"){
	include("modules/content/chu_de/chi_tiet_khoa_hoc.php");
}elseif($tam =="bai_hoc"){
	include("modules/content/bai_hoc/danh_sach.php");
}elseif($tam =="chitietbaihoc"){
	include("modules/content/bai_hoc/chi_tiet_bai_hoc.php");
}elseif($tam =="baiviet"){
	include("modules/content/bai_viet/chi_tiet_bai_viet.php");
}elseif($tam =="gioithieu"){
	include("modules/content/gioi_thieu.php");
}elseif($tam =="thugian"){
	include("modules/content/thu_gian/main.php");
}elseif($tam =="tailieu"){
	include("modules/content/tai_lieu/danh_sach.php");
}elseif($tam =="chitiettailieu"){
	include("modules/content/tai_lieu/chi_tiet.php");
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

function get_Base_URL(){
	return "http://" . $_SERVER['SERVER_NAME'].':8888' . $_SERVER['REQUEST_URI'];
}
?>