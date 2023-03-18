<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="js/js.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="image/home-v1.png"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/posts.css" rel="stylesheet" type="text/css">
        <meta name="theme-color" content="#FFBA00"/>
        <meta name="full-screen" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="#FFBA00"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@200&family=Satisfy&display=swap" rel="stylesheet">
        <link rel="preload" as="font" crossorigin="anonymous" data-href="https://fonts.googleapis.com/css?family=Helvetica&amp;display=swap"/>
        <meta charSet="utf-8"/>
        <title>BingHouse - Website tìm trọ Cần Thơ</title>
        <meta name="description" content="BingHouse - Website đăng,tim nhà trọ Cần Thơ mỗi ngày. Đăng tin mua bán UY TÍN, NHANH CHÓNG, AN TOÀN."/>
        <meta property="og:type" content="website"/>
      
    </head>
   
    <body class="hero-anime">

<div class="navigation-wrap bg-light start-header start-style">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-md navbar-light">
       
        <div class="ssn_header" alt="">
        <a class="ssn_logo" title="binghouse" href="index.php">
            <img src="image/logo.png" alt="BingHouse">
            <!-- <img src="image/desiglogo.png" alt="BingHouse"> -->
            <a class="logo_text"> BingHouse </a>
        </a>
    </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto py-4 py-md-0">
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="#">Tìm thuê</a>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="#">Quản lý tin</a>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="#">Thông báo</a>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="#">Tài khoản</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Tin đăng đã lưu</a>
                  <a class="dropdown-item" href="#">Tìm kiếm đã lưu</a>
                  <a class="dropdown-item" href="#">Đánh giá từ tôi</a>
                  <a class="dropdown-item" href="#">Cài đặt</a>
                  <a class="dropdown-item" href="#">Trợ giúp</a>
                </div>
              </li>
            </ul>
          </div>

        </nav>
      </div>
    </div>
  </div>
</div>

<div class="my-4 py-4">
</div>
    
 
    <?php
        $namehouse = $typeroom = $room = $address = $const = $image = $comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namehouse = test_input($_POST["namehouse"]);
        $typeroom = test_input($_POST["typeroom"]);
        $room = test_input($_POST["room"]);
        $image = test_input($_POST["image"]);
        $const = test_input($_POST["const"]);
        $address = test_input($_POST["address"]);
        $comment = test_input($_POST["comment"]);
        
        }
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>


 <!-- test -->
<body>
<div class="box-cla-filter-pc-v2">
            <h1>THÔNG TIN NHÀ TRỌ</h1>
        <table id="t1" action="reg.php" method="post">
            <tr>
              <label for="namehouse"></label>
                <td>Tên nhà trọ<input class="kt" required maxlength="50" type="text" name="namehouse"></td>
                <td>Số điện thoại <input class="kt1" required maxlength="50" required type="text" name="room"></td>
            </tr>
            <tr>
                <td>Địa chỉ<input class="kt" required maxlength="50" type="text" name="address"></td>
                <td >Số lượng<input class="kt1" required pattern="\d" type="number" name="numberof"></td>
            </tr>
            <tr>
                <td>Xã
                    <select class="op" required>
                        <option value="">--Chooes--</option>
                        <option value="1">Xuân Khánh</option>
                        <option value="2">Hưng Lợi</option>
                        <option value="3">An Hòa</option>
                        <option value="4">An Cư</option>
                        <option value="5">Trần Phú</option>
                        <option value="6">An Nghiệp</option>
                    </select>
                </td>
                <td >Diện tích<input class="kt1" required maxlength="50" required type="text" name="room"></td>
            </tr>
            <tr>
                <td>Huyện 
                    <select class="op" required>
                        <option value="">--Chooes--</option>
                        <option value="1">Ninh Kiều</option>
                        <option value="2">Cái Răng</option>
                        <option value="3">Bình Thủy</option>
                        <option value="4">Ô Môn</option>
                        <option value="5">Thốt Nốt</option>
                    </select>
                </td>
                <td>Mô tả<br><textarea class="kt1" rows="2" cols="10"></textarea></td>
            </tr>
            <tr>
                <td>Tỉnh
                    <select class="op" required>
                        <option value="">--Chooes--</option>
                        <option value="1">Hồ Chí Minh</option>
                        <option value="2">Cần Thơ</option>
                        <option value="3">Vĩnh Long</option>
                        <option value="4">Hậu Giang</option>
                    </select>
                </td>
                <td>Hình<input class="op" src="image/reset" required type="file" name="image"></td>
            </tr>
            <tr>
                <td>Loại phòng
                    <select class="op" required>
                        <option value="">--Chooes--</option>
                        <option value="one">Room no attic</option>
                        <option value="two">Room with attic</option>
                        <option value="three">Room with furniture</option>
                        <option value="mini">Minihouse</option>
                    </select>
                </td> 
            </tr>
            <tr>
                <td>Giá phòng
                <select class="op" required>
                        <option value="">--Chooes--</option>
                        <option value="one">800.000</option>
                        <option value="two">1.000.000</option>
                        <option value="three">1.500.000</option>
                        <option value="mini">2.000.000</option>
                    </select>
                </td>
                <td><hr/>
                    <button type="reset" name="btn-reg" id="btn">RESET</button>
                    <button type="update" name="btn-reg" id="btn">UPDATE</button>
                </td>
            </tr>
        </table>
      </div>
    

<script language="javascript">
            $(document).ready(function () {
            $('#input-form-search').autocomplete({
            serviceUrl: '/ajax/suggest?secret=45c09f3828245d941d0da984d0222cb2',
            noCache: true,
            autoSelectFirst: false,
            deferRequestBy: 300,
            minChars: 0,
            onSelect: function (suggestion) {
            url = suggestion.url || '';
            if (url !== '') {
            window.location.href = url;
            }
            }
            });
            });
        </script>

        <style>
            .autocomplete-suggestions{
            z-index: 10050000!important;
            }
        </style>
    </body>
        <footer>&copy; 2023 BingHouse</footer>
</html>