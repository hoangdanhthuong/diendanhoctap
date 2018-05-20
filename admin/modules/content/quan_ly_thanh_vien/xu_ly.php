<?php
include_once('../../config.php');
$id = $_POST['id'];
$sql = "DELETE FROM `thanh_vien` WHERE `id` = ".$id;
if(1 == 0){
	if(!mysqli_query($conn, $sql)){
		echo 'Xóa không thành công!';
	}	
}

?>
