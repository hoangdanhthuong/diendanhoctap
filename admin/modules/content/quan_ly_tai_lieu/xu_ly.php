<?php
include_once('../../config.php');
$tieu_de = $_POST['tieu_de'];
//file image
$target_file = $_FILES['hinh_anh']["name"]; 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_image = rand(1000000,5000000).'.'.$imageFileType;
while(file_exists('uploads/'.$file_image)) {
	$file_image = rand(1000000,5000000).'.'.$imageFileType;
}

//end file
$noi_dung = $_POST['noi_dung'];
$thu_tu = $_POST['thu_tu'];
$tinh_trang = $_POST['tinh_trang'];
$start_date = date_create( $_POST['start_date']);
$start_date = date_format($start_date, 'Y-m-d');
$end_date = date_create( $_POST['end_date']);
$end_date = date_format($end_date, 'Y-m-d');
$chu_de = $_POST['chu_de'];
if(isset($_POST['them'])){
	$sql = "INSERT INTO khoa_hoc(ten, noi_dung, hinh_anh, thu_tu, thoi_gian_bat_dau, thoi_gian_ket_thuc, tinh_trang, id_chu_de) VALUES ('".$tieu_de."', '".$noi_dung."','".$file_image."','".$thu_tu."','".$start_date."','".$end_date."', '".$tinh_trang."',".$chu_de.")";
	if(!mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=khoahoc&ac=them&error=2");
	}else{
		move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/".$file_image );
		header("location: ../../../index.php?quanly=khoahoc");
	}
}elseif(isset($_POST['sua'])){
	$id = $_POST['id'];
	$sql = "UPDATE khuyen_mai SET tieu_de='".$tieu_de."',noi_dung='".$noi_dung."',hinh_anh='".$file_image."', thu_tu ='".$thu_tu."',thoi_gian_bat_dau='".$start_date."',thoi_gian_ket_thuc='".$end_date."',tinh_trang='".$tinh_trang."' WHERE id=".$id;
	if(!mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=quan_ly_khoa_hoc&ac=sua&error=2");
	}else{
		header("location: ../../../index.php?quanly=quan_ly_khoa_hoc");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM khuyen_mai WHERE id =".$id;
	if(mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=quan_ly_khoa_hoc");
	}
}
?>
