<?php
include_once('../../config.php');
$tieu_de = trim($_POST['tieu_de']);
//file image

$target_file = $_FILES['hinh_anh']["name"]; 

if($target_file !=''){
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$file_image = rand(1000000,5000000).'.'.$imageFileType;
	while(file_exists('uploads/'.$file_image)) {
		$file_image = rand(1000000,5000000).'.'.$imageFileType;
	}	
}else{
	$file_image ='';
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

$sql_check = "SELECT * FROM khoa_hoc WHERE ten = '".$tieu_de."'";

if(isset($_POST['them'])){
	if(check_input($conn, $sql_check)){
		$sql = "INSERT INTO khoa_hoc(ten, noi_dung, hinh_anh, thu_tu, thoi_gian_bat_dau, thoi_gian_ket_thuc, tinh_trang, id_chu_de) VALUES ('".$tieu_de."', '".$noi_dung."','".$file_image."','".$thu_tu."','".$start_date."','".$end_date."', '".$tinh_trang."',".$chu_de.")";
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=khoahoc&ac=them&error=2");
		}else{
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/".$file_image );
			header("location: ../../../index.php?quanly=khoahoc");
		}
	}else{
		header("location: ../../../index.php?quanly=khoahoc&ac=them&error=1");
	}

}elseif(isset($_POST['sua'])){
	$id = $_GET['id'];
	if(check_input($conn, $sql_check, $id)){
		if($file_image != ''){
			$sql = "UPDATE khoa_hoc SET id_chu_de='".$chu_de."',ten='".$tieu_de."',noi_dung='".$noi_dung."',hinh_anh='".$file_image."',thoi_gian_ket_thuc='".$start_date."',thoi_gian_bat_dau='".$end_date."',thu_tu='".$thu_tu."',tinh_trang='".$thu_tu."' WHERE id=".$id;
		}else{
			$sql = "UPDATE khoa_hoc SET id_chu_de='".$chu_de."',ten='".$tieu_de."',noi_dung='".$noi_dung."',thoi_gian_ket_thuc='".$end_date."',thoi_gian_bat_dau='".$start_date."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id=".$id;
		}
		
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=khoahoc&ac=sua&error=2");
		}else{
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/".$file_image );
			header("location: ../../../index.php?quanly=khoahoc");
		}
	}else{
		header("location: ../../../index.php?quanly=khoahoc&ac=sua&error=1");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM khuyen_mai WHERE id =".$id;
	if(mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=khoahoc");
	}
}
function check_input($conn, $sql, $id = -1){
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0){
		return true;
	}else{
		if($id>=0){
			$row = mysqli_fetch_assoc($result);
			return $row['id'] == $id;
		}else{
			return false;
		}
	}
}
function check_delete($conn, $id){
	
}
?>
