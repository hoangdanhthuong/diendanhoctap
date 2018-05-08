<?php
session_start();
unset($_SESSION['dang_nhap_dien_dan']);
header("location: ../../../index.php");
?>