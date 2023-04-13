<?php
   include './config/config.php';
  session_start();
  if(isset($_GET['ID_BAIVIET'])){
    $ID_BAIVIET = $_GET['ID_BAIVIET'];
    //echo $ID_BAIVIET;
    //exit();
    $baiviet = "SELECT f.SDT,a.NGAYDANG, a.ID_BAIVIET,a.TIEUDE, a.GIOITHIEUBAIVIET, b.TENKHUTRO,b.LAT_TRO,b.LONG_TRO, e.TENXA, d.TENHUYEN, c.TENTINH, g.TENLOAIPHONG, g.SONGUOIOTOIDA, g.DIENTICH, p.TENPHONG, t.GIA, k.HINH, f.HOTEN, f.SDT, b.SONHA, l.TENTT
    from baiviet as a, khutro as b, tinh as c, huyen as d, xa as e, loaiphong as g, phong as p, giathuephong as t, hinh as k, chukhutro as f, trangthai as l
    where a.ID_KHUTRO = b.ID_KHUTRO 
    and a.STT = p.STT 
    and b.ID_CKT = f.ID_CKT 
    and b.ID_XA = e.ID_XA 
    and e.ID_HUYEN = d.ID_HUYEN 
    and d.ID_TINH = c.ID_TINH 
    and t.ID_KHUTRO = b.ID_KHUTRO 
    and t.ID_LP = g.ID_LP 
    and k.STT= p.STT 
    and p.ID_LP = g.ID_LP 
    and l.ID_TT= p.ID_TT
    AND a.ID_BAIVIET = '$ID_BAIVIET';";
    $baivietsql = mysqli_query($conn,$baiviet);
    $result =mysqli_fetch_assoc($baivietsql);
    $SDT = $result['SDT'];
    //echo $SDT;
    //exit();
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="js/js.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="image/home-v1.png"/>
         <link href="css/trogiup.css" rel="stylesheet" type="text/css" media="all"/>
         <link href="css/chitiet.css" rel="stylesheet" type="text/css" media="all"/>
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
        <title>Chi Tiết</title>
        <meta name="description" content="BingHouse - Website đăng,tim nhà trọ Cần Thơ mỗi ngày. Đăng tin mua bán UY TÍN, NHANH CHÓNG, AN TOÀN."/>
        <meta property="og:type" content="website"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
        <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
       
      <style>
       .place-card {
    background-color: white;
    border: 4px solid #ccc;
    padding: 10px;
    max-width: 300px;
    border-radius: 5px;
  }
  #map {
  position: absolute;
  top: 100px;
  bottom: 0;
  height: 500px;
  width:155%;
  z-index: 0;
  
}

.place-card {
  position: absolute;
  top: 100px;
  left: 10px;
  z-index: 1;
}
      </style>
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
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-md navbar-light">
       
        <div class="ssn_header" alt="">
        <a class="ssn_logo" title="binghouse" href="index.php">
            <img src="image/logo.png" alt="BingHouse">
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
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="aw__i1t7n4kh aw__i1t7n4kh--active"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 3.08366C6.17938 3.08366 3.08268 6.18036 3.08268 10.0003C3.08268 13.8203 6.17938 16.917 9.99935 16.917C13.8193 16.917 16.916 13.8203 16.916 10.0003C16.916 6.18036 13.8193 3.08366 9.99935 3.08366ZM1.91602 10.0003C1.91602 5.53602 5.53505 1.91699 9.99935 1.91699C14.4637 1.91699 18.0827 5.53602 18.0827 10.0003C18.0827 14.4646 14.4637 18.0837 9.99935 18.0837C5.53505 18.0837 1.91602 14.4646 1.91602 10.0003Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 6.83366C8.59562 6.83366 7.45768 7.9716 7.45768 9.37533C7.45768 10.779 8.59562 11.917 9.99935 11.917C11.4031 11.917 12.541 10.779 12.541 9.37533C12.541 7.9716 11.4031 6.83366 9.99935 6.83366ZM6.29102 9.37533C6.29102 7.32727 7.95129 5.66699 9.99935 5.66699C12.0474 5.66699 13.7077 7.32727 13.7077 9.37533C13.7077 11.4234 12.0474 13.0837 9.99935 13.0837C7.95129 13.0837 6.29102 11.4234 6.29102 9.37533Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0005 13.0837C9.06941 13.0837 8.15655 13.3415 7.36306 13.8285C6.56957 14.3156 5.92644 15.0128 5.50496 15.843C5.35912 16.1303 5.00802 16.2449 4.72075 16.0991C4.43349 15.9532 4.31884 15.6021 4.46469 15.3149C4.98369 14.2926 5.77564 13.434 6.75275 12.8342C7.72986 12.2345 8.85396 11.917 10.0005 11.917C11.1469 11.917 12.271 12.2345 13.2481 12.8342C14.2253 13.434 15.0172 14.2926 15.5362 15.3149C15.6821 15.6021 15.5674 15.9532 15.2801 16.0991C14.9929 16.2449 14.6418 16.1303 14.4959 15.843C14.0745 15.0128 13.4313 14.3156 12.6378 13.8285C11.8444 13.3415 10.9315 13.0837 10.0005 13.0837Z" fill="#222222"></path></svg>
               <a class="nav-link" href="#" data-toggle="dropdown">Tài khoản</a>
               <svg data-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="aw__d1xmuhl0" id="arrowDownB"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg>
               
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
              </li>
            </ul>
          </div>

        </nav>
      </div>
    </div>
  </div>
