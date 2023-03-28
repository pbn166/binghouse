
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
   $address = "Khu II, Đ. 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ, Việt Nam";
   $api_key = "AIzaSyAWGk2wJhwfcVRvbwWN8_WS5G_e7YRUvjI";
  
   $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($address) . "&key=" . $api_key;
   //echo $url;
   //exit();
   
   // Gửi yêu cầu HTTP để lấy dữ liệu JSON
   $response = file_get_contents($url);
   
   // Giải mã JSON để truy cập vào thông tin địa lý
   $result = json_decode($response);
   if ($result->status == "OK") {
    // Lấy thông tin vị trí
    $lat = $result->results[0]->geometry->location->lat;
    $lng = $result->results[0]->geometry->location->lng;
    
    // In ra kết quả
    echo "Vị trí của địa chỉ '" . $address . "' là (" . $lat . ", " . $lng . ")";
} else {
    // Xử lý khi không tìm thấy kết quả
    echo ("Không tìm thấy địa chỉ");}

?>
</body>
</html>