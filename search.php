<?php

include './config/config.php';

$search = $_POST['search'];

$search = mysqli_real_escape_string($conn, $search);

//$sql = "SELECT * FROM khu_tro WHERE ten_khu_tro LIKE '%{$search}%' OR chu_so_huu LIKE '%{$search}%'";
$sql = "SELECT a.TENKHUTRO, a.SONHA, e.TENXA, d.TENHUYEN, c.TENTINH, b.HOTEN, a.LAT_TRO, a.LONG_TRO
FROM khutro as a, chukhutro as b, tinh as c, huyen as d, xa as e
WHERE a.ID_CKT = b.ID_CKT
and a.ID_XA = e.ID_XA
and e.ID_HUYEN = d.ID_HUYEN
and d.ID_TINH = c.ID_TINH
and (a.TENKHUTRO LIKE '%{$search}%' OR b.HOTEN LIKE '%{$search}%')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

$results = array();

while ($row = mysqli_fetch_assoc($result)) {
    $results[] = $row;
}

header('Content-Type: application/json');
echo json_encode($results);

mysqli_close($conn);
