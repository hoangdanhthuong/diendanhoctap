<?php
include("../../../admin/modules/config.php");
if(isset($_POST['dang_nhap'])){
	$ten_dang_nhap = $_POST['userName'];
	$mat_khau = $_POST['password'];
$sql = "SELECT * FROM thanh_vien WHERE (ten_dang_nhap= '".$ten_dang_nhap."' or email = '".$ten_dang_nhap."') and mat_khau = '".$mat_khau."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['dang_nhap_dien_dan']=$ten_dang_nhap;
	header('location:../../../index.php');
}else{
	header('location:../../../index.php?xem=login&error=1');
}	
}

?>