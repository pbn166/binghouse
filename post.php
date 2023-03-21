<!DOCTYPE html>
<?php
  include './config/config.php';
  $tinh="select * from tinh";
  $tinhsql = mysqli_query($conn,$tinh);
  $huyen="select * from huyen";
  $huyensql = mysqli_query($conn,$huyen);
 
  
  

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
                                      
                      </ul>
                    </div>

                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="l1tlqmyy">
   <div class="g1gd5utk withWidth withGutter c29gcq6" style="--c29gcq6-0:100%;--c29gcq6-1:4px;--c29gcq6-4:-8px;--c29gcq6-5:-8px;--c29gcq6-9:8px;--c29gcq6-13:100%;--c29gcq6-14:6px;--c29gcq6-17:-12px;--c29gcq6-18:-12px;--c29gcq6-22:12px;--c29gcq6-26:100%;--c29gcq6-27:8px;--c29gcq6-30:-16px;--c29gcq6-31:-16px;--c29gcq6-35:16px;--c29gcq6-39:100%;--c29gcq6-40:12px;--c29gcq6-43:-24px;--c29gcq6-44:-24px;--c29gcq6-48:24px;--c29gcq6-52:100%;--c29gcq6-53:16px;--c29gcq6-56:-32px;--c29gcq6-57:-32px;--c29gcq6-61:32px">
      <div class="g1gd5utk swjo00u" style="--swjo00u-0:initial;--swjo00u-1:initial;--swjo00u-3:initial;--swjo00u-6:initial;--swjo00u-9:initial;--swjo00u-12:initial;--swjo00u-15:initial">
         <div class="withSpan snf9jyk" style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:33.33333333333333%;--snf9jyk-16:initial;--snf9jyk-18:33.33333333333333%;--snf9jyk-20:initial">
            <h5>Ảnh / video sản phẩm</h5>
            <p class="trc72lf">
               Xem thêm về<!-- -->&nbsp;<a href="https://trogiup.chotot.com/nguoi-ban/dang-tin/" target="_blank" rel="noreferrer">Quy định đăng tin của Chợ Tốt</a>
            </p>
            <div class="ilncnob">
               <div class="cs1az2d" role="presentation">
                  <div class="info no-button s1m6eucv">
                     <svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" width="1em" height="1em" class="t19huucb info">
                        <path fill="currentColor" d="M6 0a6 6 0 100 12A6 6 0 006 0zm-.693 8.59V5.843a.693.693 0 111.386 0V8.59a.693.693 0 11-1.386 0zM6 4.393a.833.833 0 110-1.666.833.833 0 010 1.666z"></path>
                     </svg>
                     <div class="cq9a8j6">Hình ảnh hợp lệ</div>
                  </div>
               </div>
               <div role="presentation" class="wfyigpx" style="--wfyigpx-0:pointer; --wfyigpx-1:225px; --wfyigpx-3:1; --wfyigpx-4:0;" tabindex="0">
                  <input type="file" accept="" multiple="" style="display:none" tabindex="-1">
                  <div class="s1sn01m8">
                     <svg xmlns="http://www.w3.org/2000/svg" width="53" height="39" viewBox="0 0 53 39">
                        <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                           <g stroke="#FF8800" stroke-width="2" transform="translate(-255 -179)">
                              <g transform="translate(132 122)">
                                 <path d="M150.631 87.337c-5.755 0-10.42-4.534-10.42-10.127 0-5.593 4.665-10.127 10.42-10.127s10.42 4.534 10.42 10.127c0 5.593-4.665 10.127-10.42 10.127m10.42-24.755l-2.315-4.501h-16.21l-2.316 4.5h-11.579s-4.631 0-4.631 4.502v22.505c0 4.5 4.631 4.5 4.631 4.5h41.684s4.631 0 4.631-4.5V67.083c0-4.501-4.631-4.501-4.631-4.501h-9.263z"></path>
                              </g>
                           </g>
                        </g>
                     </svg>
                     <span class="f6ete4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 20 21">
                           <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                              <g fill="#FF8800" transform="translate(-161 -428)">
                                 <g transform="translate(132 398)">
                                    <g transform="translate(16.648 17.048)">
                                       <g transform="rotate(-180 16.142 16.838)">
                                          <rect width="2.643" height="19.82" x="8.588" y="0" rx="1.321"></rect>
                                          <path d="M9.91 0c.73 0 1.321.592 1.321 1.321v17.177a1.321 1.321 0 01-2.643 0V1.321C8.588.591 9.18 0 9.91 0z" transform="rotate(90 9.91 9.91)"></path>
                                       </g>
                                    </g>
                                 </g>
                              </g>
                           </g>
                        </svg>
                     </span>
                  </div>
                  <div class="s1sn01m8">
                     <p class="t1jq83vt">ĐĂNG TỪ 03 ĐẾN 12 HÌNH</p>
                  </div>
               </div>
            </div>
            <div class="t179re7t" style="--t179re7t-0:0">
               <div class="withGutter c29gcq6" style="--c29gcq6-0:initial;--c29gcq6-1:8px;--c29gcq6-4:-16px;--c29gcq6-5:-16px;--c29gcq6-9:16px;--c29gcq6-13:initial;--c29gcq6-14:8px;--c29gcq6-17:-16px;--c29gcq6-18:-16px;--c29gcq6-22:16px;--c29gcq6-26:initial;--c29gcq6-27:8px;--c29gcq6-30:-16px;--c29gcq6-31:-16px;--c29gcq6-35:16px;--c29gcq6-39:initial;--c29gcq6-40:8px;--c29gcq6-43:-16px;--c29gcq6-44:-16px;--c29gcq6-48:16px;--c29gcq6-52:initial;--c29gcq6-53:8px;--c29gcq6-56:-16px;--c29gcq6-57:-16px;--c29gcq6-61:16px">
                  <div class="withRowCols swjo00u" style="--swjo00u-0:center;--swjo00u-1:flex-start;--swjo00u-3:100%;--swjo00u-6:100%;--swjo00u-9:50%;--swjo00u-12:33.33333333333333%;--swjo00u-15:33.33333333333333%"></div>
               </div>
            </div>
            <div class="wsk6u1i" style="--wsk6u1i-0:24px;">
               <div class="ilncnob">
                  <div role="presentation" tabindex="0" class="wfyigpx" style="--wfyigpx-0:pointer; --wfyigpx-1:225px; --wfyigpx-3:1; --wfyigpx-4:0;">
                     <input accept="" multiple="" type="file" tabindex="-1" style="display: none;">
                     <div class="s1sn01m8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="39" fill="none" viewBox="0 0 53 39">
                           <path stroke="#FF8800" stroke-width="2" d="M39.62 11.031l.013-.006.012-.006 11.707-6.042a1.329 1.329 0 01.208-.076l.007.003.128.025c.28.054.305.221.305.228v26.046a.412.412 0 01-.07.095.704.704 0 01-.203.145h-.122c-.073 0-.126 0-.176-.002h-.024l-.031-.017-11.721-6.183-.016-.008-.017-.008c-.16-.077-.41-.363-.41-.847v-12.5c0-.484.25-.77.41-.847zm11.716 20.404h.001-.001z"></path>
                           <mask id="path-2-inside-1_289_1913" fill="#fff">
                              <path fill-rule="evenodd" d="M10.447 7c1.81 0 3.234 1.466 3.234 3.333 0 1.867-1.423 3.333-3.234 3.333S7.213 12.2 7.213 10.333C7.213 8.466 8.636 7 10.447 7zM28.07 36.167c4.656 0 8.537-4 8.537-8.8v-18.4c0-4.8-3.88-8.8-8.537-8.8H8.537C3.881.167 0 4.167 0 8.967v18.4c0 4.934 3.751 8.8 8.537 8.8H28.07z" clip-rule="evenodd"></path>
                           </mask>
                           <path fill="#FF8800" d="M10.447 9c.65 0 1.234.513 1.234 1.333h4C15.68 7.419 13.419 5 10.447 5v4zm1.234 1.333c0 .82-.584 1.333-1.234 1.333v4c2.972 0 5.234-2.42 5.234-5.333h-4zm-1.234 1.333c-.65 0-1.234-.513-1.234-1.333h-4c0 2.914 2.262 5.333 5.234 5.333v-4zm-1.234-1.333c0-.82.584-1.333 1.234-1.333V5c-2.972 0-5.234 2.42-5.234 5.333h4zM28.07 38.167c5.818 0 10.537-4.953 10.537-10.8h-4c0 3.753-3.042 6.8-6.537 6.8v4zm10.537-10.8v-18.4h-4v18.4h4zm0-18.4c0-5.847-4.72-10.8-10.537-10.8v4c3.495 0 6.537 3.047 6.537 6.8h4zM28.07-1.833H8.537v4H28.07v-4zm-19.533 0C2.72-1.833-2 3.12-2 8.967h4c0-3.753 3.042-6.8 6.537-6.8v-4zM-2 8.967v18.4h4v-18.4h-4zm0 18.4c0 5.98 4.59 10.8 10.537 10.8v-4c-3.624 0-6.537-2.913-6.537-6.8h-4zm10.537 10.8H28.07v-4H8.537v4z" mask="url(#path-2-inside-1_289_1913)"></path>
                        </svg>
                        <span class="f6ete4">
                           <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 20 21">
                              <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                 <g fill="#FF8800" transform="translate(-161 -428)">
                                    <g transform="translate(132 398)">
                                       <g transform="translate(16.648 17.048)">
                                          <g transform="rotate(-180 16.142 16.838)">
                                             <rect width="2.643" height="19.82" x="8.588" y="0" rx="1.321"></rect>
                                             <path d="M9.91 0c.73 0 1.321.592 1.321 1.321v17.177a1.321 1.321 0 01-2.643 0V1.321C8.588.591 9.18 0 9.91 0z" transform="rotate(90 9.91 9.91)"></path>
                                          </g>
                                       </g>
                                    </g>
                                 </g>
                              </g>
                           </svg>
                        </span>
                     </div>
                     <div class="s1sn01m8">
                        <p class="t1jq83vt">BẠN ĐÃ ĐĂNG 0/10 VIDEO TRONG THÁNG</p>
                     </div>
                  </div>
               </div>
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
                        <div class="l1kr9d9v withWidth withGutter c29gcq6" style="--c29gcq6-0:100%;--c29gcq6-1:8px;--c29gcq6-4:0px;--c29gcq6-5:-16px;--c29gcq6-9:0px;--c29gcq6-13:100%;--c29gcq6-14:8px;--c29gcq6-17:0px;--c29gcq6-18:-16px;--c29gcq6-22:0px;--c29gcq6-26:100%;--c29gcq6-27:8px;--c29gcq6-30:0px;--c29gcq6-31:-16px;--c29gcq6-35:0px;--c29gcq6-39:100%;--c29gcq6-40:8px;--c29gcq6-43:0px;--c29gcq6-44:-16px;--c29gcq6-48:0px;--c29gcq6-52:100%;--c29gcq6-53:8px;--c29gcq6-56:0px;--c29gcq6-57:-16px;--c29gcq6-61:0px">
                           <div class="l1kr9d9v swjo00u" style="--swjo00u-0:initial;--swjo00u-1:initial;--swjo00u-3:initial;--swjo00u-6:initial;--swjo00u-9:initial;--swjo00u-12:initial;--swjo00u-15:initial">
                              <div class="withSpan snf9jyk" style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:100%;--snf9jyk-16:initial;--snf9jyk-18:100%;--snf9jyk-20:initial">
                                 <div>
                                    <div>
                                       <div>
                                          <div class="cl31q19 c17xe3w4" style="--c17xe3w4-0:100%">
                                             <div class="wrapper i64zdy1">
                                                <select class="select ihj19gg isDropdown hasValue required">
                                                   <option selected="" hidden="" value=""></option>
                                                   <option selected="" disabled="" value="">Danh mục tin đăng </option>
                                                   <option value="1010">Bất động sản - Căn hộ/Chung cư</option>
                                                    
                                                </select>
                                                <label class="label" for="">Danh mục tin đăng </label>
                                                <svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="arrow">
                                                   <path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path>
                                                </svg>
                                             </div>
                                             <p class="helptext p131urh5"></p>
                                          </div>
                                       </div>
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
               <label data-v-5d159d94="" class="label-form">Tiêu đề : <small data-v-5d159d94="" style="color: red;">*</small></label><input data-v-5d159d94="" type="text" placeholder="Nhập tiêu đề" name="title" class="form-control"><!---->
            </div>
         </div>
         <div class="grid-column grid-xm-column-1">
            <div class="form-group">
               <label class="label-form">
                  Mô tả:  <!---->
               </label>
               <textarea rows="3" placeholder="Nhập mô tả" minlength="20" maxlength="5000" required="required" class="form-control" style="resize: vertical; min-height: 100px; border-radius: 5px; font-size: 15px; line-height: 1.3; height: 113px;"></textarea>
               <!---->
            </div>
         </div>
         <div class="grid-column grid-column-2 grid-xm-column-1">
            <div class="form-group">
               <label class="label-form">Chuyên mục : <small style="color: red;">*</small></label>
               <select name="cat_id" class="form-control" style="border-radius: 5px;">
                  <option disabled="disabled" value="">Chọn chuyên mục :</option>
                  <optgroup label="Nhà đất bán">
                     <option value="324"> Bán căn hộ chung cư </option>
                     <option value="41"> Bán nhà riêng </option>
                     <option value="325"> Bán nhà biệt thự, liền kề </option>
                     <option value="163"> Bán nhà mặt phố </option>
                     <option value="40"> Bán đất nền dự án </option>
                     <option value="283"> Bán đất </option>
                     <option value="44"> Bán trang trại, khu nghỉ dưỡng </option>
                     <option value="45"> Bán kho, nhà xưởng </option>
                     <option value="48"> Bán loại bất động sản khác </option>
                  </optgroup>
                  <optgroup label="Nhà đất cho thuê">
                     <option value="326"> Cho thuê căn hộ chung cư </option>
                     <option value="52"> Cho thuê nhà riêng </option>
                     <option value="51"> Cho thuê nhà mặt phố </option>
                     <option value="57"> Cho thuê nhà trọ, phòng trọ </option>
                     <option value="50"> Cho thuê văn phòng </option>
                     <option value="55"> Cho thuê cửa hàng, ki ốt </option>
                     <option value="53"> Cho thuê kho, nhà xưởng, đất </option>
                     <option value="59"> Cho thuê loại bất động sản khác </option>
                  </optgroup>
               </select>
               <!---->
            </div>
            <div data-v-5528d396="" class="form-group form-v4-select-suggest">
               <label data-v-5528d396="" class="label-form">
                  Dự án <!---->
               </label>
               <label data-v-5528d396="" for="MXu1QXf7yp" data-limit="2" class="form-control limit-text" style="min-height: 34px; max-height: 50px; height: inherit;">Tòa nhà 3A</label><i data-v-5528d396="" class="icon-row-slg fa fa-angle-down "></i><!---->
            </div>
         </div>
         <div class="grid-column grid-column-4 grid-xm-column-1">
            <div data-v-2a5ddd9d="" class="form-group">
               <label data-v-2a5ddd9d="" class="label-form">
                  Giá : <!---->
               </label>
               <div data-v-2a5ddd9d="" class="input-group"><input data-v-2a5ddd9d="" type="text" placeholder="Nhập giá" name="price" class="form-control"><span data-v-2a5ddd9d="" class="input-group-addon">VNĐ</span></div>
               <!---->
            </div>
            <div data-v-2a5ddd9d="" class="form-group">
               <label data-v-2a5ddd9d="" class="label-form">
                  Diện tích : <!---->
               </label>
               <div data-v-2a5ddd9d="" class="input-group"><input data-v-2a5ddd9d="" type="text" placeholder="Nhập diện tích" name="list_acreage" class="form-control"><span data-v-2a5ddd9d="" class="input-group-addon">m<sup>2</sup></span></div>
               <!---->
            </div>
            <div data-v-2a5ddd9d="" class="form-group">
               <label data-v-2a5ddd9d="" class="label-form">
                  Phòng ngủ : <!---->
               </label>
               <input data-v-2a5ddd9d="" type="text" placeholder="Nhập phòng ngủ" name="list_badroom" class="form-control"><!---->
            </div>
            <div data-v-2a5ddd9d="" class="form-group">
               <label data-v-2a5ddd9d="" class="label-form">
                  Phòng tắm : <!---->
               </label>
               <input data-v-2a5ddd9d="" type="text" placeholder="Nhập phòng tắm" name="list_toilet" class="form-control"><!---->
            </div>
         </div>
      </div>
   </div>
   <div role="tabpanel" id="Liênhệ1" aria-labelledby="step-Liênhệ1" class="wizard-tab-container" style="">
      <div>
         <div class="grid-column">
            <div data-v-5d159d94="" class="form-group">
               <label data-v-5d159d94="" class="label-form">Địa chỉ <small data-v-5d159d94="" style="color: red;">*</small></label><input data-v-5d159d94="" type="text" placeholder="Nhập địa chỉ" name="address" class="form-control"><!---->
            </div>
         </div>
         <div class="grid-column grid-column-4 grid-xm-column-1" messages_error="[object Object]" value="[object Object]">
            <div class="form-group">
               <label class="label-form">
                  Tỉnh/thành phố <!---->
               </label>
               <select name="citid" class="form-control" style="border-radius: 5px;">
                  <option disabled="disabled" value="0">Chọn tỉnh/thành phố</option>
                  <option value="9278"> Hà Nội </option>
                  <option value="1"> Hồ Chí Minh </option>
                  <option value="13326"> Đà Nẵng </option>
                  <option value="38399"> An Giang </option>
                  <option value="25237"> Bà Rịa Vũng Tàu </option>
                  <option value="37615"> Bắc Giang </option>
                  <option value="49116"> Bắc Kạn </option>
                  <option value="47452"> Bạc Liêu </option>
                  <option value="30402"> Bắc Ninh </option>
                  <option value="41842"> Bến Tre </option>
                  <option value="16327"> Bình Dương </option>
                  <option value="35069"> Bình Phước </option>
                  <option value="27862"> Bình Thuận   </option>
                  <option value="35914"> Bình Định </option>
                  <option value="54578"> BĐS Mỹ, Úc </option>
                  <option value="42323"> Cà Mau </option>
                  <option value="27085"> Cần Thơ </option>
                  <option value="49274"> Cao Bằng </option>
                  <option value="34534"> Gia Lai </option>
                  <option value="48876"> Hà Giang </option>
                  <option value="44083"> Hà Nam </option>
                  <option value="44351"> Hà Tĩnh </option>
                  <option value="33881"> Hải Dương </option>
                  <option value="21944"> Hải Phòng </option>
                  <option value="46921"> Hậu Giang </option>
                  <option value="38078"> Hòa Bình </option>
                  <option value="35561"> Hưng Yên </option>
                  <option value="20641"> Khánh Hòa </option>
                  <option value="29872"> Kiên Giang </option>
                  <option value="45663"> Kon Tum </option>
                  <option value="48342"> Lai Châu </option>
                  <option value="28348"> Lâm Đồng </option>
                  <option value="48502"> Lạng Sơn </option>
                  <option value="40422"> Lào Cai </option>
                  <option value="23036"> Long An </option>
                  <option value="40867"> Nam Định </option>
                  <option value="32982"> Nghệ An </option>
                  <option value="42810"> Ninh Bình </option>
                  <option value="43589"> Ninh Thuận </option>
                  <option value="43158"> Phú Thọ </option>
                  <option value="43800"> Phú Yên </option>
                  <option value="45945"> Quảng Bình </option>
                  <option value="24445"> Quảng Nam </option>
                  <option value="41429"> Quảng Ngãi </option>
                  <option value="30963"> Quảng Ninh </option>
                  <option value="46313"> Quảng Trị </option>
                  <option value="45188"> Sóc Trăng </option>
                  <option value="47139"> Sơn La </option>
                  <option value="39636"> Tây Ninh </option>
                  <option value="37153"> Thái Bình </option>
                  <option value="40052"> Thái Nguyên </option>
                  <option value="31642"> Thanh Hóa </option>
                  <option value="29041"> Thừa Thiên Huế </option>
                  <option value="36508"> Tiền Giang </option>
                  <option value="46665"> Trà Vinh </option>
                  <option value="47952"> Tuyên Quang </option>
                  <option value="42584"> Vĩnh Long </option>
                  <option value="39262"> Vĩnh Phúc </option>
                  <option value="47627"> Yên Bái </option>
                  <option value="26395"> Đắk Lắk </option>
                  <option value="42160"> Đắk Nông </option>
                  <option value="48174"> Điện Biên </option>
                  <option value="19463"> Đồng Nai </option>
                  <option value="44748"> Đồng Tháp </option>
               </select>
               <!---->
            </div>
            <div class="form-group">
               <label class="label-form">
                  Quận/huyện <!---->
               </label>
               <select name="disid" class="form-control" style="border-radius: 5px;">
                  <option disabled="disabled" value="0">Chọn quận/huyện</option>
               </select>
               <!---->
            </div>
            <div class="form-group">
               <label class="label-form">
                  Phường/xã <!---->
               </label>
               <select name="wardid" class="form-control" style="border-radius: 5px;">
                  <option disabled="disabled" value="0">Chọn phường/xã</option>
               </select>
               <!---->
            </div>
            <div class="form-group">
               <label class="label-form">
                  Đường/Phố <!---->
               </label>
               <select name="streetid" class="form-control" style="border-radius: 5px;">
                  <option disabled="disabled" value="0">Chọn đường/phố</option>
               </select>
               <!---->
            </div>
            <!---->
         </div>
         <div class="grid-column grid-column-3 grid-xs-column-1">
            <div data-v-5d159d94="" class="form-group">
               <label data-v-5d159d94="" class="label-form">Tên liên hệ <small data-v-5d159d94="" style="color: red;">*</small></label><input data-v-5d159d94="" type="text" placeholder="Nhập họ/tên" name="contact_name" class="form-control"><!---->
            </div>
            <div data-v-5d159d94="" class="form-group">
               <label data-v-5d159d94="" class="label-form">Số điện thoại <small data-v-5d159d94="" style="color: red;">*</small></label><input data-v-5d159d94="" type="text" placeholder="Nhập số điện thoại" name="phone" pattern="^\+?\d+(-\d+)*$" class="form-control"><!---->
            </div>
            <div data-v-5d159d94="" class="form-group">
               <label data-v-5d159d94="" class="label-form">
                  Email <!---->
               </label>
               <input data-v-5d159d94="" type="email" placeholder="Nhập email" name="email" class="form-control"><!---->
            </div>
         </div>
         <div class="grid-column" style="margin-bottom: 20px; margin-top: 20px;">
            <div>
               <div class="title-field-map">Chọn vị trí trên bản đồ<small style="color: red;"> ( Di chuyển con trỏ <i class="fa fa-map-marker"></i> để chọn vị trí ) </small>:</div>
               <div id="google-map-vue" style="width: 100%; height: 400px; position: relative; overflow: hidden;">
                  <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                     <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                        <div><button draggable="false" aria-label="Phím tắt" title="Phím tắt" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button></div>
                        <div tabindex="0" aria-label="Bản đồ" aria-roledescription="bản đồ" role="region" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;" aria-describedby="4452E3DD-6781-47B9-86D6-5373A9A7AEBC">
                           <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                              <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                 <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                    <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -12, -116);">
                                       <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                       <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;">
                                          <div style="width: 256px; height: 256px;"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                              <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                              <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                 <div style="width: 26px; height: 37px; overflow: hidden; position: absolute; left: -13px; top: -37px; z-index: 0; animation-duration: 500ms; animation-iteration-count: 1; animation-name: _gm4066;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 26px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                 <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                    <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -12, -116);">
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 256px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 0px;"></div>
                                       <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: -256px;"></div>
                                    </div>
                                 </div>
                              </div>
                              <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                 <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -12, -116);">
                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104064!3i57709!4i256!2m3!1e0!2sm!3i639377577!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=22037" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104063!3i57709!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=36414" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104063!3i57708!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=84976" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104065!3i57708!4i256!2m3!1e0!2sm!3i639377577!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=36532" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104065!3i57709!4i256!2m3!1e0!2sm!3i639377577!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=119041" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104065!3i57710!4i256!2m3!1e0!2sm!3i639377637!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=13186" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104063!3i57710!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=2001" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104064!3i57710!4i256!2m3!1e0!2sm!3i639377637!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=47253" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104064!3i57708!4i256!2m3!1e0!2sm!3i639377577!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=70599" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104062!3i57710!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=36068" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104066!3i57708!4i256!2m3!1e0!2sm!3i639377625!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=10342" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104062!3i57708!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=119043" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104066!3i57710!4i256!2m3!1e0!2sm!3i639377625!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=58438" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104062!3i57709!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=70481" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104066!3i57709!4i256!2m3!1e0!2sm!3i639377625!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=92851" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104061!3i57709!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=104548" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104061!3i57708!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=22039" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104061!3i57710!4i256!2m3!1e0!2sm!3i639377649!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1379903&amp;key=AIzaSyAlsBoRpi-jIBRR1gcihqQxnt7HglijX4k&amp;token=70135" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                 </div>
                              </div>
                           </div>
                           <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                              <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                 <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                 <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                 <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                    <span id="4EC02823-71F4-4CF6-B3EF-23621E02D9A0" style="display: none;">Để đi theo chỉ dẫn, hãy nhấn các phím mũi tên.</span>
                                    <div role="button" style="width: 26px; height: 37px; overflow: hidden; position: absolute; touch-action: none; left: -13px; top: -37px; z-index: 0;" tabindex="0" aria-describedby="4EC02823-71F4-4CF6-B3EF-23621E02D9A0">
                                       <img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" usemap="#gmimap0" style="width: 26px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                       <map name="gmimap0" id="gmimap0">
                                          <area log="miw" coords="13,0,4,3.5,0,12,2.75,21,13,37,23.5,21,26,12,22,3.5" shape="poly" tabindex="-1" title="" style="display: inline; position: absolute; left: 0px; top: 0px; cursor: pointer; touch-action: none;">
                                       </map>
                                    </div>
                                 </div>
                                 <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                              </div>
                           </div>
                           <div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;">
                              <p class="gm-style-mot">Sử dụng ctrl + cuộn để thu phóng bản đồ</p>
                           </div>
                           <div class="LGLeeN-keyboard-shortcuts-view" id="4452E3DD-6781-47B9-86D6-5373A9A7AEBC" style="display: none;">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key" aria-label="Mũi tên trái">←</kbd></td>
                                       <td aria-label="Di chuyển sang trái.">Di chuyển sang trái</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key" aria-label="Mũi tên phải">→</kbd></td>
                                       <td aria-label="Di chuyển sang phải.">Di chuyển sang phải</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key" aria-label="Mũi tên lên">↑</kbd></td>
                                       <td aria-label="Di chuyển lên.">Di chuyển lên</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key" aria-label="Mũi tên xuống">↓</kbd></td>
                                       <td aria-label="Di chuyển xuống.">Di chuyển xuống</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">+</kbd></td>
                                       <td aria-label="Phóng to.">Phóng to</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">-</kbd></td>
                                       <td aria-label="Thu nhỏ.">Thu nhỏ</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Di chuyển lên trên</kbd></td>
                                       <td aria-label="Di chuyển sang trái 75%.">Di chuyển sang trái 75%</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Di chuyển xuống dưới</kbd></td>
                                       <td aria-label="Di chuyển sang phải 75%.">Di chuyển sang phải 75%</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Di chuyển lên</kbd></td>
                                       <td aria-label="Di chuyển lên trên 75%.">Di chuyển lên trên 75%</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Di chuyển xuống</kbd></td>
                                       <td aria-label="Di chuyển xuống dưới 75%.">Di chuyển xuống dưới 75%</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                        <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div><button draggable="false" aria-label="Chuyển đổi chế độ xem toàn màn hình" title="Chuyển đổi chế độ xem toàn màn hình" type="button" aria-pressed="false" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div>
                           <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" data-control-width="40" data-control-height="113" style="margin: 10px; user-select: none; position: absolute; bottom: 127px; right: 40px;">
                              <div class="gmnoprint" data-control-width="40" data-control-height="40" style="display: none; position: absolute;">
                                 <div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;">
                                    <button draggable="false" aria-label="Xoay bản đồ theo chiều kim đồng hồ" title="Xoay bản đồ theo chiều kim đồng hồ" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button>
                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                    <button draggable="false" aria-label="Xoay bản đồ ngược chiều kim đồng hồ" title="Xoay bản đồ ngược chiều kim đồng hồ" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button>
                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                    <button draggable="false" aria-label="Nghiêng bản đồ" title="Nghiêng bản đồ" type="button" class="gm-tilt gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"></button>
                                 </div>
                              </div>
                              <div style="position: absolute; left: 20px; top: 0px;"></div>
                              <div class="gmnoprint" data-control-width="40" data-control-height="81" style="position: absolute; left: 0px; top: 32px;">
                                 <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                    <button draggable="false" aria-label="Phóng to" title="Phóng to" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button>
                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                    <button draggable="false" aria-label="Thu nhỏ" title="Thu nhỏ" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                              <a target="_blank" rel="noopener" title="Mở khu vực này trong Google Maps (mở cửa sổ mới)" aria-label="Mở khu vực này trong Google Maps (mở cửa sổ mới)" href="https://maps.google.com/maps?ll=21.008998,105.820441&amp;z=17&amp;t=m&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3" style="display: inline;">
                                 <div style="width: 66px; height: 26px;"><img alt="Google" src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.6%22%20fill%3D%22%23fff%22%20stroke%3D%22%23fff%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39011%2024.8656%209.39011%2021.7783%209.39011%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2962%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39011%2035.7387%209.39011%2032.6513%209.39011%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22083v-.75H52.0788V20.4412H55.7387V5.220829999999999z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594z%22%20fill%3D%22%23E94235%22/%3E%3Cpath%20d%3D%22M40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594z%22%20fill%3D%22%23FABB05%22/%3E%3Cpath%20d%3D%22M51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M54.9887%205.22083V19.6912H52.8288V5.220829999999999H54.9887z%22%20fill%3D%22%2334A853%22/%3E%3Cpath%20d%3D%22M63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23E94235%22/%3E%3C/svg%3E" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                              </a>
                           </div>
                        </div>
                        <div></div>
                        <div>
                           <div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;">
                              <div class="gmnoprint" style="z-index: 1000001;">
                                 <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                       <div style="width: 1px;"></div>
                                       <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Phím tắt" title="Phím tắt" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Phím tắt</button></div>
                                 </div>
                              </div>
                              <div class="gmnoprint" style="z-index: 1000001;">
                                 <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                       <div style="width: 1px;"></div>
                                       <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Dữ liệu Bản đồ" title="Dữ liệu Bản đồ" type="button" style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Dữ liệu Bản đồ</button><span style="">Dữ liệu bản đồ ©2023</span></div>
                                 </div>
                              </div>
                              <div class="gmnoscreen">
                                 <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2023</div>
                              </div>
                              <button draggable="false" aria-label="Tỷ lệ bản đồ: 50 m/45 pixel" title="Tỷ lệ bản đồ: 50 m/45 pixel" type="button" class="gm-style-cc" aria-describedby="239C1A63-EA78-401C-8879-E9D7636AEB9C" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;">
                                 <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                 </div>
                                 <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <span>50 m&nbsp;</span>
                                    <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 49px;">
                                       <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                                       <div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div>
                                       <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div>
                                       <div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
                                       <div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div>
                                       <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
                                    </div>
                                 </div>
                                 <span id="239C1A63-EA78-401C-8879-E9D7636AEB9C" style="display: none;">Nhấp để chuyển đổi giữa các đơn vị hệ mét và hệ đo lường Anh</span>
                              </button>
                              <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;">
                                 <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                 </div>
                                 <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Điều khoản sử dụng</a></div>
                              </div>
                              <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                 <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                 </div>
                                 <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" dir="ltr" href="https://www.google.com/maps/@21.008998,105.820441,17z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                     <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div>
                     <div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Trang này không thể tải Google Maps đúng cách.</span></div>
                     <table style="width: 100%;">
                        <tr>
                           <td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Bạn có sở hữu trang web này không?</a></td>
                           <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div role="tabpanel" id="Media2" aria-hidden="true" aria-labelledby="step-Media2" class="wizard-tab-container" style="display: none;">
      <div class="medias" value="">
         <div class="list_media"></div>
         <div class="button_group">
            <!----><label for="files_upload" class="  btn btn-block btn-social  btn-primary"><i class="fa fa-instagram"></i> Hình ảnh </label><label class="btn btn-block btn-social  btn-danger"><i class="fa fa-youtube-square"></i> Youtube Video </label>
         </div>
         <input type="file" id="files_upload" name="photo[]" accept=".jpg, .png, .jpeg" multiple="multiple" style="display: none;"><!---->
         <div class="des-payment_money">  </div>
         <!---->
      </div>
      <!---->
   </div>
   
