<?php
include_once('../../config.php');
$tieu_de = trim($_POST['tieu_de']);
$noi_dung = $_POST['noi_dung'];
$link_video = $_POST['link_video'];
$khoa_hoc = $_POST['khoa_hoc'];
$thu_tu = $_POST['thu_tu'];
$tinh_trang = $_POST['tinh_trang'];


$sql_check = "SELECT * FROM bai_hoc WHERE ten = '".$tieu_de."' and id_khoa_hoc =".$khoa_hoc;
if(isset($_POST['them'])){
	if(check_input($conn, $sql_check)){
		$sql = "INSERT INTO bai_hoc( ten, noi_dung, hinh_anh, link_video,  thu_tu, tinh_trang, id_khoa_hoc) VALUES ('".$tieu_de."','".$noi_dung."','".save_files('hinh_anh')."','".$link_video."','".$thu_tu."','".$tinh_trang."','".$khoa_hoc."')";
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=baihoc&ac=them&error=2");
		}else{
			header("location: ../../../index.php?quanly=baihoc");
		}
	}else{
		header("location: ../../../index.php?quanly=baihoc&ac=them&error=1");
	}

}elseif(isset($_POST['sua'])){
	$id = $_GET['id'];

	if(check_input($conn, $sql_check, $id)){
		$file_image = save_files('hinh_anh');
		if( != ''){
			$sql = "UPDATE bai_hoc SET ten='".$tieu_de."',noi_dung='".$noi_dung."',hinh_anh='".$file_image."',link_video='".$link_video."',ngay_tao='".date('Y-m-d')."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."',id_khoa_hoc='".$id_khoa_hoc."' WHERE id=".$id;
		}else{
			$sql = "UPDATE bai_hoc SET ten='".$tieu_de."',noi_dung='".$noi_dung."', link_video='".$link_video."',ngay_tao='".date('Y-m-d')."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."',id_khoa_hoc='".$id_khoa_hoc."' WHERE id=".$id;
		}
		
		if(!mysqli_query($conn, $sql)){
			header("location: ../../../index.php?quanly=baihoc&ac=sua&error=2");
		}else{
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "uploads/".$file_image );
			header("location: ../../../index.php?quanly=baihoc");
		}
	}else{
		header("location: ../../../index.php?quanly=baihoc&ac=sua&error=1");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM bai_hoc WHERE id =".$id;
	if(mysqli_query($conn, $sql)){
		header("location: ../../../index.php?quanly=baihoc");
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
function check_delete($conn, $id){
	
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
