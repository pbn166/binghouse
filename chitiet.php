<?php
  session_start();
  if(isset($_GET['ID_BAIVIET'])){
    $ID_BAIVIET = $_GET['ID_BAIVIET'];
    echo $ID_BAIVIET;
    exit();
    
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
      <style>
        .page{
            width: 100%;
            margin: 0 auto;
            padding: auto;
            display: grid;
            grid-template-columns: auto auto;

        }
        .img-tro{
            width: 50%;
            position: relative;
            margin: auto;
            float: left;
            transition: transform 2s;
            
        }
        .img-tro:hover{
            transform: scale(1.5);
        }
        .thongtinchutro{
            margin-left: 70px;
            border: 1px groove slategray;
            width: 80%;
            height: 400px;
            float: right: ;;
            /* text-align: center; */
            border-radius: 5px;
            box-shadow: 3px 3px 3px 3px #ddd ;
        }
        h2{
            margin-top: 20px;
            text-align: center;
        }
        h3{
    
            font-weight: bold;
            margin-left: 10px;
        }
        .detail{
            width: 90%;
            height: 30px;
            margin-left: 5%;
            margin-top: 10px;
            background-color: #005b9c;
            border: 1px solid #005b9c;
            border-radius: 5px;
            transition: transform 0.5s;
            font-size: 20px;
            /* text-align: center; */
             
        }
        .detail:hover{
            transform: scale(1.5);
        }
        .ttchutro{
            border: 1px double;
            width: 90%;
            height: 30px;
            margin-left: 5%;
            margin-top: 25px;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 20px;
            /* text-align: center; */
        }
        .ttchutro:hover{
            background-color: #005b9c;
            color: #fff;
        }
        .diachi{
            border: 1px double;
            width: 90%;
            height: 90px;
            margin-left: 5%;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 20px;
            text-align: center;
        }
        .diachi:hover{
            background-color: #005b9c;
            color: #fff;
        }
        .ct{
            border: 1px double;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 20px;
        }
        .large {
            width: 175px; height: 175px;
            position: absolute;
            border-radius: 100%;
            /*Multiple box shadows to achieve the glass effect*/
            box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85),
            0 0 7px 7px rgba(0, 0, 0, 0.25),
            inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
            /*Lets load up the large image first*/
            background: url('iphone.jpg') no-repeat;
            /*hide the glass by default*/
            display: none;
            }
            .small { display: block; }

            .detail-v2-user-info {
              border-radius: 5px;
              box-shadow: 0 0 6px 0 hsla(0,0%,87%,.89);
              margin-bottom: 20px;
              margin-top: 10px;
              padding: 15px 10px;
          }
          .detail-v2-user-info .main-info {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .detail-v2-user-info .user-options {
          display: flex;
          flex-direction: column;
          margin-top: 15px;
      }
      .detail-v2-user-info .main-info .picture {
        border: 1px solid #f1f1f1;
        border-radius: 50%;
        height: 50px;
        width: 50px;
      }
      .detail-v2-user-info .main-info .show-page {
        color: #333;
        font-size: 14px;
        text-decoration: underline;
      }
        .detail-v2-user-info .user-options .button.btn-phone, .detail-v2-user-info .user-options .button:hover {
        background-color: #005b9c;
          color: #fff;
      }

      .detail-v2-user-info .user-options .button {
          background: #fff;
          border-color: #f1f1f1;
          color: #666;
          font-weight: 600;
          padding: 10px 5px;
      }
      .detail-v2-user-info .user-options .button i {
        margin-right: 5px;
      }
      i {
        font-style: italic;
      }
      .detail-v2-user-info .user-options .btn-chat {
        margin-bottom: 10px;
      }
      .detail-v2-user-info .user-options .btn-chat {
        margin-bottom: 10px;
      }
      .type_content .home_filter {
        margin-left: 16px;
        padding-top: 12px;
        width: 225px;
      }
      .home_filter {
        padding: 0;
      }
      .type_content {
          grid-column-gap: 24px;
          display: flex;
          grid-template-columns: 1fr 225px;
          max-width: 1000px;
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

<div class="my-4 py-4">
</div>
<div class="ssn_pw_filter" >
    <h2 style="color: #005b9c; font-weight: bold; " >CHI TIẾT PHÒNG</h2>
    <div class="page" style ="width: 100%;" >
        <div class="img-tro" >
        <div class="large"></div>
            <div>
                <img class="small" src="./image/home.png" alt="">
            </div>
        </div>
       
          <div class="home_filter" style="height: auto !important;">
            <div class="detail-v2-user-info">
            <div class="main-info">
            <img alt="Đặng Thị Huệ" src="https://connect.sosanhnha.com/avata.php?id=634339" class="picture">
            <small>Được đăng bởi</small>
            <div class="username">
            Đặng Thị Huệ
            </div>
              <a href="/p/nha-dat-khanh-hoa-gia-re-id2173" title="Nhà đất Khánh Hòa GÍA RẺ" class="show-page">
            Xem chuyên trang
            </a>
              </div>
            <div class="user-options">
              <button class="btn-phone button " onclick="showPhone('0918849696',null)">
            <i class="mcon-phone "></i> <span class=" p_0918849696">0918849 *** Hiện số</span>
            </button>
              <a href="mailto:huedthi321@gmail.com" class="btn-email button">
            <i class="mcon-email"></i> huedthi321@gmail.com
            </a>
              <button class="btn-chat button" onclick="CreateChat({&quot;to_id&quot;:&quot;634339&quot;,&quot;product_detail&quot;:{&quot;id&quot;:&quot;24614100&quot;,&quot;url&quot;:&quot;https:\/\/sosanhnha.com\/gia-qua-re-nha-mat-tien-dien-tich-lon-120m2-duong-lam-son-gia-chi-15tr-thang-cla18xX5R&quot;,&quot;title&quot;:&quot;[ GI\u00c1 QU\u00c1 R\u1eba ] NH\u00c0 M\u1eb6T TI\u1ec0N DI\u1ec6N T\u00cdCH L\u1edaN 120M2 \u0110\u01af\u1edcNG LAM S\u01a0N  GI\u00c1 CH\u1ec8 15TR\/ TH\u00c1NG&quot;,&quot;acreage&quot;:&quot;120 m\u00b2&quot;,&quot;price&quot;:&quot;15 tri\u1ec7u\/th\u00e1ng&quot;,&quot;picture&quot;:&quot;https:\/\/media.sosanhnha.com\/webp\/150x150\/2023\/03\/1679972584-tyd.jpg&quot;}})">
            <i class="mcon-chat"></i> Chat với người đăng tin
            </button>
              <button class="btn-chat button" onclick="openRequireContact()">
            Yêu cầu liên hệ lại
            </button>
              </div>

            </div>
            </div>


<!-- lightgallery plugins -->


 <!-- Swiper JS -->
 <script src="/assets/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
 <script>
 var swiper2_config = {
 loop: true,
 spaceBetween: 10,
 navigation: {
 nextEl: ".swiper-button-next",
 prevEl: ".swiper-button-prev",
 },
 pagination: {
 el: ".swiper-pagination",
 type: "fraction",
 }
 };
  var swiper = new Swiper(".mySwiper", {
 loop: false,
 spaceBetween: 10,
 slidesPerView: 6,
 freeMode: true,
 watchSlidesProgress: true,
 });

 swiper2_config.thumbs = {
 swiper: swiper,
 };

 
 var swiper2 = new Swiper(".mySwiper2", swiper2_config);
 </script>




 <script>
 var status_comment = {loading: false, next_page: true, page: 2};

 function getComments(page = 1) {
 var list_comments = $(".list-comment");
 if (status_comment.loading) return false;
 status_comment.loading = true;
 $.ajax({
 url: "https://sosanhnha.com/api/v2/comments?fields=content,date,star,user_name&where=cla_id+24614100&page=" + page,
 }).done(function (data) {
 status_comment.loading = false;
 var html_list = '';
 if (data.data.comments.length < 30) {
 $('.show-more-comments').hide();
 status_comment.next_page = false;
 }
 status_comment.page = data.data.current_page + 1;
 data.data.comments.forEach(function (item) {
 html_list += renderComment(item);
 });
 if (data.data.comments.length == 0) {
 $(".not-comments").css('display', 'block');
 }
 list_comments.append(html_list);
 });
 }

 function renderComment(item) {
 var html_return = '';
 var html_star = '';
 for (x = 1; x <= 5; x++) {
 html_star += (x <= item.star ? '<i class="mcon-star_full active"></i>' : '<i class="mcon-star_full"></i>');
 }
 html_return += '   <div class="item-comment">' +
 '                    <div class="des-comment">' +
 '                        <div class="user-avata">' + item.user_name.charAt(0) +
 '                        </div>' +
 '                        <div class="info-user">' +
 '                            <div class="user-name"> ' + item.user_name + '</div>' +
 '                            <div class="rating_user">' +
 '                                <div class="star">' + html_star +
 '                                </div>' +
 '                                <span class="comment-date">' + item.date + '</span>' +
 '                            </div>' +
 '                        </div>' +
 '                    </div>' +
 '                    <div class="comment-content">' + (typeof item.content != "undefined" ? item.content : '') + '</div>' +
 '                </div>';
 return html_return;
 }

 function showMoreComments() {
 if (!status_comment.loading && !status_comment.next_page) {
 $('.show-more-comments').hide();
 } else {
 getComments(status_comment.page);
 }
 }
 </script>



 </div>


</div>
<div class="modal" id="form-user-contact">
 <!-- Modal content -->
 <div class="modal-content">
 <div class="modal-header ">
 <div class="box-title">
 Yêu cầu liên hệ
 </div>
 <span class="close" onclick="closeRequireContact()">×</span>
 </div>
 <div class="modal-body">
 <form class="form-require" action="#" onsubmit="sendContact()">
 <div class="form-group">
 <input class="form-control" required="" autocomplete="off" name="name" type="text" value="thúy tiên" placeholder="Nhập tên của bạn">
 </div>
 <div class="form-group">
 <input class="form-control" required="" autocomplete="off" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" type="tel" placeholder="Nhập số điện thoại" value="">
 </div>
 <div class="form-group">
 <textarea name="description" style="resize: none" placeholder="Nhập nội dung">Tôi quan tâm đến bất động sản này.</textarea>
 </div>
 </form>

 </div>
 <div class="modal-footer">
 <button class="btn btn-primary btn-sm" onclick="sendContact()">Gửi yêu cầu</button>
 <button class="btn btn-default btn-sm" onclick="closeRequireContact()">Đóng</button>
 </div>
 </div>
</div>


<script>

 var data_contact = {"secret_key":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7Imd1ZXN0X2lkIjoiMTU0MTQxOTE0NyIsImNsYV9pZCI6IjI0NjE0MTAwIiwidXNlcl9pZCI6IjY3MDI5MSJ9LCJpYXQiOjE2ODA1Mjc4OTIsImV4cCI6MTY4MDUzODY5Mn0.fT6lyR3l54Vz4Q84arus6pLaXNi2TO-kdKEf1VJuJjQ"};

 var check_classified = true;
  check_classified =  true;
 
 function openRequireContact() {
 if(check_classified==false){
 Swal.fire(
 'Fail!',
 'Không thể gửi yêu cầu cho tin của bạn!',
 'warning'
 )
 return;
 }
 $("#form-user-contact").show();
 }

 function closeRequireContact() {
 $("#form-user-contact").hide();
 }

 function sendContact() {
 var name = document.querySelector("#form-user-contact input[name='name']").value;
 var phone = document.querySelector("#form-user-contact input[name='phone']").value;
 var description = document.querySelector("#form-user-contact textarea[name='description']").value;
 data_contact.name = name;
 data_contact.user_phone = phone;
 data_contact.description = description;
 $.ajax({
 url: '/api/v2/user-contacts/create-require',
 method: 'post',
 data: data_contact
 }).done(function (data){
 console.log(data);
 closeRequireContact();
 Swal.fire(
 'Success!',
 'Đã gửi yêu cầu!',
 'success'
 ).then(function(){
 window.location.reload();
 })
 }).fail(function( jqXHR, textStatus, errorThrown ) {
 console.log('textStatus',textStatus);
 console.log('errorThrown',errorThrown);
 console.log('jqXHR',jqXHR);
 closeRequireContact();
 Swal.fire(
 'Fail!',
 'Gửi yêu cầu không thành công!',
 'error'
 ).then(function(){
 window.location.reload();
 })
 });
 return false;
 }
</script>
 <link rel="stylesheet" href="/assets/leaflet/leaflet.css" crossorigin="">
 <script src="/assets/leaflet/leaflet.js" crossorigin=""></script>

 <script>

 function setIconMapMask(path, width = 30, height = 35) {
 return L.icon({
 iconUrl: "/385" + '/assets/images/png/' + path,
 iconSize: [width],
 })
 }
 var map_marker = [];
 var map = null;
 var icon_marks = null;
 var locations_near = {"3":[{"distance":0.4791265133701488,"loc_id":3185538,"cat_type":3,"name":"Moon Clothes","address":"Ng\u00f4 Gia T\u1ef1, T\u00e2n L\u1eadp, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1871389,"latitude":12.2397014,"slug":"moon-clothes-Wo1yV"},{"distance":0.5843669450393415,"loc_id":3310229,"cat_type":3,"name":"Ch\u1ee3 \u0110\u1ed3ng Nai, Nha Trang","address":"76 L\u00ea H\u1ed3ng Phong, Ph\u01b0\u1edbc T\u00e2n, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1808266,"latitude":12.2377604,"slug":"ch-ng-nai-nha-trang-a7GNm"},{"distance":1.5340671186552242,"loc_id":2020521,"cat_type":3,"name":"Shop Hoa T\u01b0\u01a1i Nha Trang","address":"2 L\u00ea H\u1ed3ng Phong, Ph\u01b0\u1edbc H\u1ea3i, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1815417,"latitude":12.2487899,"slug":"shop-hoa-ti-nha-trang-VEk2q"},{"distance":2.7209667286017294,"loc_id":1385369,"cat_type":3,"name":"Ch\u1ee3 H\u1ea3i S\u1ea3n","address":"L\u00ea Thanh Ngh\u1ecb, V\u0129nh Ho\u00e0, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.2007633,"latitude":12.2160414,"slug":"ch-hi-sn-lGWx2"},{"distance":3.9187503797066396,"loc_id":3815176,"cat_type":3,"name":"X\u01b0\u1edfng N\u01b0\u1edbc \u0110\u00e1 Minh D\u0169ng","address":"V\u0129nh Ng\u1ecdc, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.166027,"latitude":12.2651315,"slug":"xng-nc-minh-dng-GAqxNG"},{"distance":3.9455673732282697,"loc_id":3223411,"cat_type":3,"name":"H\u1ea3i S\u1ea3n Kh\u00f4:\u00dat Kha","address":"C\u1ea7u B\u00e8, V\u0129nh Th\u1ea1nh, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1577822,"latitude":12.2582637,"slug":"hi-sn-kh-t-kha-6pdoV"},{"distance":5.102299365534937,"loc_id":3798651,"cat_type":3,"name":"D\u1ecbch V\u1ee5 Internet D-D","address":"51 \u0110. B\u1eafc S\u01a1n, V\u0129nh H\u1ea3i, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.202027,"latitude":12.2786546,"slug":"dch-v-internet-d-d-9YzW80"},{"distance":6.077996185884456,"loc_id":1386209,"cat_type":3,"name":"Ch\u1ee3 V\u0129nh Ph\u01b0\u01a1ng","address":"40A, V\u0129nh Ph\u01b0\u01a1ng, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1473745,"latitude":12.2754,"slug":"ch-vnh-phng-gG735"},{"distance":7.593463107800441,"loc_id":3253283,"cat_type":3,"name":"Si\u00eau th\u1ecb M\u1eb9 v\u00e0 B\u00e9","address":"\u0110\u01b0\u1eddng \u0110\u1ec7, Nha Trang, Kh\u00e1nh H\u00f2a 57100","longitude":109.213742,"latitude":12.2981862,"slug":"siu-th-m-v-b-43x4b"},{"distance":8.071424275532364,"loc_id":3953604,"cat_type":3,"name":"C\u00e0 Ph\u00ea Ph\u01b0\u1ee3ng H\u1ed3ng","address":"\u0110. 23 Th\u00e1ng 10, Di\u00ean An, Di\u00ean Kh\u00e1nh, Kh\u00e1nh H\u00f2a","longitude":109.1134334,"latitude":12.2522573,"slug":"c-ph-phng-hng-RlgBP4"}],"2":[{"distance":0.5055930323254115,"loc_id":1369893,"cat_type":2,"name":"Nh\u00e0 Thu\u1ed1c Nh\u00e2n T\u00e2m","address":"158 L\u00ea H\u1ed3ng Phong, Ph\u01b0\u1edbc Ho\u00e0, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1812692,"latitude":12.2343446,"slug":"nh-thuc-nhn-tm-EJr3A"},{"distance":1.5312401235223316,"loc_id":1367250,"cat_type":2,"name":"Khoa Ung b\u01b0\u1edbu, Bv \u0111a khoa Kh\u00e1nh H\u00f2a","address":"Khu E - Nh\u00e0 K\u1ef9 thu\u1eadt, 19 Yersin, L\u1ed9c Th\u1ecd, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1913889,"latitude":12.2482311,"slug":"khoa-ung-bu-bv-a-khoa-khnh-ha-5yKPb"},{"distance":1.7835839712324648,"loc_id":1377416,"cat_type":2,"name":"Ph\u00f2ng Kh\u00e1m Da Li\u1ec5u V\u00e0 N\u1ed9i Nhi - B\u00e1c S\u0129 Tr\u1ea7n Nh\u01b0 H\u00e2n","address":"14 L\u00fd Th\u00e1nh T\u00f4n, V\u1ea1n Th\u1ea1nh, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.191326,"latitude":12.2506983,"slug":"phng-khm-da-liu-v-ni-nhi-bc-s-trn-nh-hn-A2Kpk"},{"distance":1.8024035533805016,"loc_id":1368819,"cat_type":2,"name":"Nh\u00e0 Thu\u1ed1c Kh\u00e1nh Qu\u1ef3nh","address":"80 \u0110. 23 Th\u00e1ng 10, Ph\u01b0\u01a1ng s\u01a1n, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1791165,"latitude":12.2504794,"slug":"nh-thuc-khnh-qunh-7d0KX"},{"distance":2.092288487014959,"loc_id":1369914,"cat_type":2,"name":"Medic Nha Trang Pharmacy","address":"23 Hai Th\u00e1ng T\u01b0, Ph\u01b0\u1eddng V\u1ea1n Th\u1eafng, Th\u00e0nh Ph\u1ed1 Nha Trang, T\u1ec9nh Kh\u00e1nh H\u00f2a, V\u1ea1n Th\u1ea1nh, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1894046,"latitude":12.2540888,"slug":"medic-nha-trang-pharmacy-Pa3Pw"},{"distance":3.2609407009806577,"loc_id":1374382,"cat_type":2,"name":"Qu\u1ea7y Thu\u1ed1c T\u00e2y S\u1ed1 30","address":"6 H\u01b0\u01a1ng L\u1ed9 45, Ph\u01b0\u1eddng Ng\u1ecdc Hi\u1ec7p, Nha Trang, Kh\u00e1nh H\u00f2a.","longitude":109.1720522,"latitude":12.2617176,"slug":"quy-thuc-ty-s-30-WmKEr"},{"distance":3.384114944891273,"loc_id":1369251,"cat_type":2,"name":"Traphaco Kh\u00e1nh Ho\u00e0","address":"V\u0129nh \u0110i\u1ec1m Trung, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1647793,"latitude":12.2581302,"slug":"traphaco-khnh-ho-9327Z"},{"distance":4.118070565639955,"loc_id":1369946,"cat_type":2,"name":"Qu\u1ea7y Thu\u1ed1c Thanh Thanh","address":"T\u00f4n \u0110\u1ee9c Th\u1eafng, Ph\u01b0\u1edbc \u0110\u1ed3ng, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1936624,"latitude":12.1993988,"slug":"quy-thuc-thanh-thanh-YrWaB"},{"distance":4.432840174381433,"loc_id":1375108,"cat_type":2,"name":"Ph\u00f2ng Ch\u1ea9n Tr\u1ecb Y H\u1ecdc Th\u1ecd H\u00f2a","address":"\u0110\u01b0\u1eddng 23\/10, V\u0129nh Th\u1ea1nh, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1514475,"latitude":12.2572166,"slug":"phng-chn-tr-y-hc-th-ha-yqylR"},{"distance":5.0833092363531085,"loc_id":1369236,"cat_type":2,"name":"Ba Cao Traditional Medicine Shop","address":"Km5, Street 23\/10, Vinh Thanh Commune, Nha Trang City, Khanh Hoa Province, V\u0129nh Th\u1ea1nh, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1449929,"latitude":12.2580828,"slug":"ba-cao-traditional-medicine-shop-kG38A"}],"1":[{"distance":0.6299199856013078,"loc_id":1381767,"cat_type":1,"name":"Ngo\u1ea1i Ng\u1eef Let's Start","address":"174 Ng\u00f4 Gia T\u1ef1, Ph\u01b0\u1edbc Ti\u1ebfn, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1879051,"latitude":12.24087,"slug":"ngoi-ng-let-s-start-ZmYk9"},{"distance":0.8756862849990408,"loc_id":1382378,"cat_type":1,"name":"Tr\u01b0\u1eddng Anh Ng\u1eef Qu\u1ed1c T\u1ebf C\u1ea7u V\u1ed3ng - Rainbow Nha trang","address":"20 Chi L\u0103ng, Ph\u01b0\u1edbc T\u00e2n, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1842566,"latitude":12.2433578,"slug":"trng-anh-ng-quc-t-cu-vng-rainbow-nha-trang-DJwqM"},{"distance":0.9339164275333746,"loc_id":1375564,"cat_type":1,"name":"Trung T\u00e2m Y T\u1ebf Tp Nha Trang","address":"3A Chi L\u0103ng, Ph\u01b0\u1edbc T\u00e2n, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1850696,"latitude":12.2439901,"slug":"trung-tm-y-t-tp-nha-trang-mQK5a"},{"distance":1.203660228094254,"loc_id":1383536,"cat_type":1,"name":"\u0110\u1ed3ng H\u1ed3 \u0110\u1ecbnh V\u1ecb Tr\u1ebb Em","address":"17 L\u00ea Th\u00e1nh T\u00f4n, L\u1ed9c Th\u1ecd, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1930448,"latitude":12.2437509,"slug":"ng-h-nh-v-tr-em-kG04A"},{"distance":2.243145980672109,"loc_id":1382360,"cat_type":1,"name":"My School","address":"72 Ho\u00e0ng Di\u1ec7u, V\u0129nh Ho\u00e0, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1992282,"latitude":12.2203475,"slug":"my-school-A20PY"},{"distance":2.2542819347275196,"loc_id":1382341,"cat_type":1,"name":"s\u1edf g\u0111t","address":"Khu Li\u00ean c\u01a1 2, H\u00e0n Thuy\u00ean, X\u01b0\u01a1ng Hu\u00e2n, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1946578,"latitude":12.25392,"slug":"s-gt-jGJLR"},{"distance":3.4158037478207652,"loc_id":1379223,"cat_type":1,"name":"Trung T\u00e2m Av","address":"562 \u0110. 23 Th\u00e1ng 10, V\u0129nh Hi\u1ec7p, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1617613,"latitude":12.2554858,"slug":"trung-tm-av-Zm5By"},{"distance":4.040688182641767,"loc_id":2879028,"cat_type":1,"name":"M\u1ea7m Non 123","address":"V\u0129nh Ng\u1ecdc, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1624807,"latitude":12.2639737,"slug":"mm-non-123-0N1a0"},{"distance":4.531075599434566,"loc_id":1382446,"cat_type":1,"name":"Tr\u01b0\u1eddng Trung C\u1ea5p K\u1ef9 Thu\u1eadt Mi\u1ec1n Trung","address":"16 Tr\u1ea7n Ph\u00fa, C\u1ea7u \u0110\u00e1, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.2147891,"latitude":12.206386,"slug":"trng-trung-cp-k-thut-min-trung-YrAWA"},{"distance":5.112211457683265,"loc_id":2879457,"cat_type":1,"name":"Tr\u01b0\u1eddng D\u0169ng","address":"Ph\u01b0\u1edbc Trung, Ph\u01b0\u1edbc \u0110\u1ed3ng, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1666088,"latitude":12.1936109,"slug":"trng-dng-bwLjd"}],"5":[{"distance":0.8162347204670183,"loc_id":1384122,"cat_type":5,"name":"Ng\u00f4 \u0110\u00ecnh Quy\u1ec1n","address":"T\u00e2n L\u1eadp, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1932466,"latitude":12.2354766,"slug":"ng-nh-quyn-oQlNB"},{"distance":1.0587416532827953,"loc_id":2887016,"cat_type":5,"name":"Chi Nh\u00e1nh Ng\u00e2n H\u00e0ng Ch\u00ednh S\u00e1ch X\u00e3 H\u1ed9i T\u1ec9nh Kh\u00e1nh H\u00f2a","address":"38 Ng\u00f4 Gia T\u1ef1, Ph\u01b0\u1edbc Ti\u1ebfn, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1906317,"latitude":12.243849,"slug":"chi-nhnh-ngn-hng-chnh-sch-x-hi-tnh-khnh-ha-Axo0r"},{"distance":1.266334587271523,"loc_id":2887138,"cat_type":5,"name":"MB Bank","address":"9 L\u00ea Th\u00e1nh T\u00f4n, L\u1ed9c Th\u1ecd, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.191094,"latitude":12.2457302,"slug":"mb-bank-WZELa"},{"distance":1.4053900562761363,"loc_id":4796840,"cat_type":5,"name":"BIDV PGD L\u1ed9c Th\u1ecd","address":"7 Nguy\u1ec5n Ch\u00e1nh, L\u1ed9c Th\u1ecd, Nha Trang, Kh\u00e1nh H\u00f2a 650000","longitude":109.1937422,"latitude":12.2455432,"slug":"bidv-pgd-lc-th-r78KBJ"},{"distance":2.494252977111822,"loc_id":3930026,"cat_type":5,"name":"Ng\u00e2n H\u00e0ng Tmcp Nam \u00c1 (Namabank) - Pgd","address":"312 D\u00e3 T\u01b0\u1ee3ng, V\u0129nh Ho\u00e0, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1984763,"latitude":12.2169563,"slug":"ngn-hng-tmcp-nam-namabank-pgd-pjANZm"},{"distance":2.5831315680205744,"loc_id":2885937,"cat_type":5,"name":"Ng\u00e2n H\u00e0ng Vietinbank L\u00fd Nam \u0110\u1ebf","address":"L\u00fd Nam \u0110\u1ebf, Ph\u01b0\u1edbc Trung, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.195343,"latitude":12.214366,"slug":"ngn-hng-vietinbank-l-nam-XQd06"},{"distance":2.6015566286368945,"loc_id":2887912,"cat_type":5,"name":"Ng\u00e2n H\u00e0ng MSB","address":"212 D\u00e3 T\u01b0\u1ee3ng, V\u0129nh Ho\u00e0, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.2014743,"latitude":12.2179846,"slug":"ngn-hng-msb-3myd5"},{"distance":3.6631735649156703,"loc_id":3901235,"cat_type":5,"name":"Ng\u00e2n H\u00e0ng Ch\u00ednh S\u00e1ch X\u00e3 H\u1ed9i - Vbsp","address":"\u0110. 23 Th\u00e1ng 10, V\u0129nh Hi\u1ec7p, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1589063,"latitude":12.2555641,"slug":"ngn-hng-chnh-sch-x-hi-vbsp-KXXMWQ"},{"distance":3.7024652940046425,"loc_id":2887538,"cat_type":5,"name":"Ng\u00e2n H\u00e0ng Ch\u00ednh S\u00e1ch X\u00e3 H\u1ed9i Nha Trang (Vbsp) - \u0110gd Ph\u01b0\u1eddng V\u0129nh Tr\u01b0\u1eddng","address":"48 V\u00f5 Th\u1ecb S\u00e1u, V\u0129nh Tr\u01b0\u1eddng, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.2025703,"latitude":12.2066658,"slug":"ngn-hng-chnh-sch-x-hi-nha-trang-vbsp-gd-phng-vnh-trng-WZEdg"},{"distance":6.054809925536683,"loc_id":2887877,"cat_type":5,"name":"Vietnam Technological and Commercial Joint Stock Bank - Vinh Hai Branch","address":"78 Street 2\/4, Vinh Hai Ward, V\u0129nh H\u1ea3i, Nha Trang, Kh\u00e1nh H\u00f2a","longitude":109.1880765,"latitude":12.2900229,"slug":"vietnam-technological-and-commercial-joint-stock-bank-vinh-hai-branch-qAz25"}]};

 <!-- Chuyển tab  -->
 function selectTab(el,loc_key){
 el = $(el);
 if(!el.hasClass('active')){
 $(".list-near-v2 .tab-list .item-type.active").removeClass('active');
 el.addClass('active');
 $(".list-near-v2 .list-location.active").removeClass('active');
 $("#loc-key-"+loc_key).addClass('active');
 map_marker.forEach(function(item){
 map.removeLayer(item);
 });
 map_marker = [];
 locations_near[loc_key].forEach(function(item){
 map_marker.push(L.marker([item.latitude, item.longitude], {icon: icon_marks["icon_"+item.cat_type]}).addTo(map).bindPopup(item.name));
 })
 }
 }

 setTimeout(function () {
 map = L.map('map-info').setView([12.2356161, 109.1857364], 12);
 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
 attribution: '<a target="_blank" href="https://www.openstreetmap.org/?mlat=12.2356161&mlon=109.1857364#map=15/12.2356161/109.1857364">Xem full màn hình</a>'
 }).addTo(map);
 var locationIcon = setIconMapMask('placeholder.png');
 icon_marks = {
 icon_0: locationIcon,
 icon_1: setIconMapMask('school.png'),
 icon_2: setIconMapMask('hospital.png'),
 icon_3: setIconMapMask('supermarket.png'),
 icon_4: setIconMapMask('authority.png'),
 icon_5: setIconMapMask('bank.png'),
 icon_6: setIconMapMask('park-street.png')

 };

 L.marker([12.2356161, 109.1857364], {icon: locationIcon}).addTo(map).bindPopup('[ GI&Aacute; QU&Aacute; RẺ ] NH&Agrave; MẶT TIỀN DIỆN T&Iacute;CH LỚN 120M2 ĐƯỜNG LAM SƠN  GI&Aacute; CHỈ 15TR/ TH&Aacute;NG').openPopup();

   map_marker.push(L.marker([12.2397014, 109.1871389], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Moon Clothes'));
  map_marker.push(L.marker([12.2377604, 109.1808266], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Chợ Đồng Nai, Nha Trang'));
  map_marker.push(L.marker([12.2487899, 109.1815417], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Shop Hoa Tươi Nha Trang'));
  map_marker.push(L.marker([12.2160414, 109.2007633], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Chợ Hải Sản'));
  map_marker.push(L.marker([12.2651315, 109.166027], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Xưởng Nước Đ&aacute; Minh Dũng'));
  map_marker.push(L.marker([12.2582637, 109.1577822], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Hải Sản Kh&ocirc;:&Uacute;t Kha'));
  map_marker.push(L.marker([12.2786546, 109.202027], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Dịch Vụ Internet D-D'));
  map_marker.push(L.marker([12.2754, 109.1473745], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Chợ Vĩnh Phương'));
  map_marker.push(L.marker([12.2981862, 109.213742], {icon: icon_marks.icon_3}).addTo(map).bindPopup('Si&ecirc;u thị Mẹ v&agrave; B&eacute;'));
  map_marker.push(L.marker([12.2522573, 109.1134334], {icon: icon_marks.icon_3}).addTo(map).bindPopup('C&agrave; Ph&ecirc; Phượng Hồng'));
   }, 2000);
 </script>

<script src="/assets/sweetalert2/sweetalert2@11.js" async="">
<script type="text/javascript">
 $(document).ready(function () {
 var end_box_request = $('#contact-buy-rent');
 $(window).scroll(function () {
 if (!end_box_request.hasClass('active') && !end_box_request.hasClass('hide') && $(window).scrollTop() > 500) {
 end_box_request.addClass('active');
 }
 });
 });

 function closePopUpContact() {
 $('#contact-buy-rent').removeClass('active');
 $('#contact-buy-rent').addClass('hide');
 }

</script>


<script>

 var data_contact_v2 = {"secret_key":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7Imd1ZXN0X2lkIjoiMTU0MTQxOTE0NyIsInJld19pZCI6IjIzNTg3NjUiLCJjbGFfaWQiOiIyNDYxNDEwMCIsInVzZXJfaWQiOiI2NzAyOTEifSwiaWF0IjoxNjgwNTI3ODkyLCJleHAiOjE2ODA1Mzg2OTJ9.pjhi2pc2tt38xT1sIBXamhZ7uZ-ZkQ5bawzweVIG5bI"};

 var check_classified_v2 = true;
  check_classified = true;
 
 function openRequireContactV2() {
 closePopUpContact();
 if (check_classified_v2 == false) {
 Swal.fire(
 'Fail!',
 'Không thể gửi yêu cầu cho tin của bạn!',
 'warning'
 )
 return;
 }
 $("#md-form-contact").show();
 }

 function closeRequireContactV2() {
 $("#md-form-contact").hide();
 }

 function sendContactV2() {
 data_contact_v2.user_phone = document.querySelector("#md-form-contact input[name='phone']").value;
 $.ajax({
 url: '/api/v2/user-contacts/create-require',
 method: 'post',
 data: data_contact_v2
 }).done(function (data) {
 console.log(data);
 closeRequireContactV2();
 Swal.fire(
 'Success!',
 'Đã gửi liên hệ!',
 'success'
 ).then(function(){
 window.location.reload();
 })
 }).fail(function (jqXHR, textStatus, errorThrown) {
 closeRequireContactV2();
 Swal.fire(
 'Fail!',
 'Gửi yêu cầu không thành công!',
 'error'
 ).then(function(){
 window.location.reload();
 })
 });
 return false;
 }
</script>
<script src="/assets/light-gallery/lightgallery.min.js"></script>

<!-- lightgallery plugins -->
<script src="/assets/light-gallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="/assets/light-gallery/plugins/zoom/lg-zoom.min.js"></script>
<script>
 var lightGallery_plugins = [lgZoom, lgThumbnail];
</script>
<script>

 
 lightGallery(document.getElementById('animated-thumbnails-gallery'), {
 autoplayFirstVideo: false,
 pager: false,
 galleryId: "nature",
 plugins: lightGallery_plugins,
 mobileSettings: {
 controls: true,
 showCloseIcon: true,
 download: false,
 rotate: true
 }
 });

 // open option share
 var open_option_share = false;
 var is_login = 1;
 var api_load = false;


 function facebookShare() {
 window.open("https://www.facebook.com/sharer/sharer.php?u=" + window.location.href)
 }

 function closeOptionShare() {
 console.log("close option");
 open_option_share = false;
 document.querySelector(".options-share").classList.remove('active');
 document.body.removeEventListener('click', closeOptionShare);
 // e.stopPropagation();
 }

 function openOptionShare(e) {
 if (open_option_share) {
 e.stopPropagation();
 return;
 }
 open_option_share = true;
 document.querySelector(".options-share").classList.add('active');
 e.stopPropagation();
 document.body.addEventListener('click', closeOptionShare);
 }

 function fallbackCopyTextToClipboard(text) {
 var textArea = document.createElement("textarea");
 textArea.value = text;

 // Avoid scrolling to bottom
 textArea.style.top = "0";
 textArea.style.left = "0";
 textArea.style.position = "fixed";

 document.body.appendChild(textArea);
 textArea.focus();
 textArea.select();

 try {
 var successful = document.execCommand('copy');
 var msg = successful ? 'successful' : 'unsuccessful';
 console.log('Fallback: Copying text command was ' + msg);
 } catch (err) {
 console.error('Fallback: Oops, unable to copy', err);
 }

 document.body.removeChild(textArea);
 }

 function copyUrl(e) {
 e.stopPropagation();
 closeOptionShare();
 document.querySelector(".options-share").classList.remove('active');
 var text = window.location.href;
 if (!navigator.clipboard) {
 fallbackCopyTextToClipboard(text);
 return;
 }
 navigator.clipboard.writeText(text).then(function () {
 console.log('Async: Copying to clipboard was successful!');
 }, function (err) {
 console.error('Async: Could not copy text: ', err);
 });
 }

 function saveClassified() {
 if (api_load) return;
 if (is_login == 0) {
 window.location.href = '/dang-nhap.aspx'
 } else {
 api_load = true;
 $.ajax({
 url: '/api/v3/classifieds-save/save/24614100',
 method: 'post',
 headers: {
 'AuthorizationAccess': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlkIjo2NzAyOTEsInVzZXJfbmFtZSI6InRoXHUwMGZheSB0aVx1MDBlYW4iLCJ1c2VyX2VtYWlsIjoidGh1eXRpZW44Nzg3QGdtYWlsLmNvbSIsInJvbCI6InVzZXIifSwiaWF0IjoxNjgwNTI3NTM0LCJleHAiOjE3MTE5NzcxMzR9.TzcB-xH_n569SBkmI4YBDQFQkbVqbCXCJPsRbzI7mk4',
 'Content-Type': 'application/json'
 }
 }).done(function (data) {
 api_load = false;
 Swal.fire(
 'Success!',
 'Đã lưu tin!',
 'success'
 ).then(function () {
 window.location.reload();
 })
 }).fail(function (jqXHR, textStatus, errorThrown) {
 api_load = false;
 Swal.fire(
 'Fail!',
 'Gửi yêu cầu không thành công!',
 'error'
 )
 });
 }
 }


</script><script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Cho thuê nhà mặt phố","item":"https:\/\/sosanhnha.com\/cho-thuê-nhà-mặt-phố"},{"@type":"ListItem","position":2,"name":"Khánh Hòa","item":"https:\/\/sosanhnha.com\/c\/cho-thue-nha-mat-pho-tai-khanh-hoa"},{"@type":"ListItem","position":3,"name":"Nha Trang","item":"https:\/\/sosanhnha.com\/c\/cho-thue-nha-mat-pho-tai-thanh-pho-nha-trang"}]}</script>

 </form>

<script language="javascript">
 $(document).ready(function () {
 $('#input-form-search').autocomplete({
 serviceUrl: '/ajax/suggest?secret=8ef06ca1e8532f29f753fa45e907ac92',
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





        <div class="ct" >
            <h2>Thông Tin Chi Tiết</h2>
            <div>
               
                    <ul>
                        <li>GẦN CÁC TRƯỜNG ĐẠI HỌC TRÊN ĐỊA BÀN TP CẦN THƠ</li>
                        <li>NGAY TRUNG TÂM QUẬN NINH KIỀU</li>
                        <li>GẦN SIÊU THỊ LOTTE MART</li>
                    </ul>
                    <p>    
                        Bao tất cả chi phí
                        Trang bị đầy đủ các nội thất tiện ích
                        Máy lạnh
                        Trang bị giường tầng, nệm và drap mới
                        Tủ đồ riêng
                        Nhà vệ sinh riêng
                        Wifi tốc độ cao.
                        Có bếp nấu ăn rộng rãi.
                        Trang bị máy giặt và nơi phơi đồ
                        Không gian đảm bảo luôn được vệ sinh sạch sẽ
                        Cửa khóa vân tay, camera an ninh, có quản lí 24/7
                        Giờ giấc tự do, thoải mái.
                    </p>
            </div>
        </div>
    </div>
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
  <script type="text/javascript">

    $(document).ready(function(){



        var native_width = 0;

        var native_height = 0;



        //Now the mousemove function

        $(".magnify").mousemove(function(e){

            //When the user hovers on the image, the script will first calculate

            //the native dimensions if they don't exist. Only after the native dimensions

            //are available, the script will show the zoomed version.

            if(!native_width && !native_height)

            {

                //This will create a new image object with the same image as that in .small

                //We cannot directly get the dimensions from .small because of the

                //width specified to 200px in the html. To get the actual dimensions we have

                //created this image object.

                var image_object = new Image();

                image_object.src = $(".small").attr("src");

                

                //This code is wrapped in the .load function which is important.

                //width and height of the object would return 0 if accessed before

                //the image gets loaded.

                native_width = image_object.width;

                native_height = image_object.height;

            }

            else

            {

                //x/y coordinates of the mouse

                //This is the position of .magnify with respect to the document.

                var magnify_offset = $(this).offset();

                //We will deduct the positions of .magnify from the mouse positions with

                //respect to the document to get the mouse positions with respect to the

                //container(.magnify)

                var mx = e.pageX - magnify_offset.left;

                var my = e.pageY - magnify_offset.top;

                

                //Finally the code to fade out the glass if the mouse is outside the container

                if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)

                {

                    $(".large").fadeIn(100);

                }

                else

                {

                    $(".large").fadeOut(100);

                }

                if($(".large").is(":visible"))

                {

                    //The background position of .large will be changed according to the position

                    //of the mouse over the .small image. So we will get the ratio of the pixel

                    //under the mouse pointer with respect to the image and use that to position the

                    //large image inside the magnifying glass

                    var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;

                    var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;

                    var bgp = rx + "px " + ry + "px";

                    

                    //Time to move the magnifying glass with the mouse

                    var px = mx - $(".large").width()/2;

                    var py = my - $(".large").height()/2;

                    //Now the glass moves with the mouse

                    //The logic is to deduct half of the glass's width and height from the

                    //mouse coordinates to place it with its center at the mouse coordinates

                    

                    //If you hover on the image now, you should see the magnifying glass in action

                    $(".large").css({left: px, top: py, backgroundPosition: bgp});

                }

            }

        })

    })

  </script>

</div>
</body>
</html>


