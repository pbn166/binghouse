<!DOCTYPE html>
<?php
  include './config/config.php';
  $tinh="select * from tinh";
  $tinhsql = mysqli_query($conn,$tinh);
  $huyen="select * from huyen";
  $huyensql = mysqli_query($conn,$huyen);
  session_start();
  $map= "select * from truong";
  $mapsql=mysqli_query($conn,$map);
  

 
  
  

?>
<html>
<head>
	<meta charset='utf-8' />
	<title>Mapbox Example</title>
	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/map.css">

	
</head>
<body>
	
    <div id='map'></div>
    
</body>
<script src="js/map.js"></script>
</html>
