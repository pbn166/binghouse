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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
            </svg>
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
              <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
              <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
            </svg>
                <a class="nav-link" href="#">Tìm thuê</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 26.272 24.4" width="1em" height="1em" fill="none" class="aw__i1xnxzjm"><g fill="currentColor"><path d="M7.93 10.791c1.502.355 3.04.533 4.582.528 2.287 0 4.535-.382 6.17-1.05.974-.465.557-.225 1.246-.702l.528-.464c.369.736.992 1.27 1.508 1.712l.22.191a7.999 7.999 0 01.976 3.8c0 4.424-3.738 8.162-8.162 8.162-4.424 0-8.162-3.738-8.162-8.162a7.99 7.99 0 011.095-4.015zm-5.464-4.9l.232-.141a8.086 8.086 0 01-.217-.403l-.017-.032a10.24 10.24 0 01-.448-1.03 6.989 6.989 0 002.028.831 1.23 1.23 0 001.382-.646l.254-.145c1.734-.037 3.48-.766 5.172-1.471 1.276-.532 2.48-1.034 3.55-1.192.67-.1 1.308-.15 1.892-.15 1.63 0 2.86.386 3.552 1.114.464.489.68 1.129.64 1.9-.025.51.267.981.734 1.186.438.19.972.097 1.32-.226.126.099.27.172.427.216.413.115.652.216.8.338.16.13.314.364.503.76.876 1.832.478 2.79-.181 4.376l-.018.045c-.126-.435-.291-.77-.587-1.054a11.595 11.595 0 00-.546-.488c-.516-.442-1.05-.898-1.231-1.458A1.222 1.222 0 0019.6 7.82l-.385.399c-.825.547-.582.377-.98.615-.04.018-.08.035-.12.05-1.46.597-3.503.94-5.603.94-1.59 0-3.253-.195-4.567-.534a1.236 1.236 0 00-.937.137c-.232.14-.34.38-.633 1.022l-.143.313c-.19-.714-.428-1.595-.605-2.055a1.228 1.228 0 00-.52-.614c-.8-.473-1.456-1.03-1.952-1.659a4.43 4.43 0 01-.077-.1l-.076-.106a6.617 6.617 0 01-.299-.472l-.191.11.187-.114-.233.14zm23.154.264c-.213-.448-.417-.783-.66-1.045l.62.31-.62-.883c-.345-.49-.967-.77-1.708-.77-.463 0-.914.107-1.274.295-.06-.958-.417-1.802-1.048-2.466C19.634.232 17.25-.271 14.183.182c-1.254.185-2.602.747-3.906 1.291-1.6.667-3.255 1.357-4.734 1.357-1.92-.205-2.354-.722-3.372-1.783l.086.795.009.065c.039.248.15.516.327.793.069.11.147.218.232.325-.886-.538-1.602-1.343-2.17-2.43L.345 0 .153.644C-.32 2.23.387 4.523 1.13 5.993l.02.046.005.005c.08.156.164.311.252.464l.084.14.014.023c.085.142.175.28.27.416l.016.022c.06.086.124.17.189.253.593.75 1.36 1.413 2.283 1.97.895 2.367 1.099 4.39 1.145 5.17-.004.1-.005.202-.005.304 0 5.2 4.394 9.594 9.594 9.594 5.2 0 9.595-4.394 9.595-9.594 0-.133-.003-.265-.01-.396.21-1.031.555-1.859.888-2.66.704-1.696 1.312-3.16.15-5.595z"></path><path d="M11.84 14.937a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m6.547 0a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m-3.328 5.912c1.97 0 3.767-.987 4.69-2.576a.718.718 0 00-1.24-.72c-.667 1.149-1.99 1.863-3.45 1.863-1.462 0-2.784-.714-3.451-1.863a.711.711 0 00-.436-.332.717.717 0 00-.803 1.052c.922 1.589 2.72 2.576 4.69 2.576"></path></g></svg>
                <a class="nav-link" href="#">Quản lý tin</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
              <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 15.706 19.271" width="1em" height="1em" fill="none" class="aw__ixo30vg"><path d="M13.033 7.739l-.03 8.149H2.705l-.03-8.148c0-2.953 2.226-5.181 5.179-5.183 2.952.002 5.18 2.23 5.18 5.182zm-3.775 9.296c-.194.635-.75 1.066-1.404 1.067-.654-.001-1.21-.432-1.404-1.067zm5.88-1.147h-.947l-.01-8.17c0-3.381-2.409-6-5.746-6.277V.568c0-.37-.292-.566-.582-.568-.288.002-.58.198-.58.568v.873c-3.337.276-5.746 2.896-5.746 6.277l-.01 8.17H.568c-.373 0-.568.293-.568.584 0 .29.195.584.568.584H5.26a2.642 2.642 0 002.593 2.215 2.641 2.641 0 002.593-2.215h4.692c.373 0 .568-.294.568-.584s-.195-.584-.568-.584z" fill="currentColor"></path></svg>
                <a class="nav-link" href="#">Thông báo</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="aw__i1t7n4kh aw__i1t7n4kh--active"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 3.08366C6.17938 3.08366 3.08268 6.18036 3.08268 10.0003C3.08268 13.8203 6.17938 16.917 9.99935 16.917C13.8193 16.917 16.916 13.8203 16.916 10.0003C16.916 6.18036 13.8193 3.08366 9.99935 3.08366ZM1.91602 10.0003C1.91602 5.53602 5.53505 1.91699 9.99935 1.91699C14.4637 1.91699 18.0827 5.53602 18.0827 10.0003C18.0827 14.4646 14.4637 18.0837 9.99935 18.0837C5.53505 18.0837 1.91602 14.4646 1.91602 10.0003Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 6.83366C8.59562 6.83366 7.45768 7.9716 7.45768 9.37533C7.45768 10.779 8.59562 11.917 9.99935 11.917C11.4031 11.917 12.541 10.779 12.541 9.37533C12.541 7.9716 11.4031 6.83366 9.99935 6.83366ZM6.29102 9.37533C6.29102 7.32727 7.95129 5.66699 9.99935 5.66699C12.0474 5.66699 13.7077 7.32727 13.7077 9.37533C13.7077 11.4234 12.0474 13.0837 9.99935 13.0837C7.95129 13.0837 6.29102 11.4234 6.29102 9.37533Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0005 13.0837C9.06941 13.0837 8.15655 13.3415 7.36306 13.8285C6.56957 14.3156 5.92644 15.0128 5.50496 15.843C5.35912 16.1303 5.00802 16.2449 4.72075 16.0991C4.43349 15.9532 4.31884 15.6021 4.46469 15.3149C4.98369 14.2926 5.77564 13.434 6.75275 12.8342C7.72986 12.2345 8.85396 11.917 10.0005 11.917C11.1469 11.917 12.271 12.2345 13.2481 12.8342C14.2253 13.434 15.0172 14.2926 15.5362 15.3149C15.6821 15.6021 15.5674 15.9532 15.2801 16.0991C14.9929 16.2449 14.6418 16.1303 14.4959 15.843C14.0745 15.0128 13.4313 14.3156 12.6378 13.8285C11.8444 13.3415 10.9315 13.0837 10.0005 13.0837Z" fill="#222222"></path></svg>
               <a class="nav-link" href="#" data-toggle="dropdown">Tài khoản</a>
               <svg data-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="aw__d1xmuhl0" id="arrowDownB"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg>
               <?php
                          // session_destroy();
                          if (!isset($_SESSION['HOTEN'])) {
                            ?>
                              <div class="dropdown-menu"> 
                <div class="aw__m12exo7"><a href="login.php" rel="nofollow"><span class="aw__mdmk8my"></span><span class="aw__meaxp5j">Đăng nhập / Đăng ký</span>
              </a><div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
              <div class="aw__c1n389kw"></div></div>
                  <a class="dropdown-item" href="#">Tin đăng đã lưu</a>
                  <a class="dropdown-item" href="#">Tìm kiếm đã lưu</a>
                  <a class="dropdown-item" href="#">Đánh giá từ tôi</a>
                  <a class="dropdown-item" href="#">Cài đặt</a>
                  <a class="dropdown-item" href="#">Trợ giúp</a>
                </div>
                            <?php
                          } else {?>
                            
                            <div class="dropdown-menu"> 
                <div class="aw__m12exo7" onclick="hamDropdown()"><a href="" rel="nofollow"><span class="aw__mdmk8my"></span><span class="aw__meaxp5j"><?php echo $_SESSION['HOTEN'];?></span>
              </a><div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
              <div class="aw__c1n389kw"></div></div>
                  <a class="dropdown-item" href="#">Tin đăng đã lưu</a>
                  <a class="dropdown-item" href="#">Tìm kiếm đã lưu</a>
                  <a class="dropdown-item" href="#">Đánh giá từ tôi</a>
                  <a class="dropdown-item" href="#">Cài đặt</a>
                  <a class="dropdown-item" href="#">Trợ giúp</a>
                  <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                </div>
                        <?php
                        }
                      ?>   
                
                            
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
 <option value="0">Chọn loại phòng</option>
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
<section class="ssn_container ssn_buy_sell fix_pos">

    <div class="home_fixed">
        
     <!-- Sosanhnha pc -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5866303118479016" data-ad-slot="4297353379" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
        </div>
    <div class="ssn_pw home_ad">
        
     <!-- Sosanhnha pc -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5866303118479016" data-ad-slot="4297353379" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
        </div>
    <div class="ssn_pw home_buy_sell">
        <div class="listing">
        <strong class="label">TIN ĐĂNG MỚI</strong>

            <div class="home_listing">
                
                                    <div class=" item">
                        <a class="img_r " href="/can-ban-25x45-1125m2-dat-gan-khu-cong-nghiep-ngay-cho-dan-dong-gia-290tr5x45m-claP0B3Bq" title="Cần bán 25x45= 1125m2 đất gần khu công nghiệp, ngay chợ dân đông. giá 290tr/5x45m">
                                                          
                                                                             <img src="https://media.sosanhnha.com/webp/150x150/2023/03/1678263479-wbq.jpg" alt="Cần bán 25x45= 1125m2 đất gần khu công nghiệp, ngay chợ dân đông. giá 290tr/5x45m">
                                                    </a>
                        <div class="info">
                            <h3>
                                <a class="name-vip title" href="/can-ban-25x45-1125m2-dat-gan-khu-cong-nghiep-ngay-cho-dan-dong-gia-290tr5x45m-claP0B3Bq" title="Cần bán 25x45= 1125m2 đất gần khu công nghiệp, ngay chợ dân đông. giá 290tr/5x45m">
                                    Cần Bán 25X45= 1125M2 Đất Gần Khu Công Nghiệp                          </a>
                            </h3>
                            <div class="if">
                                <span class="label"> Giá </span>
                                                                    <strong class="f3b1abed9c57992b822e259ef8c7ac1f price">290 triệu</strong>                                                            </div>
                                                            <div class="if">
                                    <span class="label"> Diện tích </span>
                                                                            <strong class="acreage">1125m<sup>2</sup></strong>
                                                                    </div>
                                                            <div class="if">
                                <span class="label"> Địa chỉ </span>
                                <strong class="address"><b>Chơn Thành</b></strong>
                            </div>
                            <div class="info_user_home">
                                <div class="user_name">
                                    <div class="user_avatar">
                                                                                    <img src="https://connect.sosanhnha.com/avata.php?id=629978" alt="user avatar">
                                                                            </div>
                                    <div class="avatar_name">
                                        <span class="phone_name" title="Thị Kim">Thị Kim</span>
                                                                                    <span class="phone_number p_0896873698" onclick="showPhoneV2('0896873698',this)"> 089687*** </span>
                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <div class=" item">
                        <a class="img_r " href="/ban-gap-2-sao-dat-vuon-2060m2-gia-410trshr-sat-kcn-viet-han-dan-cu-dong-gan-qlo-tien-lam-kho-bai-cla6RQMQ5" title="Bán gấp 2 sào đất vườn [2.060m2 - giá 410tr/shr) sát kcn việt-hàn dân cư đông, gần q.lộ tiện làm kho bãi">
                                                          
                                                                                    <img src="https://media.sosanhnha.com/webp/150x150/2023/03/1678929222-ryh.jpg" alt="Bán gấp 2 sào đất vườn [2.060m2 - giá 410tr/shr) sát kcn việt-hàn dân cư đông, gần q.lộ tiện làm kho bãi">
                                                    </a>
                        <div class="info">
                            <h3>
                                <a class="name-vip title" href="/ban-gap-2-sao-dat-vuon-2060m2-gia-410trshr-sat-kcn-viet-han-dan-cu-dong-gan-qlo-tien-lam-kho-bai-cla6RQMQ5" title="Bán gấp 2 sào đất vườn [2.060m2 - giá 410tr/shr) sát kcn việt-hàn dân cư đông, gần q.lộ tiện làm kho bãi">
                                    Bán Gấp 2 Sào Đất Vườn [2.060M2 - Giá 410Tr/Shr) Sát Kcn Việt-Hàn Dân Cư Đông, Gần Q.lộ Tiện Làm Kho Bãi                                </a>
                            </h3>
                            <div class="if">
                                <span class="label"> Giá </span>
                                                                    <strong class="4f39118b502d966b6932abd6380c1a0a price">410 triệu</strong>                                                            </div>
                                                            <div class="if">
                                    <span class="label"> Diện tích </span>
                                                                            <strong class="acreage">2060m<sup>2</sup></strong>
                                                                    </div>
                                                            <div class="if">
                                <span class="label"> Địa chỉ </span>
                                <strong class="address"><b>TX CHƠN THÀNH</b>,<b> BÌNH PHƯỚC</b></strong>
                            </div>
                            <div class="info_user_home">
                                <div class="user_name">
                                    <div class="user_avatar">
                                                                                    <img src="https://connect.sosanhnha.com/avata.php?id=469546" alt="user avatar">
                                                                            </div>
                                    <div class="avatar_name">
                                        <span class="phone_name" title="0766.376.337">0766.376.337</span>
                                                                                    <span class="phone_number p_0766376337" onclick="showPhoneV2('0766376337',this)"> 076637*** </span>
                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
        <div class="listing">
        <strong class="label">TIN ĐĂNG MỚI</strong>
            <div class="home_listing">
                                    <div class=" item">
                        <a class="img_r " href="/nha-3-lau-3pn-3wc-hem-thong-xe-hoi-sau-cho-dau-moi-thu-duc-cladA7Apl" title="Nhà 3 lầu 3 phòng ngủ 3 vệ sinhhẻm thông xe hơi sau chợ đầu mối thủ đức">
                                                        <img src="https://media.sosanhnha.com/webp/150x150/2023/03/1679153347-pictureb4nyu.jpeg" alt="Nhà 3 lầu 3 phòng ngủ 3 vệ sinhhẻm thông xe hơi sau chợ đầu mối thủ đức">
                                                    </a>
                        <div class="info">
                            <h3>
                                <a class="title" href="/nha-3-lau-3pn-3wc-hem-thong-xe-hoi-sau-cho-dau-moi-thu-duc-cladA7Apl" title="Nhà 3 lầu 3 phòng ngủ 3 vệ sinhhẻm thông xe hơi sau chợ đầu mối thủ đức">
                                    Nhà 3 Lầu 3 Phòng Ngủ 3 Vệ Sinhhẻm Thông Xe Hơi Sau Chợ Đầu Mối Thủ Đức                                </a>
                            </h3>
                            <div class="if">
                                <span class="label"> Giá </span>
                                                                    <strong class="price">7,5 triệu/tháng</strong>
                                                            </div>

                            <div class="if">
                                <span class="label"> Diện tích </span>
                                                                    <strong class="acreage">53m<sup>2</sup></strong>
                                                            </div>

                            <div class="if">
                                <span class="label"> Địa chỉ </span>
                                <strong class="address"><b> Phường Bình Chiểu</b>,<b> Thủ Đức</b>,<b> Hồ Chí Minh</b></strong>
                            </div>
                            <div class="info_user_home">
                                <div class="user_name">
                                    <div class="user_avatar">
                                                                                    <span>b</span>
                                                                            </div>
                                    <div class="avatar_name">
                                        <span class="phone_name" title="Bùi Thị Thùy Dương">Bùi Thị Thùy Dương</span>
                                                                                    <span class="phone_number " onclick="showPhoneV2('0904478178',this)"> 090447*** </span>
                                                                                </div>
                                </div>
                            </div>
                        </div>


                    </div>
                                    <div class=" item">
                        <a class="img_r " href="/cho-thue-nha-nguyen-can-duong-3-2-p-11-q-10-4m-x-10m-clag9o9yN" title="Cho thuê nhà nguyên căn đường 3/2 , p.11, q.10, 4m x 10m">
                                                        <img src="https://media.sosanhnha.com/webp/150x150/2023/03/1679153347-picturemuz2b.jpg" alt="Cho thuê nhà nguyên căn đường 3/2 , p.11, q.10, 4m x 10m">
                                                    </a>
                        <div class="info">
                            <h3>
                                <a class="title" href="/cho-thue-nha-nguyen-can-duong-3-2-p-11-q-10-4m-x-10m-clag9o9yN" title="Cho thuê nhà nguyên căn đường 3/2 , p.11, q.10, 4m x 10m">
                                    Cho Thuê Nhà Nguyên Căn Đường 3/2 , P.11, Q.10, 4M X 10M                                </a>
                            </h3>
                            <div class="if">
                                <span class="label"> Giá </span>
                                                                    <strong class="price">33 triệu/tháng</strong>
                                                            </div>

                            <div class="if">
                                <span class="label"> Diện tích </span>
                                                                    <strong class="acreage">40m<sup>2</sup></strong>
                                                            </div>

                            <div class="if">
                                <span class="label"> Địa chỉ </span>
                                <strong class="address"><b> phường 11</b>,<b> quận 10</b>,<b> hồ chí minh</b></strong>
                            </div>
                            <div class="info_user_home">
                                <div class="user_name">
                                    <div class="user_avatar">
                                                                                    <span>h</span>
                                                                            </div>
                                    <div class="avatar_name">
                                        <span class="phone_name" title="Hồ Ngọc Thảo My">Hồ Ngọc Thảo My</span>
                                                                                    <span class="phone_number " onclick="showPhoneV2('0909870029',this)"> 090987*** </span>
                                                                                </div>
                                </div>
                            </div>
                        </div>


                    </div>
                            </div>
        </div>
    </div>

    <div class="ssn_pw home_ad">
    </div>

    <div class="home_fixed home_r">
        
     <!-- Sosanhnha pc -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5866303118479016" data-ad-slot="4297353379" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
        </div>

</section>

</body>

</html>


