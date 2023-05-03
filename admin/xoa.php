<?php
include 'config.php';

$sql = "DELETE FROM BAIVIET WHERE ID_BAIVIET = '$_GET[ID_BAIVIET]'";
$duyet_sql = mysqli_query($conn, $sql);
header('location: index.php');
?>