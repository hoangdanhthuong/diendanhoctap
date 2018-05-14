<?php
include_once('../../config.php');
$tieu_de = trim($_POST['tieu_de']);
$noi_dung = $_POST['noi_dung'];
$link_tai_lieu = $_POST['link_tai_lieu'];
$chu_de = $_POST['chu_de'];
$thu_tu = $_POST['thu_tu'];
$tinh_trang = $_POST['tinh_trang'];


$sql_check = "SELECT * FROM tai_lieu WHERE tieu_de = '".$tieu_de."'";

if(isset($_POST['them'])){
	if(check_input($conn, $sql_check)){
		$sql = "INSERT INTO tai_lieu(id_chu_de, tieu_de, noi_dung, lien_ket, hinh_anh, ngay_tao, thu_tu, tinh_trang) VALUES ('".$chu_de."', '".$tieu_de."', '".$noi_dung."', '".$link_tai_lieu."','".save_files('hinh_anh')."', '".date('Y-m-d')."', '".$thu_tu."','".$tinh_trang."')";
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=tailieu&ac=them&error=2");
		}else{
			header("location: ../../../index.php?quanly=tailieu");
		}
	}else{
		header("location: ../../../index.php?quanly=tailieu&ac=them&error=1");
	}

}elseif(isset($_POST['sua'])){
	$id = $_GET['id'];
	if(check_input($conn, $sql_check, $id)){
		$file_image = save_files('hinh_anh');
		if( $file_image != ''){
			$sql = "UPDATE tai_lieu SET id_chu_de='".$chu_de."',tieu_de='".$tieu_de."',noi_dung='".$noi_dung."',lien_ket='".$link_tai_lieu."',hinh_anh='".$file_image."',ngay_tao='".date('Y-m-d')."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id=".$id;
		}else{
			$sql = "UPDATE tai_lieu SET id_chu_de='".$chu_de."',tieu_de='".$tieu_de."',noi_dung='".$noi_dung."',lien_ket='".$link_tai_lieu."',ngay_tao='".date('Y-m-d')."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id=".$id;
		}
		
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=tailieu&ac=sua&id=".$id."&error=2");
		}else{
			header("location: ../../../index.php?quanly=tailieu");
		}
	}else{
		header("location: ../../../index.php?quanly=tailieu&ac=sua&id=".$id."&error=1");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM tai_lieu WHERE id =".$id;
	if(mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=tailieu");
	}
}
function check_input($conn, $sql, $id = -1){
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0){
		return true;
	}else{
		if($id >= 0){
			$row = mysqli_fetch_assoc($result);
			return $row['id'] == $id;
		}else{
			return false;
		}
	}
}
function save_file($input,$i=-1){
	//file image
	if($i<0){
		if(!empty($_FILES[$input]["name"])){
			$target_file = $_FILES[$input]["name"]; 
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			while(file_exists('uploads/'.$hinh_anh)) {
				$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			}
			move_uploaded_file($_FILES[$input]['tmp_name'], "uploads/".$hinh_anh);
			return $hinh_anh;
		}else{
			return '';
		}
	}else{
		if(!empty($_FILES[$input]["name"][$i])){
			$target_file = $_FILES[$input]["name"][$i]; 
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			while(file_exists('uploads/'.$hinh_anh)) {
				$hinh_anh = date("Y-m-d").rand(1000000,10000000).'.'.$imageFileType;
			}
			move_uploaded_file($_FILES[$input]['tmp_name'][$i], "uploads/".$hinh_anh);
			return $hinh_anh;
		}else{
			return '';
		}
	}
	
//end file
}
function save_files($input){
	if(!empty($input)){
		$countfiles = count($_FILES[$input]['name']);
		for($i = 0; $i < $countfiles; $i++){
			$i==0?  $file_names = save_file($input, $i): $file_names =  $file_names.":".save_file($input, $i);
		}
		return $file_names;
	}else{
		return '';
	}
}
?>
