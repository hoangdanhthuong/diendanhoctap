<?php
include("../../config.php");
$ten = $_POST['ten'];
$lien_ket = $_POST['lien_ket'];
$thu_tu = $_POST['thu_tu'];
$tinh_trang = $_POST['tinh_trang'];
if(isset($_POST['them'])){
	if(check_insert($ten)){
		
		$sql = "INSERT INTO loai_tin( ten, lien_ket, thu_tu, tinh_trang) VALUES ('".$ten."','".$lien_ket."', '".$thu_tu."', '".$tinh_trang."')";
		if(!mysqli_query($conn, $sql)){
			header("location:../../../index.php?quanly=loaitin&ac=them&error=1");
		}else{
			header("location:../../../index.php?quanly=loaitin");
		}
	}else{
		header("location:../../../index.php?quanly=loaitin&ac=them&error=1");
	}

}elseif(isset($_POST['sua'])){
	$id = $_GET['id'];
	if(check_insert($ten, $id)){
		$sql ="UPDATE loai_tin SET ten='".$ten."',lien_ket='".$lien_ket."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id='".$id."'";
		if(!mysqli_query($conn, $sql)){
			header("location:../../../index.php?quanly=loaitin&ac=sua&id=$id&error=1");
		}else{
			header("location:../../../index.php?quanly=loaitin");
		}
	}else{
		header("location:../../../index.php?quanly=loaitin&ac=sua&id=$id&error=1");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM loai_tin WHERE id=".$id;
	mysqli_query($conn, $sql);
	header("location:../../../index.php?quanly=loaitin");
}

function check_insert($name, $id=-1){
	include("../../config.php");
	$sql_check = "SELECT * FROM loai_tin WHERE ten ='".$name."'";
	$result_check = mysqli_query($conn, $sql_check);
	if(mysqli_num_rows($result_check)>0){
		if($id >= 0){
			$row = mysqli_fetch_assoc($result_check);
			return $id == $row['id']?true:false;
		} 
	}else{

		return true;
	}
}

?>