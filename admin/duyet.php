<?php
include 'config.php';

$sql = "UPDATE BAIVIET SET ID_TIN = 1 WHERE ID_BAIVIET = '$_GET[ID_BAIVIET]'";
$duyet_sql = mysqli_query($conn, $sql);
header('location: index.php');
?>