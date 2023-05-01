<?php
include './config/config.php';
$key = $_POST['id'];
$sql = "select * from loaiphong where ID_LP = '$key' ";
$query = mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

if($num>0){
    $row = mysqli_fetch_array($query);

    $addressData = array(
        'SONGUOIOTOIDA' => $row['SONGUOIOTOIDA'],
        'DIENTICH' => $row['DIENTICH'],
       
    );
    
    // Chuyển đối tượng thành chuỗi JSON trả về cho script
    echo json_encode($addressData);
}
?>
