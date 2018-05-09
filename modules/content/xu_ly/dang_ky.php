<?php
include("../../../admin/modules/config.php");
$ten_dang_ky = $_POST['ten_dang_ky'];
$mat_khau = $_POST['mat_khau'];
$ho_ten = $_POST['ho_ten'];
$email = $_POST['email'];
if(check_login($ten_dang_ky,$email)==0){
	$sql = "INSERT INTO thanh_vien( ten_dang_nhap, mat_khau, email, ho_ten, quyen, tinh_trang) VALUES ('".$ten_dang_ky."','".$mat_khau."','".$email."','".$ho_ten."',0,1)";
	if(!mysqli_query($conn, $sql)){
		header("location: ../../../index.php?xem=dangky&error=1");
	} else{
		echo "<script type='text/javascript'> 
		alert('Đăng ký thành công. Mời bạn đăng nhập.');
		window.location = '../../../index.php?xem=dangnhap&error';
		</script>";
	}

}else{
	header("location: ../../../index.php?xem=dangky&error=1");
}


function check_login($name, $email){
	include("../../../admin/modules/config.php");
	$sql_check = "SELECT * FROM thanh_vien WHERE email='".$email."'   or ten_dang_nhap = '".$name."'";
	$result_check = mysqli_query($conn, $sql_check);
	return mysqli_num_rows($result_check);
}
?>