</div>
                     </div>
                     <!-- <div class="l1kr9d9v">
                        <div class="c34gpa3">Thông tin khác</div>
                        <div class="l1kr9d9v withWidth withGutter c29gcq6" style="--c29gcq6-0:100%; --c29gcq6-1:8px; --c29gcq6-4:0px; --c29gcq6-5:-16px; --c29gcq6-9:0px; --c29gcq6-13:100%; --c29gcq6-14:8px; --c29gcq6-17:0px; --c29gcq6-18:-16px; --c29gcq6-22:0px; --c29gcq6-26:100%; --c29gcq6-27:8px; --c29gcq6-30:0px; --c29gcq6-31:-16px; --c29gcq6-35:0px; --c29gcq6-39:100%; --c29gcq6-40:8px; --c29gcq6-43:0px; --c29gcq6-44:-16px; --c29gcq6-48:0px; --c29gcq6-52:100%; --c29gcq6-53:8px; --c29gcq6-56:0px; --c29gcq6-57:-16px; --c29gcq6-61:0px;">
                           <div class="l1kr9d9v swjo00u" style="--swjo00u-0: initial; --swjo00u-1: initial; --swjo00u-3: initial; --swjo00u-6: initial; --swjo00u-9: initial; --swjo00u-12: initial; --swjo00u-15: initial;">
                              <div class="withSpan snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2:50%; --snf9jyk-4: initial; --snf9jyk-6:50%; --snf9jyk-8: initial; --snf9jyk-10:50%; --snf9jyk-12: initial; --snf9jyk-14:50%; --snf9jyk-16: initial; --snf9jyk-18:50%; --snf9jyk-20: initial;">
                                 <div>
                                    <div>
                                       <div>
                                          <div id="furnishing_rent" role="combobox" tabindex="0" aria-haspopup="listbox" aria-expanded="false" aria-controls="search-input-listbox">
                                             <div class="crswihc" style="--crswihc-0:100%;">
                                                <div class="i1x0q5ym"><input class="i1pbvj0j ipt13la" type="text" inputmode="text" name="furnishing_rent" value=""><label for="">Tình trạng nội thất (Không bắt buộc)</label></div>
                                                <p class="p1lb3co8"></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                     <!-- <div class="l1kr9d9v">
                        <div class="c34gpa3">Diện tích &amp; giá</div>
                        <div class="l1kr9d9v withWidth withGutter c29gcq6" style="--c29gcq6-0:100%; --c29gcq6-1:8px; --c29gcq6-4:0px; --c29gcq6-5:-16px; --c29gcq6-9:0px; --c29gcq6-13:100%; --c29gcq6-14:8px; --c29gcq6-17:0px; --c29gcq6-18:-16px; --c29gcq6-22:0px; --c29gcq6-26:100%; --c29gcq6-27:8px; --c29gcq6-30:0px; --c29gcq6-31:-16px; --c29gcq6-35:0px; --c29gcq6-39:100%; --c29gcq6-40:8px; --c29gcq6-43:0px; --c29gcq6-44:-16px; --c29gcq6-48:0px; --c29gcq6-52:100%; --c29gcq6-53:8px; --c29gcq6-56:0px; --c29gcq6-57:-16px; --c29gcq6-61:0px;">
                           <div class="l1kr9d9v swjo00u" style="--swjo00u-0: initial; --swjo00u-1: initial; --swjo00u-3: initial; --swjo00u-6: initial; --swjo00u-9: initial; --swjo00u-12: initial; --swjo00u-15: initial;">
                              <div class="withSpan snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2:100%; --snf9jyk-4: initial; --snf9jyk-6:100%; --snf9jyk-8: initial; --snf9jyk-10:100%; --snf9jyk-12: initial; --snf9jyk-14:100%; --snf9jyk-16: initial; --snf9jyk-18:100%; --snf9jyk-20: initial;">
                                 <div>
                                    <div>
                                       <div>
                                          <div class="c17xe3w4" style="--c17xe3w4-0:100%;">
                                             <div class="i64zdy1"><input class="ihj19gg ij46tfg required" type="text" inputmode="decimal" id="size" name="size" value=""><label for="size">Diện tích</label></div>
                                             <p class="p131urh5"></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="withSpan snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2:100%; --snf9jyk-4: initial; --snf9jyk-6:100%; --snf9jyk-8: initial; --snf9jyk-10:100%; --snf9jyk-12: initial; --snf9jyk-14:100%; --snf9jyk-16: initial; --snf9jyk-18:100%; --snf9jyk-20: initial;">
                                 <div>
                                    <div>
                                       <div>
                                          <div class="c1aub3fk" style="--c1aub3fk-0:100%;">
                                             <div class="isiae2w"><input type="text" inputmode="decimal" class="i1obogxn i1atenow required" id="price" name="price" value=""><label for="price">Giá</label></div>
                                             <p class="paj7k61"></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="withSpan snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2:100%; --snf9jyk-4: initial; --snf9jyk-6:100%; --snf9jyk-8: initial; --snf9jyk-10:100%; --snf9jyk-12: initial; --snf9jyk-14:100%; --snf9jyk-16: initial; --snf9jyk-18:100%; --snf9jyk-20: initial;">
                                 <div>
                                    <div>
                                       <div>
                                          <div class="c1aub3fk" style="--c1aub3fk-0:100%;">
                                             <div class="isiae2w"><input type="text" inputmode="decimal" class="i1obogxn i1atenow" id="deposit" name="deposit" value=""><label for="deposit">Số tiền cọc</label></div>
                                             <p class="paj7k61"></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="l1kr9d9v"> -->
   <div class="c34gpa3">Tiêu đề tin đăng và Mô tả chi tiết</div>
   <!-- <div class="l1kr9d9v withWidth withGutter c29gcq6" style="--c29gcq6-0:100%; --c29gcq6-1:8px; --c29gcq6-4:0px; --c29gcq6-5:-16px; --c29gcq6-9:0px; --c29gcq6-13:100%; --c29gcq6-14:8px; --c29gcq6-17:0px; --c29gcq6-18:-16px; --c29gcq6-22:0px; --c29gcq6-26:100%; --c29gcq6-27:8px; --c29gcq6-30:0px; --c29gcq6-31:-16px; --c29gcq6-35:0px; --c29gcq6-39:100%; --c29gcq6-40:8px; --c29gcq6-43:0px; --c29gcq6-44:-16px; --c29gcq6-48:0px; --c29gcq6-52:100%; --c29gcq6-53:8px; --c29gcq6-56:0px; --c29gcq6-57:-16px; --c29gcq6-61:0px;">
      <div class="l1kr9d9v swjo00u" style="--swjo00u-0: initial; --swjo00u-1: initial; --swjo00u-3: initial; --swjo00u-6: initial; --swjo00u-9: initial; --swjo00u-12: initial; --swjo00u-15: initial;">
         <div class="withSpan snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2:100%; --snf9jyk-4: initial; --snf9jyk-6:100%; --snf9jyk-8: initial; --snf9jyk-10:100%; --snf9jyk-12: initial; --snf9jyk-14:100%; --snf9jyk-16: initial; --snf9jyk-18:100%; --snf9jyk-20: initial;">
            <div>
               <div>
                  <div>
                     <div class="c17xe3w4" style="--c17xe3w4-0:100%;">
                        <div class="i64zdy1"><input class="ihj19gg ij46tfg required" type="text" inputmode="text" id="subject" name="subject" value=""><label for="subject">Tiêu đề tin đăng</label></div>
                        <p class="p131urh5"></p>
                     </div>
                     <div class="wfq6gk9" style="--wfq6gk9-0:-22px;"><span data-testid="test-length">0</span><span>/</span><span data-testid="test-max">50</span><span> kí tự</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="withSpan snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2:100%; --snf9jyk-4: initial; --snf9jyk-6:100%; --snf9jyk-8: initial; --snf9jyk-10:100%; --snf9jyk-12: initial; --snf9jyk-14:100%; --snf9jyk-16: initial; --snf9jyk-18:100%; --snf9jyk-20: initial;">
            <div>
               <div>
                  <div>
                     <div class="c1uys7u0" style="--c1uys7u0-0:100%;">
                        <div class="error t1gt6axt" style="--t1gt6axt-5:136px;">
                           <div class="focus-capture"></div>
                           <textarea class="required sodjbf4" inputmode="text" id="body" name="body" placeholder="Nên có: loại Phòng trọ, vị trí, tiện ích, diện tích, tình trạng nội thất, v.v.
                              Ví dụ: Phòng trọ 30m2 đường Nguyễn Xí, Bình Thạnh, nội thất đầy đủ."></textarea>
                           <label for="body">Mô tả chi tiết</label>
                        </div>
                        <p class="poe54zc">Vui lòng nhập ít nhất 10 từ</p>
                     </div>
                     <div class="wfq6gk9" style="--wfq6gk9-0:-12px;"><span data-testid="test-length">0</span><span>/</span><span data-testid="test-max">1500</span><span> kí tự</span></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <div class="grid-column grid-xm-column-1">
   <div class="form-group">
      <label class="label-form">
         Mô tả:  <!---->
      </label>
      <textarea rows="3" placeholder="Nhập mô tả" minlength="20" maxlength="5000" required="required" class="form-control" style="resize: vertical; min-height: 100px; border-radius: 5px; font-size: 15px; line-height: 1.3; height: 113px;"></textarea>
      <!---->
   </div>
