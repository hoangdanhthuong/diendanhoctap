<?php
include("modules/content/trang_chu.php");

include('modules/content/search.php');
if(!isset($_SESSION['dang_nhap_dien_dan'])){
	include('modules/content/dang_ky.php');
	include('modules/content/dang_nhap.php');	
}
?>