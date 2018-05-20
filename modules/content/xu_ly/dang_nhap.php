<?php
include("../../../admin/modules/config.php");
if(isset($_POST['dang_nhap'])){
	$ten_dang_nhap = $_POST['userName'];
	$mat_khau = $_POST['password'];
	$sql = "SELECT * FROM thanh_vien WHERE (ten_dang_nhap= '".$ten_dang_nhap."' or email = '".$ten_dang_nhap."') and mat_khau = '".$mat_khau."' AND tinh_trang = 1";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['dang_nhap_dien_dan']=$row['ten_dang_nhap'];
		$_SESSION['ho_ten_dang_nhap']=$row['ho_ten'];
		header('location:../../../index.php');
	}else{
		echo "<script type='text/javascript'>
		alert('Đăng nhập không thành công.');
		window.location = '../../../index.php?xem=dangnhap';
		</script>"	;
	}	
}

?>
