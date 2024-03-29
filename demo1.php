
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
$lat = 10.029433;
$lng = 105.773318;
$access_token = 'pk.eyJ1IjoiaHV5bmh0aHV5IiwiYSI6ImNsZnRjcjYyczAwZXIzY215N3gwbzFzam4ifQ.Ieo0w9hgSLSF_Pt4s89EgQ';
$address = '47/5, Đường 3/2, Quận Ninh Kiều, Tp Cần Thơ, Xuân Khánh, Ninh Kiều, Cần Thơ, Việt Nam';

// Thực hiện yêu cầu tới API Geocoding của Mapbox
$api_url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' . urlencode($address) . '.json?access_token=' . $access_token;
$response = file_get_contents($api_url);

// Phân tích dữ liệu JSON để lấy tọa độ của địa chỉ
$result = json_decode($response);
$longitude = $result->features[0]->geometry->coordinates[0];
$latitude = $result->features[0]->geometry->coordinates[1];

// In ra tọa độ của địa chỉ
echo "Longitude: " . $longitude . "<br>";
echo "Latitude: " . $latitude."<br>";
$distance = sqrt(pow($lat - $latitude, 2) + pow($lng - $longitude, 2));
    if ($distance < 0.001) {
        echo "Tọa độ của khu trọ phù hợp với địa chỉ của nó";
    } else {
        echo "Tọa độ của khu trọ không phù hợp với địa chỉ của nó";
    }
?>
</body>
</html>