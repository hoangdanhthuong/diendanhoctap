<?php
session_start();
unset($_SESSION['admin_dang_nhap_dien_dan']);
header('location: ../../index.php');
?>