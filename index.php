<!DOCTYPE html>
<?php
  include './config/config.php';
  $tinh="select * from tinh";
  $tinhsql = mysqli_query($conn,$tinh);
  $huyen="select * from huyen";
  $huyensql = mysqli_query($conn,$huyen);
  session_start();
 
  
  

?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
        
      
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
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4 active">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <a class="nav-link" href="#">Tìm thuê</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <a class="nav-link" href="#">Quản lý tin</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <a class="nav-link" href="#">Thông báo</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <a class="nav-link" href="#" data-toggle="dropdown">Tài khoản</a>
                <!-- <div class="nav-link"  data-toggle="dropdown"></div> -->
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Tin đăng đã lưu</a>
                  <a class="dropdown-item" href="#">Tìm kiếm đã lưu</a>
                  <a class="dropdown-item" href="#">Đánh giá từ tôi</a>
                  <a class="dropdown-item" href="#">Cài đặt</a>
                  <a class="dropdown-item" href="#">Trợ giúp</a>
                </div>
              </li>
              <?php
                          // session_destroy();
                          if (!isset($_SESSION['HOTEN'])) {
                            ?> <a href="login.php" class="btn btn-primary pl-0 pl-md-2 ml-0 ml-md-4 btn-lg active" role="button" aria-pressed="true">Login</a><?php
                          } else {?>
                            <div class="dropdown">
                                <div  onclick="hamDropdown()" class="nut_dropdown"><?php echo $_SESSION['HOTEN'];?></div>
                                
                            </div>
                        <?php
                        }
                      ?>    
                <!--<a href="login.php" class="btn btn-primary pl-0 pl-md-2 ml-0 ml-md-4 btn-lg active" role="button" aria-pressed="true">Login</a>-->
               
            </ul>
          </div>

        </nav>
      </div>
    </div>
  </div>
</div>

<div class="my-4 py-4">
</div>

<!-- Link to page
================================================== -->
<div class="ssn_pw_filter" >
  
    <div class="box-cla-filter-pc-v2">
 <form class="f-body cla-filter" action="/search" method="get">
 <div class="row-main">
 <div class="item-filter has-icon border-r flex-none">
 <i class="icon mcon-city"></i>
 <select name="iCat" class="f-form-input">
 <option value="0">Chọn loại nhà trọ</option>
  <optgroup label="Nhà đất bán">
  <option value="324">Bán căn hộ chung cư</option>
    
  <option value="324">Bán căn hộ chung cư</option>
  <option value="41">Bán nhà riêng</option>
  <option value="325">Bán nhà biệt thự, liền kề</option>
  <option value="163">Bán nhà mặt phố</option>
  <option value="40">Bán đất nền dự án</option>
  <option value="283">Bán đất</option>
  <option value="44">Bán trang trại, khu nghỉ dưỡng</option>
  <option value="45">Bán kho, nhà xưởng</option>
  <option value="48">Bán loại bất động sản khác</option>
  </optgroup>
  <optgroup label="Nhà đất cho thuê">
  <option value="326">Cho thuê căn hộ chung cư</option>
  <option value="52">Cho thuê nhà riêng</option>
  <option value="51">Cho thuê nhà mặt phố</option>
  <option value="57">Cho thuê nhà trọ, phòng trọ</option>
  <option value="50">Cho thuê văn phòng</option>
  <option value="55">Cho thuê cửa hàng, ki ốt</option>
  <option value="53">Cho thuê kho, nhà xưởng, đất</option>
  <option value="59">Cho thuê loại bất động sản khác</option>
  </optgroup>
  </select>
 </div>
 <div class="item-filter">
 <input type="text" value="" id="input-form-search" placeholder="Từ khóa tìm kiếm. VD: Thuê nhà trọ Cầu Giấy" name="keyword" class="f-form-input" autocomplete="off">
 </div>
 <button type="submit" class="btn btn-primary">
 Tìm kiếm
 </button>

 </div>
 <div class="row-main-2">
 <div class="item-filter">
 <select name="iCitId" class="f-form-input" onchange="getDistrictClaFilter(this.value)">
 <option value="0">Tất cả Tỉnh/Thành phố</option>
 <?php
  foreach ($tinhsql as $key => $value){?>
    <option value=''><?php echo $value['TENTINH'] ?></option>
    
<?php } ?>
  </select>
 </div>
 <div class="item-filter">
 <select name="iDisId" class="f-form-input city" onchange="getWardClaFilter(this.value)">
  <option value="">Quận/Huyện</option>
  <?php
  foreach ($huyensql as $key => $value){?>
    <option value='<?php echo $value['ID_HUYEN'] ?>'><?php echo $value['TENHUYEN'] ?></option>
    
<?php } ?>
  </select>
 </div>
 <div class="item-filter">
 <select name="iWardId" class="f-form-input tinh">
  <option value="0">Phường/Xã</option>    
 </select>
 </div>
 <div class="item-filter">
    <select class="f-form-input" name="iPrice">
  <option selected="" value="0">
 Tất cả mức giá
 </option>
  <option value="1">
 Dưới 1 triệu
 </option>
  <option value="2">
 1 triệu - 3 triệu
 </option>
  <option value="3">
 3 triệu - 5 triệu
 </option>
  <option value="4">
 5 triệu - 7 triệu
 </option>
  <option value="5">
 7 triệu - 10 triệu
 </option>
  <option value="6">
 10 triệu - 15 triệu
 </option>
  <option value="7">
 15 triệu - 20 triệu
 </option>
  <option value="8">
 20 triệu - 25 triệu
 </option>
  <option value="9">
 25 triệu - 30 triệu
 </option>
  <option value="10">
 30 triệu - 40 triệu
 </option>
  <option value="11">
 40 triệu - 60 triệu
 </option>
  <option value="12">
 60 triệu - 80 triệu
 </option>
  <option value="13">
 80 triệu - 100 triệu
 </option>
  <option value="14">
 100 triệu - 120 triệu
 </option>
  <option value="15">
 120 triệu - 150 triệu
 </option>
  <option value="16">
 150 triệu - 200 triệu
 </option>
  <option value="17">
 200 triệu - 250 triệu
 </option>
  <option value="18">
 250 triệu - 500 triệu
 </option>
  <option value="19">
 500 triệu - 750 triệu
 </option>
  <option value="20">
 750 triệu - 1 tỷ
 </option>
  <option value="21">
 1 tỷ - 1.5 tỷ
 </option>
  <option value="22">
 1.5 tỷ - 2 tỷ
 </option>
  <option value="23">
 2 tỷ - 3 tỷ
 </option>
  <option value="24">
 3 tỷ - 5 tỷ
 </option>
  <option value="25">
 5 tỷ - 10 tỷ
 </option>
  <option value="26">
 10 tỷ - 20 tỷ
 </option>
  <option value="27">
 20 tỷ - 25 tỷ
 </option>
  <option value="28">
 25 tỷ - 30 tỷ
 </option>
  <option value="29">
 Trên 30 tỷ
 </option>
  </select>
 </div>
 <div class="option-reset" onclick="resetFilterCla()">
 
            <svg width="25px" height="25px" viewBox="0 0 24 24" class="mcon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/385/assets/images/icons.svg#refresh"></use>
            </svg>
        
 </div>
 </div>
 </form>
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


</div>
<script>
    function hamDropdown() {
                document.querySelector(".noidung_dropdown").classList.toggle("hienThi");
            }
   </script>
</body>

</html>
