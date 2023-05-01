<?php
include './config/config.php';
$key = $_POST['id'];
$sql = "select a.TENKHUTRO, a.SONHA, c.TENHUYEN, d.TENXA, b.TENTINH, d.ID_XA, c.ID_HUYEN, b.ID_TINH
 from khutro as a, tinh as b, huyen as c, xa as d
 where a.ID_XA = d.ID_XA
 and d.ID_HUYEN = c.ID_HUYEN
 and c.ID_TINH = b.ID_TINH
 and ID_KHUTRO = '$key' ";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

if($num>0){
    $row = mysqli_fetch_array($query);

    $addressData = array(
        'SONHA' => $row['SONHA'],
        'TENTINH' => $row['TENTINH'],
        'TENHUYEN' => $row['TENHUYEN'],
        'TENXA' => $row['TENXA'],
        'ID_TINH' => $row['ID_TINH'],
        'ID_HUYEN' => $row['ID_HUYEN'],
        'ID_XA' => $row['ID_XA']
    );
    
    // Chuyển đối tượng thành chuỗi JSON trả về cho script
    echo json_encode($addressData);
}
?>