</div>
</div>
<div class="grid-column grid-column-4 grid-xm-column-1">
   <div data-v-2a5ddd9d="" class="form-group">
      <label data-v-2a5ddd9d="" class="label-form">
         Giá : <!---->
      </label>
      <div data-v-2a5ddd9d="" class="input-group"><input data-v-2a5ddd9d="" type="text" placeholder="Nhập giá" name="price" class="form-control"><span data-v-2a5ddd9d="" class="input-group-addon">VNĐ</span></div>
      <!---->
   </div>
   <div data-v-2a5ddd9d="" class="form-group">
      <label data-v-2a5ddd9d="" class="label-form">
         Diện tích : <!---->
      </label>
      <div data-v-2a5ddd9d="" class="input-group"><input data-v-2a5ddd9d="" type="text" placeholder="Nhập diện tích" name="list_acreage" class="form-control"><span data-v-2a5ddd9d="" class="input-group-addon">m<sup>2</sup></span></div>
      <!---->
   </div>
   
</div>    
                  <div class="l6ks4td">
                     <div class="withGutter c29gcq6" style="--c29gcq6-0: initial; --c29gcq6-1:8px; --c29gcq6-4:-16px; --c29gcq6-5:-16px; --c29gcq6-9:16px; --c29gcq6-13: initial; --c29gcq6-14:8px; --c29gcq6-17:-16px; --c29gcq6-18:-16px; --c29gcq6-22:16px; --c29gcq6-26: initial; --c29gcq6-27:8px; --c29gcq6-30:-16px; --c29gcq6-31:-16px; --c29gcq6-35:16px; --c29gcq6-39: initial; --c29gcq6-40:8px; --c29gcq6-43:-16px; --c29gcq6-44:-16px; --c29gcq6-48:16px; --c29gcq6-52: initial; --c29gcq6-53:8px; --c29gcq6-56:-16px; --c29gcq6-57:-16px; --c29gcq6-61:16px;">
                        <div class="swjo00u" style="--swjo00u-0:center; --swjo00u-1: initial; --swjo00u-3: initial; --swjo00u-6: initial; --swjo00u-9: initial; --swjo00u-12: initial; --swjo00u-15: initial;">
                           <div class="snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2: initial; --snf9jyk-4: initial; --snf9jyk-6: initial; --snf9jyk-8: initial; --snf9jyk-10: initial; --snf9jyk-12: initial; --snf9jyk-14: initial; --snf9jyk-16: initial; --snf9jyk-18: initial; --snf9jyk-20: initial;"><button class="b1ek51v5 outline o-accent r-normal large w-normal i-left stretch" type="button">XEM TRƯỚC</button></div>
                           <div class="snf9jyk" style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2: initial; --snf9jyk-4: initial; --snf9jyk-6: initial; --snf9jyk-8: initial; --snf9jyk-10: initial; --snf9jyk-12: initial; --snf9jyk-14: initial; --snf9jyk-16: initial; --snf9jyk-18: initial; --snf9jyk-20: initial;"><button class="b1ek51v5 accent r-normal large w-normal i-left stretch" type="button">ĐĂNG TIN</button></div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</body>
</html>






















