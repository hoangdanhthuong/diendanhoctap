<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dien_dan_hoc_tap";
$conn = mysqli_connect($servername, $username, $password, $db_name);
if(!$conn){
	echo "Connection failed: ".mysqli_connect_error();
}
mysqli_set_charset($conn, 'UTF8');
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>