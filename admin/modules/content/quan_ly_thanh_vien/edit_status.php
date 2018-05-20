<?php
include_once('../../config.php');
$id = $_POST['id'];
$tinh_trang = $_POST['tinh_trang'];
$tinh_trang==1? $tinh_trang=0:$tinh_trang=1;
$sql = "UPDATE `thanh_vien` SET `tinh_trang`=$tinh_trang WHERE `id` = ".$id;
if(!mysqli_query($conn,$sql)){
	echo "Thay đổi thất bại!";
}
?>