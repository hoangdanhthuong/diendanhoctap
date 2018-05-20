<?php
include_once('../../config.php');
$id = $_POST['id'];
$sql = "DELETE FROM `cau_hoi` WHERE `id` = ".$id;
if(!mysqli_query($conn, $sql)){
	echo 'Xóa không thành công!';
}
?>
