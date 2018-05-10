<?php
include("../../config.php");
$ten = $_POST['ten'];
$loai_tin = $_POST['loai_tin'];
$thu_tu = $_POST['thu_tu'];
$tinh_trang = $_POST['tinh_trang'];
if(isset($_POST['them'])){
	if(check_insert($ten,$loai_tin)){
		$sql = "INSERT INTO chu_de( ten, id_loai_tin, thu_tu, tinh_trang) VALUES ('".$ten."','".$loai_tin."', '".$thu_tu."', '".$tinh_trang."')";
		if(!mysqli_query($conn, $sql)){
			header("location:../../../index.php?quanly=chude&ac=them&error=1");
		}else{
			header("location:../../../index.php?quanly=chude");
		}
	}else{
		header("location:../../../index.php?quanly=chude&ac=them&error=1");
	}

}elseif(isset($_POST['sua'])){
	$id = $_GET['id'];
	if(check_insert($ten, $loai_tin, $id)){
		$sql ="UPDATE chu_de SET ten='".$ten."',thu_tu='".$thu_tu."',tinh_trang='".$tinh_trang."' WHERE id='".$id."'";
		if(!mysqli_query($conn, $sql)){
			header("location:../../../index.php?quanly=chude&ac=sua&id=".$id."&error=1");
		}else{
			header("location:../../../index.php?quanly=chude");
		}
	}else{
		header("location:../../../index.php?quanly=chude&ac=sua&id=$id&error=2");
	}
}else{
	$id = $_GET['id'];
	$sql = "DELETE FROM chu_de WHERE id=".$id;
	mysqli_query($conn, $sql);
	header("location:../../../index.php?quanly=chude");
}

function check_insert($name,  $loai_tin, $id=-1){
	include("../../config.php");
	$sql_check = "SELECT * FROM chu_de WHERE ten ='".$name."' and id_loai_tin=".$loai_tin;
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