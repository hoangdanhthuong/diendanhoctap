<?php
include("../config.php");
$username = $_POST['userName'];
$password = $_POST['password'];
$sql = "SELECT * FROM admin WHERE ( email ='".$username."' or ten_dang_nhap = '".$username."') and mat_khau='".$password."'";
$result =mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	session_start();
	$_SESSION['admin_dang_nhap_dien_dan']=$username;
	header("location:../../index.php");
}else{
	header("location:../../index.php");
}
?>