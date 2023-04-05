<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="js/js.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="image/home-v1.png">
         <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
        <meta name="theme-color" content="#FFBA00">
        <meta name="full-screen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="#FFBA00">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@200&amp;family=Satisfy&amp;display=swap" rel="stylesheet">
        <link rel="preload" as="font" crossorigin="anonymous" data-href="https://fonts.googleapis.com/css?family=Helvetica&amp;display=swap">
        <meta charset="utf-8">
        <title>BingHouse - Website tìm trọ Cần Thơ</title>
        <meta name="description" content="BingHouse - Website đăng,tim nhà trọ Cần Thơ mỗi ngày. Đăng tin mua bán UY TÍN, NHANH CHÓNG, AN TOÀN.">
        <meta property="og:type" content="website">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
        <link href="css/setting.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- <link href="css/mangxahoi.css" rel="stylesheet" type="text/css" media="all"/> -->

      
    </head>
<body class="">
                         <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                
                  <div class="ssn_header" alt="">
                  <a class="ssn_logo" title="binghouse" href="index.php">
                      <img src="image/logo.png" alt="BingHouse">
                      <!-- <img src="image/desiglogo.png" alt="BingHouse"> -->
                      </a><a class="logo_text"> BingHouse </a>
                  
              </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto py-4 py-md-0">
                        <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4 active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"></path>
                      </svg>
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                          
                        </li>
                        <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                        <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"></path>
                        <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"></path>
                      </svg>
                          <a class="nav-link" href="#">Tìm thuê</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                          <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 26.272 24.4" width="1em" height="1em" fill="none" class="aw__i1xnxzjm"><g fill="currentColor"><path d="M7.93 10.791c1.502.355 3.04.533 4.582.528 2.287 0 4.535-.382 6.17-1.05.974-.465.557-.225 1.246-.702l.528-.464c.369.736.992 1.27 1.508 1.712l.22.191a7.999 7.999 0 01.976 3.8c0 4.424-3.738 8.162-8.162 8.162-4.424 0-8.162-3.738-8.162-8.162a7.99 7.99 0 011.095-4.015zm-5.464-4.9l.232-.141a8.086 8.086 0 01-.217-.403l-.017-.032a10.24 10.24 0 01-.448-1.03 6.989 6.989 0 002.028.831 1.23 1.23 0 001.382-.646l.254-.145c1.734-.037 3.48-.766 5.172-1.471 1.276-.532 2.48-1.034 3.55-1.192.67-.1 1.308-.15 1.892-.15 1.63 0 2.86.386 3.552 1.114.464.489.68 1.129.64 1.9-.025.51.267.981.734 1.186.438.19.972.097 1.32-.226.126.099.27.172.427.216.413.115.652.216.8.338.16.13.314.364.503.76.876 1.832.478 2.79-.181 4.376l-.018.045c-.126-.435-.291-.77-.587-1.054a11.595 11.595 0 00-.546-.488c-.516-.442-1.05-.898-1.231-1.458A1.222 1.222 0 0019.6 7.82l-.385.399c-.825.547-.582.377-.98.615-.04.018-.08.035-.12.05-1.46.597-3.503.94-5.603.94-1.59 0-3.253-.195-4.567-.534a1.236 1.236 0 00-.937.137c-.232.14-.34.38-.633 1.022l-.143.313c-.19-.714-.428-1.595-.605-2.055a1.228 1.228 0 00-.52-.614c-.8-.473-1.456-1.03-1.952-1.659a4.43 4.43 0 01-.077-.1l-.076-.106a6.617 6.617 0 01-.299-.472l-.191.11.187-.114-.233.14zm23.154.264c-.213-.448-.417-.783-.66-1.045l.62.31-.62-.883c-.345-.49-.967-.77-1.708-.77-.463 0-.914.107-1.274.295-.06-.958-.417-1.802-1.048-2.466C19.634.232 17.25-.271 14.183.182c-1.254.185-2.602.747-3.906 1.291-1.6.667-3.255 1.357-4.734 1.357-1.92-.205-2.354-.722-3.372-1.783l.086.795.009.065c.039.248.15.516.327.793.069.11.147.218.232.325-.886-.538-1.602-1.343-2.17-2.43L.345 0 .153.644C-.32 2.23.387 4.523 1.13 5.993l.02.046.005.005c.08.156.164.311.252.464l.084.14.014.023c.085.142.175.28.27.416l.016.022c.06.086.124.17.189.253.593.75 1.36 1.413 2.283 1.97.895 2.367 1.099 4.39 1.145 5.17-.004.1-.005.202-.005.304 0 5.2 4.394 9.594 9.594 9.594 5.2 0 9.595-4.394 9.595-9.594 0-.133-.003-.265-.01-.396.21-1.031.555-1.859.888-2.66.704-1.696 1.312-3.16.15-5.595z"></path><path d="M11.84 14.937a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m6.547 0a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m-3.328 5.912c1.97 0 3.767-.987 4.69-2.576a.718.718 0 00-1.24-.72c-.667 1.149-1.99 1.863-3.45 1.863-1.462 0-2.784-.714-3.451-1.863a.711.711 0 00-.436-.332.717.717 0 00-.803 1.052c.922 1.589 2.72 2.576 4.69 2.576"></path></g></svg>
                          <a class="nav-link" href="post.php">Quản lý tin</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 15.706 19.271" width="1em" height="1em" fill="none" class="aw__ixo30vg"><path d="M13.033 7.739l-.03 8.149H2.705l-.03-8.148c0-2.953 2.226-5.181 5.179-5.183 2.952.002 5.18 2.23 5.18 5.182zm-3.775 9.296c-.194.635-.75 1.066-1.404 1.067-.654-.001-1.21-.432-1.404-1.067zm5.88-1.147h-.947l-.01-8.17c0-3.381-2.409-6-5.746-6.277V.568c0-.37-.292-.566-.582-.568-.288.002-.58.198-.58.568v.873c-3.337.276-5.746 2.896-5.746 6.277l-.01 8.17H.568c-.373 0-.568.293-.568.584 0 .29.195.584.568.584H5.26a2.642 2.642 0 002.593 2.215 2.641 2.641 0 002.593-2.215h4.692c.373 0 .568-.294.568-.584s-.195-.584-.568-.584z" fill="currentColor"></path></svg>
                          <a class="nav-link" href="#">Thông báo</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="aw__i1t7n4kh aw__i1t7n4kh--active"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 3.08366C6.17938 3.08366 3.08268 6.18036 3.08268 10.0003C3.08268 13.8203 6.17938 16.917 9.99935 16.917C13.8193 16.917 16.916 13.8203 16.916 10.0003C16.916 6.18036 13.8193 3.08366 9.99935 3.08366ZM1.91602 10.0003C1.91602 5.53602 5.53505 1.91699 9.99935 1.91699C14.4637 1.91699 18.0827 5.53602 18.0827 10.0003C18.0827 14.4646 14.4637 18.0837 9.99935 18.0837C5.53505 18.0837 1.91602 14.4646 1.91602 10.0003Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 6.83366C8.59562 6.83366 7.45768 7.9716 7.45768 9.37533C7.45768 10.779 8.59562 11.917 9.99935 11.917C11.4031 11.917 12.541 10.779 12.541 9.37533C12.541 7.9716 11.4031 6.83366 9.99935 6.83366ZM6.29102 9.37533C6.29102 7.32727 7.95129 5.66699 9.99935 5.66699C12.0474 5.66699 13.7077 7.32727 13.7077 9.37533C13.7077 11.4234 12.0474 13.0837 9.99935 13.0837C7.95129 13.0837 6.29102 11.4234 6.29102 9.37533Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0005 13.0837C9.06941 13.0837 8.15655 13.3415 7.36306 13.8285C6.56957 14.3156 5.92644 15.0128 5.50496 15.843C5.35912 16.1303 5.00802 16.2449 4.72075 16.0991C4.43349 15.9532 4.31884 15.6021 4.46469 15.3149C4.98369 14.2926 5.77564 13.434 6.75275 12.8342C7.72986 12.2345 8.85396 11.917 10.0005 11.917C11.1469 11.917 12.271 12.2345 13.2481 12.8342C14.2253 13.434 15.0172 14.2926 15.5362 15.3149C15.6821 15.6021 15.5674 15.9532 15.2801 16.0991C14.9929 16.2449 14.6418 16.1303 14.4959 15.843C14.0745 15.0128 13.4313 14.3156 12.6378 13.8285C11.8444 13.3415 10.9315 13.0837 10.0005 13.0837Z" fill="#222222"></path></svg>
                        <a class="nav-link" href="#" data-toggle="dropdown">Tài khoản</a>
                        <svg data-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="aw__d1xmuhl0" id="arrowDownB"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg>
                                                    
                            <div class="dropdown-menu"> 
                <div class="aw__m12exo7" onclick="hamDropdown()"><a href="" rel="nofollow"><span class="aw__mdmk8my"></span><span class="aw__meaxp5j"> <?php echo $_SESSION['TENDANGNHAP'];?></span>
              </a><div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
              <div class="aw__c1n389kw"></div></div>
                  <a class="dropdown-item" href="tindaluu.php">Tin đăng đã lưu</a>
                  <a class="dropdown-item" href="#">Tìm kiếm đã lưu</a>
                  <a class="dropdown-item" href="#">Đánh giá từ tôi</a>
                  <a class="dropdown-item" href="setting.php">Cài đặt</a>
                  <a class="dropdown-item" href="trogiup.php">Trợ giúp</a>
                  <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                </div>
                           
                                      
                      </li></ul>
                    </div>

                  </nav>
                </div>
              </div>
            </div>
          </div>
                        <!-- <div class="bg-white rounded h-max md:p-4 pt-7">
               <ul class="flex flex-col gap-4">
               <li>
               <a class="font-bold cursor-default text-gray-900">Thông tin cá nhân</a></li>
               <li>
               <a class="cursor-pointer !text-gray-400">Liên kết mạng xã hội</a></li>
               <li>
               <a class="cursor-pointer !text-gray-400">Cài đặt tài khoản</a></li>
               </ul>
               </div> -->
          <div class="l1tlqmyy">
          <ol class="mx-3 md:mx-0 s1vf7tl0" style ="padding-bottom:20px" itemscope="" itemtype="https://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="index.php" itemprop="item"><span itemprop="name">Bing House</span></a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20" data-type="monochrome" width="1em" height="1em" fill="none" class="separator"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" d="M2 2l8 7.9L2 18"></path></svg><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="setting.php" class="text-blue-500 inline-flex max-w-[150px] md:max-w-none [&amp;>span]:truncate" itemprop="item"><span itemprop="name">Trang cá nhân của <?php echo $_SESSION['TENDANGNHAP'];?></span></a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20" data-type="monochrome" width="1em" height="1em" fill="none" class="separator"><path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" d="M2 2l8 7.9L2 18"></path></svg><meta itemprop="position" content="2"></li><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><span itemprop="name">Liên kết mạng xã hội</span><meta itemprop="position" content="3"></li></ol>
          <div class="g1gd5utk withWidth withGutter c29gcq6" style="--c29gcq6-0:100%;--c29gcq6-1:4px;--c29gcq6-4:-8px;--c29gcq6-5:-8px;--c29gcq6-9:8px;--c29gcq6-13:100%;--c29gcq6-14:6px;--c29gcq6-17:-12px;--c29gcq6-18:-12px;--c29gcq6-22:12px;--c29gcq6-26:100%;--c29gcq6-27:8px;--c29gcq6-30:-16px;--c29gcq6-31:-16px;--c29gcq6-35:16px;--c29gcq6-39:100%;--c29gcq6-40:12px;--c29gcq6-43:-24px;--c29gcq6-44:-24px;--c29gcq6-48:24px;--c29gcq6-52:100%;--c29gcq6-53:16px;--c29gcq6-56:-32px;--c29gcq6-57:-32px;--c29gcq6-61:32px">
      <div class="g1gd5utk swjo00u" style="--swjo00u-0:initial;--swjo00u-1:initial;--swjo00u-3:initial;--swjo00u-6:initial;--swjo00u-9:initial;--swjo00u-12:initial;--swjo00u-15:initial">
          <div class="withSpan snf9jyk" style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:33.33333333333333%;--snf9jyk-16:initial;--snf9jyk-18:33.33333333333333%;--snf9jyk-20:initial">
          <h5>Chỉnh sửa trang cá nhân</h5>
          <p class="trc72lf">
              <a href="setting.php" rel="noreferrer"><br><img src="image/canhan.png" width="40px">Thông tin cá nhân</a><br>
              <a href="mangxahoi.php"  rel="noreferrer"><img src="image/mang-xa-hoi.png" width="40px">Liên kết mạng xã hội</a><br>
              <a href="repassword.php"  rel="noreferrer"><img src="image/doipass.png" width="40px">Cài đặt tài khoản</a>
            </p>
                     <span class="f6ete4">
                        
            <div class="wsk6u1i" style="--wsk6u1i-0:24px;">
              
               <div class="t8i307c" style="--t8i307c-0:0;">
                  <div class="withGutter c29gcq6" style="--c29gcq6-0: initial; --c29gcq6-1:8px; --c29gcq6-4:-16px; --c29gcq6-5:-16px; --c29gcq6-9:16px; --c29gcq6-13: initial; --c29gcq6-14:8px; --c29gcq6-17:-16px; --c29gcq6-18:-16px; --c29gcq6-22:16px; --c29gcq6-26: initial; --c29gcq6-27:8px; --c29gcq6-30:-16px; --c29gcq6-31:-16px; --c29gcq6-35:16px; --c29gcq6-39: initial; --c29gcq6-40:8px; --c29gcq6-43:-16px; --c29gcq6-44:-16px; --c29gcq6-48:16px; --c29gcq6-52: initial; --c29gcq6-53:8px; --c29gcq6-56:-16px; --c29gcq6-57:-16px; --c29gcq6-61:16px;">
                     <div class="withRowCols swjo00u" style="--swjo00u-0:center; --swjo00u-1:flex-start; --swjo00u-3:100%; --swjo00u-6:100%; --swjo00u-9:50%; --swjo00u-12:33.3333%; --swjo00u-15:33.3333%;"></div>
                  </div>
               </div>
            </div>
         </div>
          <div class="withSpan snf9jyk" style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:66.66666666666666%;--snf9jyk-16:initial;--snf9jyk-18:66.66666666666666%;--snf9jyk-20:initial">
            <div class="f1wri8l5">
               <form>
                  <div></div>
                  <div>
                     <div class="wbtmmtj"></div>
                     <div class="l1kr9d9v">
                        
                              <div class="withSpan snf9jyk" style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:100%;--snf9jyk-16:initial;--snf9jyk-18:100%;--snf9jyk-20:initial">
                                 <div>
                                    <div>
                                       <div></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="withSpan snf9jyk" style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:100%;--snf9jyk-16:initial;--snf9jyk-18:100%;--snf9jyk-20:initial">
                                 <div>
                                    <div>
                                       <div></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="l1kr9d9v">
                     <div class="wizard-tab-content">
   <div role="tabpanel" id="Nộidung0" aria-labelledby="step-Nộidung0" class="wizard-tab-container" style="display: none;" aria-hidden="true">
      <div>
         <div class="grid-column">
            <div data-v-5d159d94="" class="form-group">
               
              
            </div>
            <div data-v-5528d396="" class="form-group form-v4-select-suggest">
               
               <label data-v-5528d396="" for="MXu1QXf7yp" data-limit="2" class="form-control limit-text" style="min-height: 34px; max-height: 50px; height: inherit;">Tòa nhà 3A</label><i data-v-5528d396="" class="icon-row-slg fa fa-angle-down "></i>
            </div>
         </div>
         <div class="grid-column grid-column-4 grid-xm-column-1">
            <div data-v-2a5ddd9d="" class="form-group">
              
               <div data-v-2a5ddd9d="" class="input-group"><input data-v-2a5ddd9d="" type="text" placeholder="Nhập giá" name="price" class="form-control"><span data-v-2a5ddd9d="" class="input-group-addon">VNĐ</span></div>
              
            </div>
            <div data-v-2a5ddd9d="" class="form-group">
             
               <div data-v-2a5ddd9d="" class="input-group">
                  <input data-v-2a5ddd9d="" type="text" placeholder="Nhập diện tích" name="list_acreage" class="form-control">
                  <span data-v-2a5ddd9d="" class="input-group-addon">m<sup>2</sup></span></div>
              
            </div>
            <div data-v-2a5ddd9d="" class="form-group">
              
               <input data-v-2a5ddd9d="" type="text" placeholder="Nhập phòng ngủ" name="list_badroom" class="form-control">
            </div>
            <div data-v-2a5ddd9d="" class="form-group">
              
               <input data-v-2a5ddd9d="" type="text" placeholder="Nhập phòng tắm" name="list_toilet" class="form-control">
            </div>
         </div>
      </div>
   </div>
   <div role="tabpanel" id="Liênhệ1" aria-labelledby="step-Liênhệ1" class="wizard-tab-container" style="">
