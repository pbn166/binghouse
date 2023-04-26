<?php
include './config/config.php';
$sql_xoahinh = "DELETE FROM HINH WHERE STT = '$_GET[STT]'";
$query_xoahinh = mysqli_query($conn, $sql_xoahinh);
$sql_xoaphong = "DELETE FROM PHONG WHERE STT = '$_GET[STT]'";
$query_phong = mysqli_query($conn, $sql_xoaphong);
header('location: setting_phong.php');
?>