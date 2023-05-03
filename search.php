<!DOCTYPE html>
<?php
include './config/config.php';
$tinh = "select * from tinh";
$tinhsql = mysqli_query($conn, $tinh);
$huyen = "select * from huyen";
$huyensql = mysqli_query($conn, $huyen);
session_start();
$map = "select * from truong";
$mapsql = mysqli_query($conn, $map);

?>
<html>
  <?php
  include './incl/header.php'
  ?>

<!-- <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <script src="js/js.js" type="text/javascript"></script>
  <link rel="shortcut icon" href="image/home-v1.png" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <meta name="theme-color" content="#FFBA00" />
  <meta name="full-screen" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#FFBA00" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@200&family=Satisfy&display=swap"
    rel="stylesheet">
  <link rel="preload" as="font" crossorigin="anonymous"
    data-href="https://fonts.googleapis.com/css?family=Helvetica&amp;display=swap" />
  <meta charSet="utf-8" />
  <title>BingHouse - Website tìm trọ Cần Thơ</title>
  <meta name="description"
    content="BingHouse - Website đăng,tim nhà trọ Cần Thơ mỗi ngày. Đăng tin mua bán UY TÍN, NHANH CHÓNG, AN TOÀN." />
  <meta property="og:type" content="website" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/ajax.js" type="text/javascript"></script>
  <script src="js/ajax1.js" type="text/javascript"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">


  <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

  <!-- Mapbox GL JS -->
  <!-- <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script> -->

  <!-- Mapbox Directions -->
<!-- 
</head>  -->


<style>
    .wrapper {
      width: 100%;
      min-height: 100vh;
      position: relative;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    /* CSS cho bản đồ */
    #map {
      height: 600px;
      width: 100%;
    }
    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


       body{
        background-color:#eee;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
       }

       .height{
        height: 50vh;
       }
       

       .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
         
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


       }


       .search input:focus{

        box-shadow: none;
        border: 2px solid blue;


       }

       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;

       }

       .search button{

        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: blue;

       }
       
  </style>

  <!-- <div class="wrapper">
    <h1>Tìm kiếm khu trọ</h1>
    <form method="post">
      <label>Tìm kiếm theo tên khu trọ hoặc tên chủ khu trọ:</label>
      <input type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm">
      <input type="submit" name="search" value="Tìm kiếm">
    </form> -->
    
    <div class="container">
    
                    <div class="row height d-flex justify-content-center align-items-center">
                   
                      <div class="col-md-8">
                      <form method="post">
                        <div class="search">
                          <i class="fa fa-search"></i>
                          <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm theo tên khu trọ hoặc tên chủ khu trọ">
                          <button type="submit" name="search"  class="btn btn-primary">Tìm kiếm</button>
                        </div>
                        </form>
                      </div>
                      
                    </div>
                </div>

    <?php
    // Kết nối cơ sở dữ liệu
    
    // Xử lý tìm kiếm
    if (isset($_POST['search'])) {
      $keyword = $_POST['keyword'];



      $query = "SELECT a.TENKHUTRO, a.SONHA, e.TENXA, d.TENHUYEN, c.TENTINH, b.HOTEN, a.LAT_TRO, a.LONG_TRO
        FROM khutro as a, chukhutro as b, tinh as c, huyen as d, xa as e
        WHERE a.ID_CKT = b.ID_CKT
        and a.ID_XA = e.ID_XA
        and e.ID_HUYEN = d.ID_HUYEN
        and d.ID_TINH = c.ID_TINH
        and (a.TENKHUTRO LIKE '%{$keyword}%' OR b.HOTEN LIKE '%{$keyword}%')";


      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);

      // Hiển thị kết quả dưới dạng bảng HTML
      echo "<p>Tìm thấy $count kết quả:</p>";
      echo "<table>";
      echo "<tr><th>Tên khu trọ</th><th>Địa chỉ</th><th>Tên chủ khu trọ</th><th></th></tr>";

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['TENKHUTRO'] . "</td>";
        echo "<td>" . $row['SONHA'] . ", " . $row['TENXA'] . ", " . $row['TENHUYEN'] . ", " . $row['TENTINH'] . "</td>";
        echo "<td>" . $row['HOTEN'] . "</td>";

        echo "<td><a href='#' onclick='showMap(\"" . $row['LONG_TRO'] . "," . $row['LAT_TRO'] . "\")'>Xem bản đồ</a></td>";
        echo "</tr>";
      }

      echo "</table>";
    }
    ?>
    </br>
    <script
      src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.js"></script>
    <link rel="stylesheet"
      href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css"
      type="text/css">
    <div id="map"></div>




  </div>
  <script>
    function showMap(coordinates) {
      mapboxgl.accessToken = 'pk.eyJ1IjoiaHV5bmh0aHV5IiwiYSI6ImNsZnRjcjYyczAwZXIzY215N3gwbzFzam4ifQ.Ieo0w9hgSLSF_Pt4s89EgQ';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v12',
        center: coordinates.split(','),
        zoom: 12,

      });

      var marker = new mapboxgl.Marker({
        color: 'blue'
      }).setLngLat(coordinates.split(',')).addTo(map);

      // Thêm đối tượng GeolocateControl để cho phép người dùng định vị vị trí hiện tại
      var geolocate = new mapboxgl.GeolocateControl({
        positionOptions: {
          enableHighAccuracy: true
        },
        trackUserLocation: true,
        showAccuracyCircle: false
      });

      map.addControl(geolocate);

      var directions = new MapboxDirections({
        accessToken: 'pk.eyJ1IjoiaHV5bmh0aHV5IiwiYSI6ImNsZnRjcjYyczAwZXIzY215N3gwbzFzam4ifQ.Ieo0w9hgSLSF_Pt4s89EgQ',
        unit: 'metric',
        profile: 'mapbox/driving',
        interactive: true,
        controls: { instructions: false },
        styles: [{
          "id": "route",
          "type": "line",
          "source": "route",
          "layout": {
            "line-join": "round",
            "line-cap": "round"
          },
          "paint": {
            "line-color": "#FF0000",
            "line-width": 8,
            "line-opacity": 0.8
          }
        }]
      });

      map.addControl(directions, 'top-left');

      geolocate.on('geolocate', function (e) {
        var lon = e.coords.longitude;
        var lat = e.coords.latitude;
        var position = [lon, lat];
        directions.setOrigin(position);
      });
      directions.setDestination(coordinates.split(','));

      // Thêm nút "Bắt đầu chỉ đường" vào bản đồ
      /*var startButton = document.createElement('button');
      startButton.textContent = 'Bắt đầu chỉ đường';
      startButton.style.marginTop = '10px';
      startButton.addEventListener('click', function() {
          directions.setOrigin();
      });
      map.on('load', function() {
          document.getElementById('map').appendChild(startButton);
      });
  
      // Hiển thị đường line màu đỏ
      directions.on('route', function(e) {
          map.getSource('route').setData(e.route.geometry);
          //map.getSource('route').setData({type: 'Feature', geometry: e.route.geometry});
      });*/
    }

  </script>
</body>
<?php
  include './incl/footer.php'
  ?>
</html>