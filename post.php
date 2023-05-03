<!DOCTYPE html>
<?php
include './config/config.php';
$tinh = "select * from tinh";
$tinhsql = mysqli_query($conn, $tinh);
$huyen = "select * from huyen";
$huyensql = mysqli_query($conn, $huyen);
$xa = "select * from xa";
$xasql = mysqli_query($conn, $xa);
session_start();
$loaiphong = "SELECT DISTINCT TENLOAIPHONG, ID_LP
  FROM loaiphong ";
$loaiphongsql = mysqli_query($conn, $loaiphong);






//   if(isset($_POST['submit'])){

//    $khutro = $_POST["khutro"];
//    $iCitId = $_POST["citid"];
//    $iDisId = $_POST["iDisId"];
//    $iWardId = $_POST["iWardId"];
//    echo $khutro;
//    echo $iCitId;
//    echo $iDisId;
//    echo $iWardId;
//    exit();

//    //echo $tenxa;
//    //exit();
//    // echo $username;
//    // echo '<br>';
//    // echo $address;
//    // echo '<br>';
//    // echo $iCitId;
//    // echo '<br>';
//    // echo $iDisId;
//    // echo '<br>';
//    // echo $iWardId;
//    // echo '<br>';
//    // echo $lat;
//    // echo '<br>';
//    // echo $long;

//   }


?>
<html lang="vi">
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
   <script src="js/ajax3.js" type="text/javascript"></script>
   <script src="js/ajax4.js" type="text/javascript"></script>
   <script src="js/ajax5.js" type="text/javascript"></script>
   <script src="js/ajax6.js" type="text/javascript"></script>
   <script src="js/ajax7.js" type="text/javascript"></script>



</head>