</div>
</div>
</div>
<div class="mt-5 flex flex-col gap-6">
<div>
<h3 class="text-sm font-bold text-gray-600 mb-2">Facebook</h3>
<button class="b1f8o96z outline o-tertiary r-normal medium w-bold i-left outline-none w-56 hover:!bg-white" fdprocessedid="2l6lze">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.0014 1.66797C5.39978 1.66797 1.66895 5.32786 1.66895 9.84202C1.66895 13.9213 4.71561 17.3024 8.69978 17.918V12.2054H6.58311V9.84202H8.69978V8.0411C8.69978 5.99084 9.94394 4.86025 11.8464 4.86025C12.7581 4.86025 13.7131 5.01966 13.7131 5.01966V7.02986H12.6598C11.6264 7.02986 11.3031 7.66096 11.3031 8.3076V9.84038H13.6123L13.2431 12.2037H11.3031V17.9163C15.2873 17.304 18.3339 13.9221 18.3339 9.84202C18.3339 5.32786 14.6031 1.66797 10.0014 1.66797Z" fill="#2561CF"></path></svg><a href="https://www.facebook.com/"></a> Liên kết với Facebook</button></div>
<div>
<h3 class="text-sm font-bold text-gray-600 mb-2">Google</h3>
<div class="relative">
<button class="b1f8o96z outline o-tertiary r-normal medium w-bold i-left outline-none w-56 hover:!bg-white" fdprocessedid="unfbwc">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.8002 10.1951C18.8002 9.47569 18.7405 8.95069 18.6112 8.40625H10.2041V11.6534H15.1389C15.0394 12.4604 14.5022 13.6757 13.3082 14.4923L13.2915 14.601L15.9496 16.6133L16.1338 16.6312C17.8251 15.1048 18.8002 12.859 18.8002 10.1951Z" fill="#4285F4"></path>
<path d="M10.2043 18.7499C12.6219 18.7499 14.6515 17.9721 16.134 16.6305L13.3084 14.4915C12.5523 15.0068 11.5375 15.3665 10.2043 15.3665C7.83642 15.3665 5.8267 13.8402 5.11029 11.7305L5.00528 11.7392L2.24129 13.8295L2.20514 13.9277C3.6776 16.786 6.70216 18.7499 10.2043 18.7499Z" fill="#34A853"></path>
<path d="M5.11025 11.7322C4.92122 11.1878 4.81182 10.6044 4.81182 10.0016C4.81182 9.39881 4.92122 8.8155 5.1003 8.27106L5.09529 8.15511L2.29666 6.03125L2.2051 6.07381C1.59823 7.25994 1.25 8.59191 1.25 10.0016C1.25 11.4113 1.59823 12.7432 2.2051 13.9294L5.11025 11.7322Z" fill="#FBBC05"></path>
<path d="M10.2043 4.63331C11.8857 4.63331 13.0199 5.34303 13.6666 5.93612L16.1937 3.525C14.6417 2.11528 12.6219 1.25 10.2043 1.25C6.70216 1.25 3.6776 3.21387 2.20514 6.07218L5.10034 8.26944C5.8267 6.15972 7.83642 4.63331 10.2043 4.63331Z" fill="#EB4335"></path></svg> Liên kết với Google</button>
<div id="google-login-btn" class="inline-block absolute top-0 left-0 opacity-0 ">
<div class="S9gUrf-YoZ4jf" style="position: relative;">
<div>
</div>
</div>
</div>
</div>
</div>
<div><h3 class="text-sm font-bold text-gray-600 mb-2">Apple ID</h3>
<button class="b1f8o96z outline o-tertiary r-normal medium w-bold i-left outline-none w-56 hover:!bg-white" fdprocessedid="g74jg8a">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6377 4.09766C12.0627 4.09766 11.397 4.84922 10.3002 4.84922C9.17554 4.84922 8.31773 4.10312 6.95289 4.10312C5.61695 4.10312 4.19234 4.91875 3.28765 6.3082C2.01734 8.26758 2.23297 11.9578 4.29039 15.1016C5.02632 16.227 6.00914 17.4891 7.2982 17.5027H7.32164C8.44195 17.5027 8.77476 16.7691 10.3166 16.7605H10.34C11.8587 16.7605 12.1634 17.4984 13.2791 17.4984H13.3025C14.5916 17.4848 15.6271 16.0863 16.363 14.9652C16.8927 14.159 17.0896 13.7543 17.4959 12.8422C14.5197 11.7125 14.0416 7.49336 16.9849 5.87578C16.0865 4.75078 14.824 4.09922 13.6337 4.09922L13.6377 4.09766Z" fill="#222222"></path>
<path d="M13.2911 0C12.3536 0.0636719 11.2599 0.660547 10.6193 1.43984C10.038 2.14609 9.5599 3.19375 9.7474 4.20977H9.8224C10.8208 4.20977 11.8427 3.60859 12.4396 2.83828C13.0146 2.10508 13.4505 1.06602 13.2911 0Z" fill="#222222"></path></svg> Liên kết với Apple ID</button>
</div>
</div>
         </form><br><br><br>
         </div>
      </div>
   </div>
</div>
</div>
</body>


















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
    </body>
</html>