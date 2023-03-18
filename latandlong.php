<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php function distance($lat1, $lon1, $lat2, $lon2) {
  $r = 6371; // bán kính của trái đất, đơn vị là km
  
  $lat1 = deg2rad($lat1);
  $lon1 = deg2rad($lon1);
  $lat2 = deg2rad($lat2);
  $lon2 = deg2rad($lon2);
  
  $dlat = $lat2 - $lat1;
  $dlon = $lon2 - $lon1;
  
  $a = sin($dlat/2)**2 + cos($lat1) * cos($lat2) * sin($dlon/2)**2;
  $c = 2 * asin(sqrt($a));
  
  return $r * $c;
}

// Gọi hàm distance với các giá trị tọa độ của A và B
//t8

echo('Truong 11');
echo('<br>');
echo distance(10.01775, 105.77059, 10.008231763410771, 105.72287451306573);
echo('<br>');

echo('Truong 10');
echo('<br>');
echo distance(10.01775, 105.77059, 10.033682322990293, 105.75463464005409);
echo('<br>');

echo('Truong 9');
echo('<br>');
echo distance(10.01775, 105.77059, 10.014335004223907, 105.76479085965416);
echo('<br>');

echo('Truong 8');
echo('<br>');
echo distance(10.01775, 105.77059, 10.027096086939006, 105.75728974005409); 
echo('<br>');
//t7
echo('Truong 7');
echo('<br>');
echo distance(10.01775, 105.77059, 10.062974085287465, 105.76237006441764);
echo('<br>');
//t6
echo('Truong 6');
echo('<br>');
echo distance(10.01775, 105.77059, 10.020163586353139, 105.7896012929583);





?>
</body>
</html>