<body class="hero-anime">
   <?php if (isset($_SESSION['TENDANGNHAP'])) { ?>
      <?php
      $query = "SELECT * FROM chukhutro WHERE TENDANGNHAP = '" . $_SESSION['TENDANGNHAP'] . "' ";
      $chukhutro = mysqli_fetch_assoc($conn->query($query));
      ?>
      <div class="navigation-wrap bg-light start-header start-style">
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
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                           <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4 active">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-house" viewBox="0 0 16 16">
                                 <path
                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                              </svg>
                              <a class="nav-link dropdown-toggle" href="index.php" role="button" aria-haspopup="true"
                                 aria-expanded="false">Home</a>

                           </li>
                           <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-search-heart" viewBox="0 0 16 16">
                                 <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                                 <path
                                    d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                              </svg>
                              <a class="nav-link" href="search.php">Tìm thuê</a>
                           </li>
                           <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                              <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 26.272 24.4"
                                 width="1em" height="1em" fill="none" class="aw__i1xnxzjm">
                                 <g fill="currentColor">
                                    <path
                                       d="M7.93 10.791c1.502.355 3.04.533 4.582.528 2.287 0 4.535-.382 6.17-1.05.974-.465.557-.225 1.246-.702l.528-.464c.369.736.992 1.27 1.508 1.712l.22.191a7.999 7.999 0 01.976 3.8c0 4.424-3.738 8.162-8.162 8.162-4.424 0-8.162-3.738-8.162-8.162a7.99 7.99 0 011.095-4.015zm-5.464-4.9l.232-.141a8.086 8.086 0 01-.217-.403l-.017-.032a10.24 10.24 0 01-.448-1.03 6.989 6.989 0 002.028.831 1.23 1.23 0 001.382-.646l.254-.145c1.734-.037 3.48-.766 5.172-1.471 1.276-.532 2.48-1.034 3.55-1.192.67-.1 1.308-.15 1.892-.15 1.63 0 2.86.386 3.552 1.114.464.489.68 1.129.64 1.9-.025.51.267.981.734 1.186.438.19.972.097 1.32-.226.126.099.27.172.427.216.413.115.652.216.8.338.16.13.314.364.503.76.876 1.832.478 2.79-.181 4.376l-.018.045c-.126-.435-.291-.77-.587-1.054a11.595 11.595 0 00-.546-.488c-.516-.442-1.05-.898-1.231-1.458A1.222 1.222 0 0019.6 7.82l-.385.399c-.825.547-.582.377-.98.615-.04.018-.08.035-.12.05-1.46.597-3.503.94-5.603.94-1.59 0-3.253-.195-4.567-.534a1.236 1.236 0 00-.937.137c-.232.14-.34.38-.633 1.022l-.143.313c-.19-.714-.428-1.595-.605-2.055a1.228 1.228 0 00-.52-.614c-.8-.473-1.456-1.03-1.952-1.659a4.43 4.43 0 01-.077-.1l-.076-.106a6.617 6.617 0 01-.299-.472l-.191.11.187-.114-.233.14zm23.154.264c-.213-.448-.417-.783-.66-1.045l.62.31-.62-.883c-.345-.49-.967-.77-1.708-.77-.463 0-.914.107-1.274.295-.06-.958-.417-1.802-1.048-2.466C19.634.232 17.25-.271 14.183.182c-1.254.185-2.602.747-3.906 1.291-1.6.667-3.255 1.357-4.734 1.357-1.92-.205-2.354-.722-3.372-1.783l.086.795.009.065c.039.248.15.516.327.793.069.11.147.218.232.325-.886-.538-1.602-1.343-2.17-2.43L.345 0 .153.644C-.32 2.23.387 4.523 1.13 5.993l.02.046.005.005c.08.156.164.311.252.464l.084.14.014.023c.085.142.175.28.27.416l.016.022c.06.086.124.17.189.253.593.75 1.36 1.413 2.283 1.97.895 2.367 1.099 4.39 1.145 5.17-.004.1-.005.202-.005.304 0 5.2 4.394 9.594 9.594 9.594 5.2 0 9.595-4.394 9.595-9.594 0-.133-.003-.265-.01-.396.21-1.031.555-1.859.888-2.66.704-1.696 1.312-3.16.15-5.595z">
                                    </path>
                                    <path
                                       d="M11.84 14.937a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m6.547 0a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m-3.328 5.912c1.97 0 3.767-.987 4.69-2.576a.718.718 0 00-1.24-.72c-.667 1.149-1.99 1.863-3.45 1.863-1.462 0-2.784-.714-3.451-1.863a.711.711 0 00-.436-.332.717.717 0 00-.803 1.052c.922 1.589 2.72 2.576 4.69 2.576">
                                    </path>
                                 </g>
                              </svg>
                              <a class="nav-link" href="#" data-toggle="dropdown">Quản lý tin</a>
                              <svg data-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                 width="1em" height="1em" fill="none" class="aw__d1xmuhl0" id="arrowDownB">
                                 <path
                                    d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z"
                                    fill="currentColor"></path>
                              </svg>

                              <div class="dropdown-menu">
                                 <div class="aw__m12exo7" onclick="hamDropdown()"><a href="" rel="nofollow"><span
                                          class="aw__mdmk8my"></span><span class="aw__meaxp5j">
                                       </span>
                                    </a>
                                    <div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
                                    <div class="aw__c1n389kw"></div>
                                 </div>
                                 <a class="dropdown-item" href="post.php">Đăng Tin</a>
                                 <a class="dropdown-item" href="themkhutro.php">Thêm Khu Trọ</a>
                              </div>


                           </li>
                           
                           <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="aw__i1t7n4kh aw__i1t7n4kh--active">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.99935 3.08366C6.17938 3.08366 3.08268 6.18036 3.08268 10.0003C3.08268 13.8203 6.17938 16.917 9.99935 16.917C13.8193 16.917 16.916 13.8203 16.916 10.0003C16.916 6.18036 13.8193 3.08366 9.99935 3.08366ZM1.91602 10.0003C1.91602 5.53602 5.53505 1.91699 9.99935 1.91699C14.4637 1.91699 18.0827 5.53602 18.0827 10.0003C18.0827 14.4646 14.4637 18.0837 9.99935 18.0837C5.53505 18.0837 1.91602 14.4646 1.91602 10.0003Z"
                                    fill="#222222"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.99935 6.83366C8.59562 6.83366 7.45768 7.9716 7.45768 9.37533C7.45768 10.779 8.59562 11.917 9.99935 11.917C11.4031 11.917 12.541 10.779 12.541 9.37533C12.541 7.9716 11.4031 6.83366 9.99935 6.83366ZM6.29102 9.37533C6.29102 7.32727 7.95129 5.66699 9.99935 5.66699C12.0474 5.66699 13.7077 7.32727 13.7077 9.37533C13.7077 11.4234 12.0474 13.0837 9.99935 13.0837C7.95129 13.0837 6.29102 11.4234 6.29102 9.37533Z"
                                    fill="#222222"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.0005 13.0837C9.06941 13.0837 8.15655 13.3415 7.36306 13.8285C6.56957 14.3156 5.92644 15.0128 5.50496 15.843C5.35912 16.1303 5.00802 16.2449 4.72075 16.0991C4.43349 15.9532 4.31884 15.6021 4.46469 15.3149C4.98369 14.2926 5.77564 13.434 6.75275 12.8342C7.72986 12.2345 8.85396 11.917 10.0005 11.917C11.1469 11.917 12.271 12.2345 13.2481 12.8342C14.2253 13.434 15.0172 14.2926 15.5362 15.3149C15.6821 15.6021 15.5674 15.9532 15.2801 16.0991C14.9929 16.2449 14.6418 16.1303 14.4959 15.843C14.0745 15.0128 13.4313 14.3156 12.6378 13.8285C11.8444 13.3415 10.9315 13.0837 10.0005 13.0837Z"
                                    fill="#222222"></path>
                              </svg>
                              <a class="nav-link" href="#" data-toggle="dropdown">Tài khoản</a>
                              <svg data-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                 width="1em" height="1em" fill="none" class="aw__d1xmuhl0" id="arrowDownB">
                                 <path
                                    d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z"
                                    fill="currentColor"></path>
                              </svg>
                              <?php
                              // session_destroy();
                              if (!isset($_SESSION['TENDANGNHAP'])) {
                                 ?>
                                 <div class="dropdown-menu">
                                    <div class="aw__m12exo7"><a href="login.php" rel="nofollow"><span
                                             class="aw__mdmk8my"></span><span class="aw__meaxp5j">Đăng nhập / Đăng ký</span>
                                       </a>
                                       <div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
                                       <div class="aw__c1n389kw"></div>
                                    </div>
                                   
                                    <a class="dropdown-item" href="trogiup.php">Trợ giúp</a>
                                 </div>
                                 <?php
                              } else { ?>

                                 <div class="dropdown-menu">
                                    <div class="aw__m12exo7" onclick="hamDropdown()"><a href="" rel="nofollow"><span
                                             class="aw__mdmk8my"></span><span class="aw__meaxp5j">
                                             <?php echo $_SESSION['TENDANGNHAP']; ?>
                                          </span>
                                       </a>
                                       <div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
                                       <div class="aw__c1n389kw"></div>
                                    </div>
                                    <a class="dropdown-item" href="tindadang.php">Tin đăng đăng</a>
                                    <a class="dropdown-item" href="setting.php">Cài đặt</a>
                                    <a class="dropdown-item" href="trogiup.php">Trợ giúp</a>
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
      </div> -->
      <div class="l1tlqmyy">
         <div class="g1gd5utk withWidth withGutter c29gcq6"
            style="--c29gcq6-0:100%;--c29gcq6-1:4px;--c29gcq6-4:-8px;--c29gcq6-5:-8px;--c29gcq6-9:8px;--c29gcq6-13:100%;--c29gcq6-14:6px;--c29gcq6-17:-12px;--c29gcq6-18:-12px;--c29gcq6-22:12px;--c29gcq6-26:100%;--c29gcq6-27:8px;--c29gcq6-30:-16px;--c29gcq6-31:-16px;--c29gcq6-35:16px;--c29gcq6-39:100%;--c29gcq6-40:12px;--c29gcq6-43:-24px;--c29gcq6-44:-24px;--c29gcq6-48:24px;--c29gcq6-52:100%;--c29gcq6-53:16px;--c29gcq6-56:-32px;--c29gcq6-57:-32px;--c29gcq6-61:32px">
            <div class="g1gd5utk swjo00u"
               style="--swjo00u-0:initial;--swjo00u-1:initial;--swjo00u-3:initial;--swjo00u-6:initial;--swjo00u-9:initial;--swjo00u-12:initial;--swjo00u-15:initial">
               <!--<div class="withSpan snf9jyk"
                  style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:33.33333333333333%;--snf9jyk-16:initial;--snf9jyk-18:33.33333333333333%;--snf9jyk-20:initial">
                  <h5>Ảnh / video sản phẩm</h5>

                  <div class="ilncnob">
                     <div class="cs1az2d" role="presentation">
                        <div class="info no-button s1m6eucv">
                           <svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12"
                              width="1em" height="1em" class="t19huucb info">
                              <path fill="currentColor"
                                 d="M6 0a6 6 0 100 12A6 6 0 006 0zm-.693 8.59V5.843a.693.693 0 111.386 0V8.59a.693.693 0 11-1.386 0zM6 4.393a.833.833 0 110-1.666.833.833 0 010 1.666z">
                              </path>
                           </svg>
                           <div class="cq9a8j6">Hình ảnh hợp lệ</div>
                        </div>
                     </div>
                     <div role="presentation" class="wfyigpx"
                        style="--wfyigpx-0:pointer; --wfyigpx-1:225px; --wfyigpx-3:1; --wfyigpx-4:0;" tabindex="0">
                        <input type="file" accept="" multiple="" style="display:none" tabindex="-1">
                        <div class="s1sn01m8">
                           <svg xmlns="http://www.w3.org/2000/svg" width="53" height="39" viewBox="0 0 53 39">
                              <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                 <g stroke="#FF8800" stroke-width="2" transform="translate(-255 -179)">
                                    <g transform="translate(132 122)">
                                       <path
                                          d="M150.631 87.337c-5.755 0-10.42-4.534-10.42-10.127 0-5.593 4.665-10.127 10.42-10.127s10.42 4.534 10.42 10.127c0 5.593-4.665 10.127-10.42 10.127m10.42-24.755l-2.315-4.501h-16.21l-2.316 4.5h-11.579s-4.631 0-4.631 4.502v22.505c0 4.5 4.631 4.5 4.631 4.5h41.684s4.631 0 4.631-4.5V67.083c0-4.501-4.631-4.501-4.631-4.501h-9.263z">
                                       </path>
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
                                                <path
                                                   d="M9.91 0c.73 0 1.321.592 1.321 1.321v17.177a1.321 1.321 0 01-2.643 0V1.321C8.588.591 9.18 0 9.91 0z"
                                                   transform="rotate(90 9.91 9.91)"></path>
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
                     <div class="withGutter c29gcq6"
                        style="--c29gcq6-0:initial;--c29gcq6-1:8px;--c29gcq6-4:-16px;--c29gcq6-5:-16px;--c29gcq6-9:16px;--c29gcq6-13:initial;--c29gcq6-14:8px;--c29gcq6-17:-16px;--c29gcq6-18:-16px;--c29gcq6-22:16px;--c29gcq6-26:initial;--c29gcq6-27:8px;--c29gcq6-30:-16px;--c29gcq6-31:-16px;--c29gcq6-35:16px;--c29gcq6-39:initial;--c29gcq6-40:8px;--c29gcq6-43:-16px;--c29gcq6-44:-16px;--c29gcq6-48:16px;--c29gcq6-52:initial;--c29gcq6-53:8px;--c29gcq6-56:-16px;--c29gcq6-57:-16px;--c29gcq6-61:16px">
                        <div class="withRowCols swjo00u"
                           style="--swjo00u-0:center;--swjo00u-1:flex-start;--swjo00u-3:100%;--swjo00u-6:100%;--swjo00u-9:50%;--swjo00u-12:33.33333333333333%;--swjo00u-15:33.33333333333333%">
                        </div>
                     </div>
                  </div>
                  <div class="wsk6u1i" style="--wsk6u1i-0:24px;">
                     <div class="ilncnob">
                        <div role="presentation" tabindex="0" class="wfyigpx"
                           style="--wfyigpx-0:pointer; --wfyigpx-1:225px; --wfyigpx-3:1; --wfyigpx-4:0;">
                           <input accept="" multiple="" type="file" tabindex="-1" style="display: none;">
                           <div class="s1sn01m8">
                              <svg xmlns="http://www.w3.org/2000/svg" width="53" height="39" fill="none"
                                 viewBox="0 0 53 39">
                                 <path stroke="#FF8800" stroke-width="2"
                                    d="M39.62 11.031l.013-.006.012-.006 11.707-6.042a1.329 1.329 0 01.208-.076l.007.003.128.025c.28.054.305.221.305.228v26.046a.412.412 0 01-.07.095.704.704 0 01-.203.145h-.122c-.073 0-.126 0-.176-.002h-.024l-.031-.017-11.721-6.183-.016-.008-.017-.008c-.16-.077-.41-.363-.41-.847v-12.5c0-.484.25-.77.41-.847zm11.716 20.404h.001-.001z">
                                 </path>
                                 <mask id="path-2-inside-1_289_1913" fill="#fff">
                                    <path fill-rule="evenodd"
                                       d="M10.447 7c1.81 0 3.234 1.466 3.234 3.333 0 1.867-1.423 3.333-3.234 3.333S7.213 12.2 7.213 10.333C7.213 8.466 8.636 7 10.447 7zM28.07 36.167c4.656 0 8.537-4 8.537-8.8v-18.4c0-4.8-3.88-8.8-8.537-8.8H8.537C3.881.167 0 4.167 0 8.967v18.4c0 4.934 3.751 8.8 8.537 8.8H28.07z"
                                       clip-rule="evenodd"></path>
                                 </mask>
                                 <path fill="#FF8800"
                                    d="M10.447 9c.65 0 1.234.513 1.234 1.333h4C15.68 7.419 13.419 5 10.447 5v4zm1.234 1.333c0 .82-.584 1.333-1.234 1.333v4c2.972 0 5.234-2.42 5.234-5.333h-4zm-1.234 1.333c-.65 0-1.234-.513-1.234-1.333h-4c0 2.914 2.262 5.333 5.234 5.333v-4zm-1.234-1.333c0-.82.584-1.333 1.234-1.333V5c-2.972 0-5.234 2.42-5.234 5.333h4zM28.07 38.167c5.818 0 10.537-4.953 10.537-10.8h-4c0 3.753-3.042 6.8-6.537 6.8v4zm10.537-10.8v-18.4h-4v18.4h4zm0-18.4c0-5.847-4.72-10.8-10.537-10.8v4c3.495 0 6.537 3.047 6.537 6.8h4zM28.07-1.833H8.537v4H28.07v-4zm-19.533 0C2.72-1.833-2 3.12-2 8.967h4c0-3.753 3.042-6.8 6.537-6.8v-4zM-2 8.967v18.4h4v-18.4h-4zm0 18.4c0 5.98 4.59 10.8 10.537 10.8v-4c-3.624 0-6.537-2.913-6.537-6.8h-4zm10.537 10.8H28.07v-4H8.537v4z"
                                    mask="url(#path-2-inside-1_289_1913)"></path>
                              </svg>
                              <span class="f6ete4">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 20 21">
                                    <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                       <g fill="#FF8800" transform="translate(-161 -428)">
                                          <g transform="translate(132 398)">
                                             <g transform="translate(16.648 17.048)">
                                                <g transform="rotate(-180 16.142 16.838)">
                                                   <rect width="2.643" height="19.82" x="8.588" y="0" rx="1.321"></rect>
                                                   <path
                                                      d="M9.91 0c.73 0 1.321.592 1.321 1.321v17.177a1.321 1.321 0 01-2.643 0V1.321C8.588.591 9.18 0 9.91 0z"
                                                      transform="rotate(90 9.91 9.91)"></path>
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
                        <div class="withGutter c29gcq6"
                           style="--c29gcq6-0: initial; --c29gcq6-1:8px; --c29gcq6-4:-16px; --c29gcq6-5:-16px; --c29gcq6-9:16px; --c29gcq6-13: initial; --c29gcq6-14:8px; --c29gcq6-17:-16px; --c29gcq6-18:-16px; --c29gcq6-22:16px; --c29gcq6-26: initial; --c29gcq6-27:8px; --c29gcq6-30:-16px; --c29gcq6-31:-16px; --c29gcq6-35:16px; --c29gcq6-39: initial; --c29gcq6-40:8px; --c29gcq6-43:-16px; --c29gcq6-44:-16px; --c29gcq6-48:16px; --c29gcq6-52: initial; --c29gcq6-53:8px; --c29gcq6-56:-16px; --c29gcq6-57:-16px; --c29gcq6-61:16px;">
                           <div class="withRowCols swjo00u"
                              style="--swjo00u-0:center; --swjo00u-1:flex-start; --swjo00u-3:100%; --swjo00u-6:100%; --swjo00u-9:50%; --swjo00u-12:33.3333%; --swjo00u-15:33.3333%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>-->
               <div class="withSpan snf9jyk"
                  style="--snf9jyk-0:initial;--snf9jyk-1:initial;--snf9jyk-2:100%;--snf9jyk-4:initial;--snf9jyk-6:100%;--snf9jyk-8:initial;--snf9jyk-10:100%;--snf9jyk-12:initial;--snf9jyk-14:66.66666666666666%;--snf9jyk-16:initial;--snf9jyk-18:66.66666666666666%;--snf9jyk-20:initial">
                  <div class="f1wri8l5">
                     <form action="post.php" method="post" enctype="multipart/form-data"  >
                        <div role="tabpanel" id="Liênhệ1" aria-labelledby="step-Liênhệ1" class="wizard-tab-container"
                           style="">
                           <div>
                              <div class="grid-column">
                                 <div data-v-5d159d94="" class="form-group">
                                    <label data-v-5d159d94="" class="label-form">Tên khu trọ <small data-v-5d159d94=""
                                          style="color: red;">*</small></label>
                                    <select name="khutro" class="f-form-input khutro"
                                       onchange="getDistrictClaFilter(this.value)">
                                       <option value="0">Tất cả khu trọ</option>
                                       <?php
                                       $tro = "select * 
                                                from khutro as a, chukhutro as b 
                                                where a.ID_CKT = b.ID_CKT
                                                and b.TENDANGNHAP='" . $_SESSION['TENDANGNHAP'] . "' ";
                                       $trosql = mysqli_query($conn, $tro);
                                       foreach ($trosql as $key => $value) { ?>
                                          <option value='<?php echo $value['ID_KHUTRO'] ?>'><?php echo $value['TENKHUTRO'] ?>
                                          </option>

                                       <?php } ?>
                                    </select>

                                 </div>
                              </div>
                              <div>
                                 <div class="grid-column">
                                    <div data-v-5d159d94="" class="form-group">
                                       <label data-v-5d159d94="" class="label-form">Địa chỉ <small data-v-5d159d94=""
                                             style="color: red;">*</small></label>
                                       <select name="address" class="f-form-input address"
                                          onchange="getDistrictClaFilter(this.value)">
                                          <option value="0">Địa chỉ</option>

                                       </select>


                                    </div>
                                    <div class="grid-column grid-column-4 grid-xm-column-1"
                                       messages_error="[object Object]" value="[object Object]">

                                       <div class="form-group">
                                          <label class="label-form">
                                             Tỉnh/thành phố <!---->
                                          </label>
                                          <select name="citid" class="form-control tinh" style="border-radius: 5px;">
                                             <option disabled="disabled" value="0">Chọn tỉnh/thành phố</option>


                                          </select>
                                          <!---->
                                       </div>
                                       <div class="form-group">
                                          <label class="label-form">
                                             Quận/huyện <!---->
                                          </label>
                                          <select name="iDisId" class="form-control huyen" style="border-radius: 5px;">
                                             <option disabled="disabled" value="0">Chọn quận/huyện</option>

                                          </select>
                                          <!---->
                                       </div>
                                       <div class="form-group">
                                          <label class="label-form">
                                             Phường/xã <!---->
                                          </label>
                                          <select name="iWardId" class="form-control xa" style="border-radius: 5px;">
                                             <option disabled="disabled" value="0">Chọn phường/xã</option>
                                          </select>
                                          <!---->
                                       </div>

                                    </div>
                                    <div class="form-group">
                                       <label class="label-form">
                                          Loại phòng
                                       </label>
                                       <select name="idroom" class="form-control typeroom" style="border-radius: 5px;">
                                          <option value="0">Chọn loại phòng</option>

                                       </select>
                                       <!---->
                                    </div>

                                    <div class="form-group">
                                       <label class="label-form">
                                          Phòng
                                       </label>
                                       <select name="phongtro" class="form-control room" style="border-radius: 5px;">
                                          <option value="0">Chọn phòng</option>


                                       </select>
                                       <!---->
                                    </div>
                                    <div class="grid-column grid-column-3 grid-xs-column-1">
                                       <div data-v-5d159d94="" class="form-group">
                                          <label data-v-5d159d94="" class="label-form">
                                             Tên liên hệ
                                             <small data-v-5d159d94="" style="color: red;">*</small>
                                          </label><input data-v-5d159d94="" type="text" disabled
                                             value="<?= $chukhutro['HOTEN'] ?>" placeholder="Nhập họ/tên"
                                             name="contact_name" class="form-control">
                                       </div>
                                       <div data-v-5d159d94="" class="form-group">
                                          <label data-v-5d159d94="" class="label-form">
                                             Số điện thoại
                                             <small data-v-5d159d94="" style="color: red;">*</small>
                                          </label><input data-v-5d159d94="" type="text" disabled
                                             value="<?= $chukhutro['SDT'] ?>" placeholder="Nhập số điện thoại" name="phone"
                                             pattern="^\+?\d+(-\d+)*$" class="form-control">
                                       </div>

                                    </div>
                                    <div class="grid-column" style="margin-bottom: 20px; margin-top: 20px;">
                                    </div>
                                 </div>
                              </div>
                              <div role="tabpanel" id="Media2" aria-hidden="true" aria-labelledby="step-Media2"
                                 class="wizard-tab-container" style="display: none;">
                                 <div class="medias" value="">
                                    <div class="list_media"></div>
                                    <div class="button_group">
                                       <!----><label for="files_upload" class="  btn btn-block btn-social  btn-primary"><i
                                             class="fa fa-instagram"></i> Hình ảnh </label><label
                                          class="btn btn-block btn-social  btn-danger"><i class="fa fa-youtube-square"></i>
                                          Youtube Video </label>
                                    </div>
                                    <input type="file" id="files_upload" name="photo[]" accept=".jpg, .png, .jpeg"
                                       multiple="multiple" style="display: none;"><!---->
                                    <div class="des-payment_money"> </div>
                                    <!---->
                                 </div>
                                 <!---->
                              </div>

                           </div>
                        </div>
                        <div class="c34gpa3">Tiêu đề tin đăng và Mô tả chi tiết</div>
                        <div class="grid-column grid-xm-column-1">
                           <div class="form-group">
                              <label class="label-form">
                                 Tiêu đề:
                              </label>
                              <textarea name="TIEUDE" rows="3" placeholder="Nhập tiêu đề" minlength="20" maxlength="5000"
                                 required="required" class="form-control"
                                 style="resize: vertical; min-height: 100px; border-radius: 5px; font-size: 15px; line-height: 1.3; height: 113px;"></textarea>
                           </div>

                        </div>
                        <div class="grid-column grid-xm-column-1">
                           <div class="form-group">
                              <label class="label-form">
                                 Mô tả:
                              </label>
                              <textarea name="MOTA" rows="3" placeholder="Nhập mô tả" minlength="20" maxlength="5000"
                                 required="required" class="form-control"
                                 style="resize: vertical; min-height: 100px; border-radius: 5px; font-size: 15px; line-height: 1.3; height: 113px;"></textarea>
                           </div>
                        </div>
                  </div>
                  <div class="grid-column grid-column-4 grid-xm-column-1">
                     <div class="form-group">
                        <label class="label-form">
                           Giá <!---->
                        </label>
                        <select name="citid" class="form-control price" style="border-radius: 5px;">
                           <option value="0">Chọn giá</option>


                        </select>
                        <!---->
                     </div>
                     <div data-v-2a5ddd9d="" class="form-group">
                        <label class="label-form">
                           Số người ở <!---->
                        </label>
                        <select name="citid" class="form-control num" style="border-radius: 5px;">
                           <option value="0">Chọn số người ở</option>


                        </select>
                     </div>
                     <div data-v-2a5ddd9d="" class="form-group">
                        <label class="label-form">
                           Diện tích <!---->
                        </label>
                        <select name="citid" class="form-control dt" style="border-radius: 5px;">
                           <option value="0">Chọn diện tích</option>


                        </select>

                     </div>

                  </div>
                  <div class="l6ks4td">
                     <div class="withGutter c29gcq6"
                        style="--c29gcq6-0: initial; --c29gcq6-1:8px; --c29gcq6-4:-16px; --c29gcq6-5:-16px; --c29gcq6-9:16px; --c29gcq6-13: initial; --c29gcq6-14:8px; --c29gcq6-17:-16px; --c29gcq6-18:-16px; --c29gcq6-22:16px; --c29gcq6-26: initial; --c29gcq6-27:8px; --c29gcq6-30:-16px; --c29gcq6-31:-16px; --c29gcq6-35:16px; --c29gcq6-39: initial; --c29gcq6-40:8px; --c29gcq6-43:-16px; --c29gcq6-44:-16px; --c29gcq6-48:16px; --c29gcq6-52: initial; --c29gcq6-53:8px; --c29gcq6-56:-16px; --c29gcq6-57:-16px; --c29gcq6-61:16px;">
                        <div class="swjo00u"
                           style="--swjo00u-0:center; --swjo00u-1: initial; --swjo00u-3: initial; --swjo00u-6: initial; --swjo00u-9: initial; --swjo00u-12: initial; --swjo00u-15: initial;">
                           <div class="snf9jyk"
                              style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2: initial; --snf9jyk-4: initial; --snf9jyk-6: initial; --snf9jyk-8: initial; --snf9jyk-10: initial; --snf9jyk-12: initial; --snf9jyk-14: initial; --snf9jyk-16: initial; --snf9jyk-18: initial; --snf9jyk-20: initial;">
                              <button class="b1ek51v5 outline o-accent r-normal large w-normal i-left stretch"
                                 type="button">XEM TRƯỚC</button>
                           </div>
                           <div class="snf9jyk"
                              style="--snf9jyk-0: initial; --snf9jyk-1: initial; --snf9jyk-2: initial; --snf9jyk-4: initial; --snf9jyk-6: initial; --snf9jyk-8: initial; --snf9jyk-10: initial; --snf9jyk-12: initial; --snf9jyk-14: initial; --snf9jyk-16: initial; --snf9jyk-18: initial; --snf9jyk-20: initial;">
                              <button class="b1ek51v5 accent r-normal large w-normal i-left stretch" name="submit"
                                 type="submit">ĐĂNG TIN</button>
                           </div>
                        </div>
                     </div>
                     </form>
                     <?php
                     if (isset($_POST['submit'])) {
                        $tieude = $_POST['TIEUDE'];
                        $mota = $_POST['MOTA'];
                        $khutro = $_POST['khutro'];
                        $phongtro = $_POST['phongtro'];
                        $sql = "INSERT INTO BAIVIET(ID_KHUTRO, TIEUDE, GIOITHIEUBAIVIET, STT) VALUES('" . $khutro . "', '" . $tieude . "', '" . $mota . "', '" . $phongtro . "')";
                        $dangtin_sql = mysqli_query($conn, $sql);
                        // header('location: index.php');
                     }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php } else { ?>
      <div class="alert alert-secondary" role="alert">
         Vui lòng <a href="login.php"><i>Đăng nhập</i></a> để đăng tin
      </div>
   <?php } ?>
   <?php

   ?>
</body>
<?php
  include './incl/footer.php'
  ?>


</html>