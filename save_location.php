<?php
include './config/config.php';

// Lấy thông tin vị trí được gửi từ trang web
$lat = $_POST["lat"];
$lon = $_POST["lon"];

// Kết nối đến cơ sở dữ liệu
// Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng
$sql = "INSERT INTO locations (latitude, longitude) VALUES ($lat, $lon)";
$result= mysqli_query($conn,$sql);
#$stmt = $conn->prepare($sql);
#$stmt->bind_param("dd", $lat, $lon);

// Thực hiện chèn dữ liệu vào bảng
if ($result) {
  echo "Xác định vị trí thành công";
} else {
  echo "Không xác định được vị trí";
}

// Đóng kết nối đến cơ sở dữ liệu

?>
