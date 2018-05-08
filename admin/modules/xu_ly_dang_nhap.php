<?php
session_start();
if(isset($_SESSION['admin_dang_nhap_dien_dan'])){
	include('modules/main_content.php');
}else{
	include("modules/content/dang_nhap.php");
}
?>