</div>

</div>
<div class="container">
   <div class="ct-detail adview styles_adviewVeh__sS7WB">
      <div class="row base">
         <div class="Styles_googleDfpAdViewTop__DsrUF text-center">
            <div></div>
         </div>
         <div class="row" style="width:100%;overflow:auto;display:flex;flex-direction:row;align-items:center;justify-content:space-between">
            <div class="col-sm-12">
               <div>
                  <div class="BreadCrumb_wrapperOverflow__Iycpy">
                     <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="BreadCrumb_breadcrumb__zGT1y ">
                        <li class="BreadCrumb_breadcrumbItem__M8Q4i BreadCrumb_link__KeNbI" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                           <meta itemprop="position" content="1">
                           <a itemprop="item" href="https://www.nhatot.com"><span itemprop="name">Nhà Tốt</span></a>
                        </li>
                       
                     </ol>
                     <i class="BreadCrumb_iconPrev__2wAMN false" tabindex="0" role="button" aria-label="Prev"></i><i class="BreadCrumb_iconNext__r0oRt BreadCrumb_iconNextActive__wem8y" tabindex="0" role="button" aria-label="Next"></i>
                  </div>
               </div>
            </div>
         </div>
         <div style="margin: 10px 0px;">
            <div></div>
         </div>
         <div class="col-md-8 ">
            <div class="DetailView_adviewCointainer__rdzwn">
               <div>
                  <div class="AdImage_adImageWrapper__HkN6D" style="background-image:url(https://static.chotot.com/storage/logo/svg/chotot-logo-text.svg);background-position:center center;background-repeat:no-repeat;background-color:#eee;background-size:50% auto">
                     <div>
                        <div class="AdImage_galleryPreview__RGawb" style="position: relative;">
                           <div class="AdImage_sliderImage__ddiFA">
                              <div class="AdImage_sliderWrapper___jIpt">
                                 <div class="AdImage_imageWrapper__j1z2m"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Cho thuê phòng full nội thất" role="presentation" src="https://cdn.chotot.com/JsEfXj0jSZDmNdLOnjjuLA0-enC_GvS8nKq9YJmhWXM/preset:view/plain/7c4be49f63e13a62560fb75eb4bcdbf1-2820419669975919907.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></div>
                              </div>
                           </div>
                           <span class="AdImage_imgPosition__PIaiL">1 / 10</span>
                        </div>
                        <div class="AdImage_gallerySlider__QeuHQ">
                           <div class="slick-slider sc-1nl301i-0 iCcejU AdImage_imageSlider__ICkDC slick-initialized" dir="ltr">
                              <button class="AdImage_button__ho9Jx AdImage_Prev__ciQdk AdImage_buttonGallery__if1rz" aria-label="Prev" tabindex="0" type="button"><i></i></button>
                              <div class="slick-list">
                                 <div class="slick-track" style="width: 1220px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                    <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="0" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Cho thuê phòng full nội thất" role="presentation" src="https://cdn.chotot.com/JsEfXj0jSZDmNdLOnjjuLA0-enC_GvS8nKq9YJmhWXM/preset:view/plain/7c4be49f63e13a62560fb75eb4bcdbf1-2820419669975919907.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></div>
                                       </div>
                                    </div>
                                    <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="1" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="https://cdn.chotot.com/KviX1y6P1lUlfHGxYQstar-4SXgMaaFBUu9knQEcTgg/preset:view/plain/cbdfe55df1eea7624cf0e20daafc6f7d-2820419674152815382.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="2" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="<?php echo $result['TIEUDE'] ?>" role="presentation" src="./ha_phong/<?php echo $result['HINH'] ?>" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="3" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="https://cdn.chotot.com/cupCUy1uARbMkq1XckabWyFiH7aNbFLwax2TKqZlhlM/preset:view/plain/08d8d2cb1b7ed7d09e5bad927b49a596-2820419672870568510.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="4" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="https://cdn.chotot.com/P-r5ZNvau7mOSh3csTYRc_pwJ3do6fy_3ygiHHDN_X0/preset:view/plain/3d853860c28f9d0a6c332e6c0397b3b2-2820419671258054921.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="5" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="https://cdn.chotot.com/2kOHcIbRYhqTBAIxI0Lys-4QwOkq5EPQY7gU0GcPL6g/preset:view/plain/3d74c57239e50b3c017ce1561bb35973-2820419674346466296.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="6" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="7" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="8" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="8" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-index="9" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" data-index="9" data-type="image" tabindex="-1" style="width: 100%; display: inline-block;">
                                             <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Cho thuê phòng full nội thất" role="presentation" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                <noscript></noscript>
                                             </span>
                                             <div class="AdImage_sliderCtaOverlay__3LSxM">
                                                <div class="AdImage_sliderCtaOverlayWrapper__6CQ9Q"><img alt="" src="https://static.chotot.com/storage/chotot-icons/svg/adview-cta-button.svg"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button class="AdImage_button__ho9Jx AdImage_Next__TX7EW AdImage_buttonGallery__if1rz" aria-label="Next" tabindex="0" type="button"><i></i></button>
                           </div>
                        </div>
                     </div>
                     <div class="AdImage_imageCaption__aUFNp">
                        <span class="AdImage_imageCaptionText__ScM56">
                           Tin<!-- --> cá nhân <!-- -->đăng <!-- -->9 giờ trước
                        </span>
                     </div>
                  </div>
               </div>
               <div class="DetailView_adviewPtyItem__V_sof">
                  <div class="AdDecriptionVeh_adDecriptionWrapper__bleBW">
                     <h1 class="AdDecriptionVeh_adTitle__vEuKD" itemprop="name">
                        <!-- --> <!-- --><?php echo $result['TIEUDE'] ?>
                     </h1>
                     <div class="AdDecriptionVeh_priceWrapper__y7Aj6">
                        <meta itemprop="position" content="1">
                        <div class="AdDecriptionVeh_adPrice__UTqQV" itemprop="price">
                           <span>
                              <div>
                                 <span class="AdDecriptionVeh_priceWrapper__y7Aj6 AdDecriptionVeh_priceWrapperVeh__mBdrn">
                                    <span class="AdDecriptionVeh_price__u_N83">
                                       <span itemprop="price">
                                       <?php echo number_format ($result['GIA']) .' VNĐ'?><!-- --> 
                                          <span class="AdDecriptionVeh_squareMetre__eG8lb">
                                             - <!-- --><?php echo $result['DIENTICH'] ?><!-- --> m<sup>2</sup>
                                          </span>
                                       </span>
                                       <span style="display:none" itemprop="priceCurrency">đ &nbsp;&nbsp;</span>
                                    </span>
                                    <div class="AdDecriptionVeh_actionWrapper__ijwfS AdDecriptionVeh_actionWrapperVeh__qvMzX">
                                       <div class="sc-i36vn2-1 gEmCbl">
                                          <button type="button">
                                          <button type="button" class="styles_btnShareSocial__ARzC2" id="share_social_btn" aria-haspopup="true" aria-expanded="false">
                                             <img src="https://static.chotot.com/storage/icons/svg/share-new.svg" alt="share icon">
                                             <span style="font-size: 12px;">
                                                <!--sse-->Chia sẻ<!--/sse-->
                                             </span>
                                          </button>
                                          <div class="sc-i36vn2-0 ieIOfc" aria-labelledby="share_social_btn" style="position: absolute; top: 0px; left: 0px; opacity: 0; pointer-events: none;">
                                             <div style="margin-bottom: 10px;"><span>Chia sẻ qua:</span><a class="sc-bdVaJa graDcs"><img alt="facebook" src="https://static.chotot.com.vn/storage/chotot-icons/svg/circle-facebook.svg" loading="lazy" height="40" width="40"></a><a class="sc-bdVaJa graDcs"><img alt="messenger" src="https://static.chotot.com.vn/storage/chotot-icons/svg/circle-messenger.svg" loading="lazy" height="40" width="40"></a><span class="sc-htpNat fBxqba"><a class="sc-bdVaJa graDcs"><img alt="copy" src="https://static.chotot.com.vn/storage/chotot-icons/svg/circle-copylink.svg" loading="lazy" height="40" width="40"></a></span></div>
                                          </div>
                                          </button>
                                       </div>
                                       <div class="SaveAd_saveAdWrapper___sBMh AdDecriptionVeh_saveAd__HXlG9 "><button id="btn_save_ad" type="button" class="SaveAd_btnSavedAd__jwoYd SaveAd_btnSavedAdVeh__IbhEh "><img height="20" width="20" src="https://static.chotot.com/storage/icons/saveAd/save-ad.svg" alt="like" loading="lazy"><span>Lưu tin</span></button></div>
                                    </div>
                                 </span>
                                 <div class="AdDecriptionVeh_date__SpYR1">
                                    <div class="col-xs-12 no-padding">
                                       <div class="media margin-top-05" style="display: flex; align-items: start;">
                                          <div class="media-left media-middle"><img class="AdParam_adParamIcon__m87Vj" alt="location" src="https://static.chotot.com/storage/icons/logos/ad-param/location.svg"></div>
                                          <div class="media-body media-middle AdParam_address__5wp1F AdParam_addressClickable__coDWA" role="button" tabindex="0"><span class="fz13">Hẻm 482 Đường Nơ Trang Long, Phường 13, Quận Bình Thạnh, Tp Hồ Chí Minh<span class="AdParam_addressClickableLoadMap__FLeKT" role="button" tabindex="0">Xem bản đồ<img alt="see project" src="https://static.chotot.com/storage/default_images/project/rightIcon.svg"></span></span></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="AdDecriptionVeh_date__SpYR1">
                                    <img src="https://static.chotot.com/storage/icons/svg/order_timer.svg" alt="location" width="20px">
                                    <span>
                                       Đăng <!-- -->9 giờ trước
                                    </span>
                                 </div>
                                 <div class="AdDecriptionVeh_date__SpYR1"></div>
                                 <div class="AdDecriptionVeh_date__SpYR1"><img src="https://static.chotot.com/storage/icons/svg/shield.svg" alt="location" width="20px" height="20px"><span>Tin đã được kiểm duyệt.</span><a class="AdDecriptionVeh_link__t_Y_n" href="https://trogiup.chotot.com/nguoi-ban/tai-sao-chotot-vn-duyet-tin-truoc-khi-dang/" style="margin-left:8px" target="_blank" rel="noreferrer nofollow">Tìm hiểu thêm</a></div>
                              </div>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="DetailView_adviewPtyItem__V_sof">
                  <div class="AdParam_adParamTitle__bU__w">Đặc điểm bất động sản</div>
                  <div class="AdParam_adParamContainerVeh__Vz4Zt">
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" alt="" src="https://static.chotot.com/storage/icons/logos/ad-param/ad_type.png"></div>
                           <div class="media-body media-middle" style="margin-top:40px; margin-left:10px"><span><span></span><span itemprop="ad_type" class="AdParam_adParamValue__IfaYa">Cho thuê</span></span></div>
                        </div>
                     </div>
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" alt="Tình trạng" src="https://static.chotot.com/storage/icons/logos/ad-param/condition_ad.png"></div>
                           <div class="media-body media-middle" style="margin-top:40px; margin-left:10px"><span><span>Tình trạng: </span><span itemprop="condition_ad" class="AdParam_adParamValue__IfaYa"><?php echo $result['TENTT'] ?></span></span></div>
                        </div>
                     </div>
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" alt="Diện tích" src="https://static.chotot.com/storage/icons/logos/ad-param/size.png"></div>
                           <div class="media-body media-middle" style="margin-top:40px; margin-left:10px"><span><span>Diện tích: </span><span itemprop="size" class="AdParam_adParamValue__IfaYa"><?php echo $result['DIENTICH'] ?> m²</span></span></div>
                        </div>
                     </div>
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" alt="Số tiền cọc" src="https://static.chotot.com/storage/icons/logos/ad-param/deposit.png"></div>
                           <div class="media-body media-middle" style="margin-top:40px; margin-left:10px"><span><span>Giá thuê: </span><span itemprop="deposit" class="AdParam_adParamValue__IfaYa"><?php echo number_format ($result['GIA']) .' VNĐ'?></span></span></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="DetailView_adviewPtyItem__V_sof">
                  <div class="d-lg-block styles_adBodyCollapse__1Xvk7">
                     <div class="styles_adBodyTitle__JrqDu">Mô tả chi tiết</div>
                     <p class="styles_adBody__vGW74" itemprop="description">PPHome. Chính chủ cho thuê . có thể dọn vào ở ngay  ( GIới hạn 2 người ở ) Hiện tại còn 5 căn trống, Nhanh tay còn kịp nào mn ơii
                        📌Giá phòng từ 4.000.000 tới 5.200.000 ( chưa tính chi phí điện nước )
                        + đầy đủ nội thất, tủ quần áo, giường ngủ, máy lạnh, bếp, tủ lạnh ( CAM KẾT PHÒNG NHƯ HÌNH). Phòng có ban công mát mẻ
                        + nhà trang bị máy giặt , máy sấy, camera , khóa vân tay, khóa cửa 2 lớp, ko thu phí gửi xe
                        📍 cách 1km tới các trường đại học như ĐH hutech, Đh gtvt, Đh Ngoại Thương, DH văn Lang. Cách sân bay, bến xe miền đông 5f đi xe và nhiều tiện ích xuung quanh.
                        ******** Hiện PPHome có các phòng trống ở 2 vị trí : Đường Nguyễn Cửu Vân ( Gần cầu thị nghè ) và Nơ Trang Long . Đều ở quận Bình Thạnh*****
                        ___INb mình để có thêm nhiều hình ảnh phòng hơn nhé 
                        ###MTG- MG
                     </p>
                  </div>
                  <button type="button" class="styles_button__SVZnw">
                     Xem thêm
                     <svg class="styles_isCollapse__aDymR" xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18">
                        <g fill="none" fill-rule="evenodd">
                           <path stroke="#38699F" stroke-linecap="round" stroke-width="1.5" d="M1.125 3L6.75 8 1.125 13" transform="translate(1 1)"></path>
                           <path stroke="#FFF" stroke-width=".1" d="M0 0H9V16H0z" opacity=".01" transform="translate(1 1)"></path>
                        </g>
                     </svg>
                  </button>
               </div>
               <div class="DetailView_adviewPtyItem__V_sof">
                  <div>
                     <div class="col-xs-12 no-padding">
                        <div class="AdParam_adMapImage__Ysu7w">
                           <h2>Địa điểm bất động sản</h2>
                           

                           <div class="place-card place-card-large">
  <h3 style="text-align: center;"><?php echo $result["TENKHUTRO"]; ?></h3>
  <p><?php echo $result["SONHA"]; ?> <?php echo $result["TENXA"]; ?> <?php echo $result["TENHUYEN"]; ?> <?php echo $result["TENTINH"]; ?></p>
