<?php
include './config/config.php';
$sql = "DELETE FROM BAIVIET WHERE ID_BAIVIET = '$_GET[ID_BAIVIET]'";
$query_xoahinh = mysqli_query($conn, $sql);
header('location: tindadang.php');

?>