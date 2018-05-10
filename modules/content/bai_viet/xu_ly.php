<?php
session_start();
include("../../../admin/modules/config.php");
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$chu_de = $_POST['chu_de'];

//file 
$name_file = $_FILES['hinh_anh']['name'];
if($name_file!=''){

	$image_file_type = strtolower(pathinfo($name_file, PATHINFO_EXTENSION));
	$hinh_anh = rand(1000000,9999999).'.'.$image_file_type;
	while (file_exists($hinh_anh)) {
		$hinh_anh = rand(1000000,9999999).'.'.$image_file_type;
	}
	$hinh_anh = "uploads/".$hinh_anh;
	move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh);	
}else{
	$hinh_anh = '';
}

if($hinh_anh != ''){
	$sql = "INSERT INTO cau_hoi(tieu_de, noi_dung, hinh_anh, ten_dang_nhap, ngay_tao, tinh_trang) VALUES ('".$tieu_de."','".$noi_dung."','".$hinh_anh."','".$_SESSION['dang_nhap_dien_dan']."','".date('Y-m-d')."',1)";
}else{
	$sql = "INSERT INTO cau_hoi(tieu_de, noi_dung, ten_dang_nhap, ngay_tao, tinh_trang) VALUES ('".$tieu_de."','".$noi_dung."','".$_SESSION['dang_nhap_dien_dan']."','".date('Y-m-d')."',1)";
}
if(mysqli_query($conn,$sql)){
	header("location: ../../../index.php?xem=chude&id_chu_de=".$chu_de);
}else{
	echo '<script type="text/javascript">
	alert("Thêm bài viết không thành công!");
	window.location = "../.././index.php?xem=baiviet&error=1";
	</script>';
}

?>
