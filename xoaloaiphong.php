<?php
include './config/config.php';

$sql_xoap = "DELETE FROM PHONG WHERE ID_LP = '" . $_GET['ID_LP'] . "'";
$query_xoap = mysqli_query($conn, $sql_xoap);
$sql_xoaclp = "DELETE FROM COLOAIPHONG WHERE ID_LP = '" . $_GET['ID_LP'] . "'";
$query_xoaclp = mysqli_query($conn, $sql_xoaclp);
$sql_xoalp = "DELETE FROM LOAIPHONG WHERE ID_LP = '" . $_GET['ID_LP'] . "'";
$query_xoalp = mysqli_query($conn, $sql_xoalp);
header('location: setting_loaiphong.php');
?>