</div>



        <div id='map'></div>
        <script>
   
   mapboxgl.accessToken = 'pk.eyJ1IjoiaHV5bmh0aHV5IiwiYSI6ImNsZnRjcjYyczAwZXIzY215N3gwbzFzam4ifQ.Ieo0w9hgSLSF_Pt4s89EgQ';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v12', // style URL
            //center: [105.7664918,10.0279603], // starting position [lng, lat]
            center: [<?php echo $result["LONG_TRO"]; ?>,<?php echo $result["LAT_TRO"]; ?>],
            //pitch: 60,
//bearing: -60,
zoom: 15, hash:true
        });
const data = {
    "type": "FeatureCollection",
    "features": [
      {
        type: "Feature",
        geometry: {
          coordinates: [
            //105.773318,10.029433,
             //105.77061370522297,10.029943222691958,
             <?php echo $result["LONG_TRO"]; ?>,<?php echo $result["LAT_TRO"]; ?>,
            
          ],
          type:'Point'
        },
        properties: {
          'description': " <?php echo $result["TENKHUTRO"]; ?>"
        }
      },
    ]
  }
  var marker = new mapboxgl.Marker()
  .setLngLat([<?php echo $result["LONG_TRO"]; ?>,<?php echo $result["LAT_TRO"]; ?>])
  .addTo(map);


    
   
   </script>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="d-none">
                  <div class="Styles_reportWrapper__74GS_">
                     <div class="Styles_reportBtn__izL5E"><button type="button" id="report-bad-ad-btn" class="btn btn-default btn-xs Styles_reportBad__4g9zg">Báo tin không hợp lệ</button><button type="button" class="btn btn-default btn-xs Styles_reportBad__4g9zg">Báo tin đã bán</button><a href="https://www.chotot.com/dang-tin?category=1050" class="Styles_insertSimilarAd__DHfAJ" rel="nofollow noreferrer" target="_blank">Đăng nhanh - Bán gọn</a></div>
                     <div class="Styles_buyerProtect__5zjc4">
                        <div class="sc-dnqmqq fllTxs">
                           <img src="https://static.chotot.com/storage/marketplace/shield-iconx4.png" alt="mua bán an toàn" class="sc-iwsKbI cIGKHu">
                           <div class="sc-gZMcBi mZNJv"><em>Tin đăng này đã được kiểm duyệt. Nếu gặp vấn đề, vui lòng báo cáo tin đăng hoặc liên hệ CSKH để được trợ giúp.&nbsp;<a target="_blank" rel="noopener" href="http://trogiup.chotot.com/ban-hang-tai-chotot-vn/kiem-duyet-tin/tai-sao-chotot-vn-duyet-tin-truoc-khi-dang/?utm_source=chotot&amp;utm_medium=user_protection&amp;utm_campaign=user_protection_ad_view">Xem thêm ››</a></em></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 no-padding dtView">
            <div>
               <div></div>
               <div class="" style="">
                  <div class="d-lg-block d-none" style="background-color: white; padding-bottom: 10px;">
                     <div class="SellerProfile_profileWrapper__ubLwW  SellerProfile_profileWrapperVeh__BVDOo" itemprop="seller" itemscope="" itemtype="http://schema.org/Person">
                        <a class="SellerProfile_sellerWrapperVeh__UFHlO" target="_blank" rel="nofollow" href="https://www.chotot.com/user/81718f0cca987f2d57b938fd0343d37e#xtatc=INT-10-[Adview]">
                           <div role="presentation">
                              <div class="img-thumbnail img-circle Avatar_imageWrapper__6tGNZ Avatar_defaultSize__a_WTh"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2746%27%20height=%2746%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="https://cdn.chotot.com/uac2/24856151" decoding="async" data-nimg="intrinsic" class="img-circle Avatar_image__HiPeb Avatar_defaultSize__a_WTh" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></div>
                           </div>
                           <div class="SellerProfile_nameBounder__btDeS" role="button" tabindex="0">
                              <div class="SellerProfile_flexDiv__IEgQl">
                                 <div class="SellerProfile_nameDivVeh__vE94K"><b role="presentation" style="margin-right: 5px; font-size: 14px;">Nguyễn Hồ Phước </b></div>
                                 <button type="button" class="SellerProfile_secondaryButtonPty__DN1Sa">Xem trang<img src="https://static.chotot.com/storage/icons/svg/next-orange.svg" alt=">"></button>
                              </div>
                              <div class="SellerProfile_statusOnlineDivVeh__kgmx4">
                                 <div class="SellerProfile_shopIconWrapper__mXmWK" role="presentation"><img src="https://static.chotot.com/storage/default_images/pty/private-pty-icon.svg" alt="https://static.chotot.com/storage/default_images/pty/private-pty-icon.svg" height="16px" width="16px"></div>
                                 &nbsp;&nbsp;Cá nhân
                              </div>
                              <div class="SellerProfile_statusOnlineDivVeh__kgmx4">
                                 <div class="SellerProfile_onlineBullet__i5v8A">•</div>
                                 &nbsp;&nbsp;Đang hoạt động
                              </div>
                           </div>
                        </a>
                        <div class="SellerProfile_inforWrapper__KXg71"></div>
                     </div>
                  </div>
                  <div style="background-color: white;">
                     <div class="IntersectBox " style="min-height: 100px;">
                        <div class="ChatTemplate_chatTempWrapper__uAELZ">
                           <div class="ChatTemplate_titleChatTemp__IWGIA ChatTemplate_titleChatTempVeh__CcvPa">
                              Liên hệ với người bán
                              <div class="ChatTemplate_inforItem__CoFv1">
                                 <div class="ChatTemplate_inforText__sbLZ7"><span class="">Phản hồi:&nbsp;</span><span>93%</span></div>
                              </div>
                           </div>
                           <div class="ChatTemplate_templateItemWrapper__AP8xV">
                              <ul class="ChatTemplate_templateMessage__a_aks">
                                 <li class="ChatTemplate_templateItem__7p1c6 ChatTemplate_templateItemVeh__rCiXd" role="menuitem">Phòng này còn cho thuê không ạ?</li>
                                 <li class="ChatTemplate_templateItem__7p1c6 ChatTemplate_templateItemVeh__rCiXd" role="menuitem">Giờ giấc tự do đúng không ạ?</li>
                                 <li class="ChatTemplate_templateItem__7p1c6 ChatTemplate_templateItemVeh__rCiXd" role="menuitem">Có nấu ăn trong phòng được không ạ?</li>
                                 <li class="ChatTemplate_templateItem__7p1c6 ChatTemplate_templateItemVeh__rCiXd" role="menuitem">Phòng ở được mấy người ạ?</li>
                                 <li class="ChatTemplate_templateItem__7p1c6 ChatTemplate_templateItemVeh__rCiXd" role="menuitem">Thời gian thuê tối đa là bao lâu?</li>
                              </ul>
                           </div>
                        </div>
                        <div class="LeadButton_wrapperLeadButtonDesktop__SVKE8" style="padding: 8px 12px 4px;">
                           <div class="LeadButton_chatDesktopButton__HSQyg"><a href="https://chat.zalo.me/?phone=<?php echo $SDT?>" id="linkzalo" target="_blank" rel="noopener noreferrer" class="btn LeadButton_buttonOnlyChatDesktop__PzaRw" rel="nofollow"><span class="text-success"><span>CHAT VỚI NGƯỜI BÁN</span></span></a></div>
                           <div class="LeadButton_onlyChatDesciption__JsKi4">Tin đăng được người bán ẩn số điện thoại</div>
                        </div>
                        <div class="LeadButton_wrapperLeadButtonMobileHidePhone__Ei0ME"><a id="chat_btn" href="https://chat.chotot.com/chatroom/join/MjQ4NTYxNTF8MTA1MzkyODA2" class="btn LeadButton_chatButton__E_aMM" rel="nofollow">CHAT VỚI NGƯỜI BÁN</a></div>
                     </div>
                  </div>
                  <div class="d-lg-block d-none">
                     <div class="styles_helpboxWrapper__97D4i">
                        <div class="styles_helpboxItem__oJx4l"><img src="https://storage.googleapis.com/static-chotot-com/storage/chotot-icons/svg/support.svg" alt="Cần trợ giúp"><a href="https://trogiup.chotot.com/" rel="noopener noreferrer">Cần trợ giúp</a></div>
                        <div class="styles_helpboxItem__oJx4l"><img src="https://storage.googleapis.com/static-chotot-com/storage/chotot-icons/svg/warning_grey.svg" alt="Báo cáo tin đăng này"><button type="button" class="styles_buttonReport__hhOIr">Báo cáo tin đăng này</button></div>
                     </div>
                     <div class="Styles_rightHandSiteAdView__O90bj">
                        <div></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  
</div>
</body>
<script>
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        document.getElementById("linkzalo").href = "https://zalo.me/<?php $result['SDT'] ?>";
    }
</script>
</html>


