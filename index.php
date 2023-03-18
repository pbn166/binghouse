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
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="aw__i1t7n4kh aw__i1t7n4kh--active"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 3.08366C6.17938 3.08366 3.08268 6.18036 3.08268 10.0003C3.08268 13.8203 6.17938 16.917 9.99935 16.917C13.8193 16.917 16.916 13.8203 16.916 10.0003C16.916 6.18036 13.8193 3.08366 9.99935 3.08366ZM1.91602 10.0003C1.91602 5.53602 5.53505 1.91699 9.99935 1.91699C14.4637 1.91699 18.0827 5.53602 18.0827 10.0003C18.0827 14.4646 14.4637 18.0837 9.99935 18.0837C5.53505 18.0837 1.91602 14.4646 1.91602 10.0003Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 6.83366C8.59562 6.83366 7.45768 7.9716 7.45768 9.37533C7.45768 10.779 8.59562 11.917 9.99935 11.917C11.4031 11.917 12.541 10.779 12.541 9.37533C12.541 7.9716 11.4031 6.83366 9.99935 6.83366ZM6.29102 9.37533C6.29102 7.32727 7.95129 5.66699 9.99935 5.66699C12.0474 5.66699 13.7077 7.32727 13.7077 9.37533C13.7077 11.4234 12.0474 13.0837 9.99935 13.0837C7.95129 13.0837 6.29102 11.4234 6.29102 9.37533Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0005 13.0837C9.06941 13.0837 8.15655 13.3415 7.36306 13.8285C6.56957 14.3156 5.92644 15.0128 5.50496 15.843C5.35912 16.1303 5.00802 16.2449 4.72075 16.0991C4.43349 15.9532 4.31884 15.6021 4.46469 15.3149C4.98369 14.2926 5.77564 13.434 6.75275 12.8342C7.72986 12.2345 8.85396 11.917 10.0005 11.917C11.1469 11.917 12.271 12.2345 13.2481 12.8342C14.2253 13.434 15.0172 14.2926 15.5362 15.3149C15.6821 15.6021 15.5674 15.9532 15.2801 16.0991C14.9929 16.2449 14.6418 16.1303 14.4959 15.843C14.0745 15.0128 13.4313 14.3156 12.6378 13.8285C11.8444 13.3415 10.9315 13.0837 10.0005 13.0837Z" fill="#222222"></path></svg>
               <a class="nav-link" href="#" data-toggle="dropdown">Tài khoản</a>
               <svg data-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="aw__d1xmuhl0" id="arrowDownB"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg>
               
                <div class="dropdown-menu">
                <?php
                          // session_destroy();
                          if (!isset($_SESSION['HOTEN'])) {
                            ?> <div class="aw__m12exo7"><a href="login.php" rel="nofollow"><span class="aw__mdmk8my"></span><span class="aw__meaxp5j">Đăng nhập | Đăng ký</span></a>
                            <div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
              <div class="aw__c1n389kw"></div></div>
                  <a class="dropdown-item" href="#">Tin đăng đã lưu</a>
                  <a class="dropdown-item" href="#">Tìm kiếm đã lưu</a>
                  <a class="dropdown-item" href="#">Đánh giá từ tôi</a>
                  <a class="dropdown-item" href="#">Cài đặt</a>
                  <a class="dropdown-item" href="#">Trợ giúp</a>
                  
                </div>
                </div><?php
                          } else {?>
                            <div class="aw__m12exo7" onclick="hamDropdown()"><a href="" rel="nofollow"><span class="aw__mdmk8my"></span><span class="aw__meaxp5j"><?php echo $_SESSION['HOTEN'];?></span></a>
                            <div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div>
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

                <!--<div class="aw__m12exo7"><a href="login.php" rel="nofollow"><span class="aw__mdmk8my"></span><span class="aw__meaxp5j">Đăng nhập / Đăng ký</span>-->
               
                <!-- <div class="aw__n1sdf58a"><div class="aw__n3kpewh">
                  <div class="aw__m8lm3n0">
                    <a class="aw__n12hsycj" id="btnundefinedundefined">
                      <div color="inherit" class="aw__a70lmcz" style="--a70lmcz-0: inherit; --a70lmcz-1:null; --a70lmcz-3:24px;">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="aw__i1t7n4kh aw__i1t7n4kh--active"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 3.08366C6.17938 3.08366 3.08268 6.18036 3.08268 10.0003C3.08268 13.8203 6.17938 16.917 9.99935 16.917C13.8193 16.917 16.916 13.8203 16.916 10.0003C16.916 6.18036 13.8193 3.08366 9.99935 3.08366ZM1.91602 10.0003C1.91602 5.53602 5.53505 1.91699 9.99935 1.91699C14.4637 1.91699 18.0827 5.53602 18.0827 10.0003C18.0827 14.4646 14.4637 18.0837 9.99935 18.0837C5.53505 18.0837 1.91602 14.4646 1.91602 10.0003Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 6.83366C8.59562 6.83366 7.45768 7.9716 7.45768 9.37533C7.45768 10.779 8.59562 11.917 9.99935 11.917C11.4031 11.917 12.541 10.779 12.541 9.37533C12.541 7.9716 11.4031 6.83366 9.99935 6.83366ZM6.29102 9.37533C6.29102 7.32727 7.95129 5.66699 9.99935 5.66699C12.0474 5.66699 13.7077 7.32727 13.7077 9.37533C13.7077 11.4234 12.0474 13.0837 9.99935 13.0837C7.95129 13.0837 6.29102 11.4234 6.29102 9.37533Z" fill="#222222"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0005 13.0837C9.06941 13.0837 8.15655 13.3415 7.36306 13.8285C6.56957 14.3156 5.92644 15.0128 5.50496 15.843C5.35912 16.1303 5.00802 16.2449 4.72075 16.0991C4.43349 15.9532 4.31884 15.6021 4.46469 15.3149C4.98369 14.2926 5.77564 13.434 6.75275 12.8342C7.72986 12.2345 8.85396 11.917 10.0005 11.917C11.1469 11.917 12.271 12.2345 13.2481 12.8342C14.2253 13.434 15.0172 14.2926 15.5362 15.3149C15.6821 15.6021 15.5674 15.9532 15.2801 16.0991C14.9929 16.2449 14.6418 16.1303 14.4959 15.843C14.0745 15.0128 13.4313 14.3156 12.6378 13.8285C11.8444 13.3415 10.9315 13.0837 10.0005 13.0837Z" fill="#222222"></path></svg><span class="show-desktop aw__sfat199" color="#8C8C8C" style="--sfat199-1: inherit; --sfat199-8:#8C8C8C;">Tài khoản</span><svg data-type="monochrome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="none" class="aw__d1xmuhl0" id="arrowDownB"><path d="M7.9 156.8l2.8 3.3 214.8 247.2c7.3 8.4 18.2 13.6 30.3 13.6 12.2 0 23.1-5.4 30.3-13.6l214.7-246.7 3.6-4.1c2.7-3.9 4.3-8.7 4.3-13.7 0-13.7-11.7-25-26.2-25h-453c-14.5 0-26.2 11.2-26.2 25 0 5.2 1.7 10.1 4.6 14z" fill="currentColor"></path></svg></div></a><div><div class="aw__myugkal hide"><div class="aw__m12exo7"><a href="https://id.chotot.com?continue=https%3A%2F%2Fwww.nhatot.com%2F" rel="nofollow"><span class="aw__mdmk8my"></span><span class="aw__meaxp5j">Đăng nhập / Đăng ký</span></a><div class="aw__m1pkalbk"><span class="aw__m9yyskr"></span></div><div class="aw__c1n389kw"></div></div><div label="Quản lí đơn hàng" class="aw__d1udrgd8" style="--d1udrgd8-0:38px; --d1udrgd8-1:#f5f5f5; --d1udrgd8-2:10px 0 10px 12px; --d1udrgd8-3:0;"><span>Quản lí đơn hàng</span></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/escrow/my-orders/identity/buyer?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4">
                        <img class="aw__iutdlvs" src="https://static.chotot.com/storage/chotot-icons/svg/escrow_buy_orders.svg" alt="Đơn mua"></div>
                        <div class="aw__r13jsj5k">Đơn mua</div><div class="clearfix"></div>
                      </a></div
                      ><div class="aw__l16scxip">
                        <a class="aw__i1ed3qfp" href="https://www.chotot.com/escrow/my-orders/identity/seller?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://static.chotot.com/storage/chotot-icons/svg/escrow-orders.svg" alt="Đơn bán"></div><div class="aw__r13jsj5k">Đơn bán</div><div class="clearfix"></div></a></div><div class="aw__l16scxip">
                          <a class="aw__i1ed3qfp aw__ix1odoz" href="https://www.chotot.com/profile/payout?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://static.chotot.com/storage/chotot-icons/svg/escrow.svg" alt="Ví bán hàng"></div><div class="aw__r13jsj5k">Ví bán hàng</div><div class="aw__rive4f8"><b>Liên kết ngay &nbsp;</b><img src="https://static.chotot.com/storage/chotot-icons/svg/chervon_right_orange.svg" alt="chervon"></div><div class="clearfix"></div></a></div>
                          <div label="Tiện ích" class="aw__d1udrgd8" style="--d1udrgd8-0:38px; --d1udrgd8-1:#f5f5f5; --d1udrgd8-2:10px 0 10px 12px; --d1udrgd8-3:0;">
                          <span>Tiện ích</span></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/bookmark/tin-dang-da-luu?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4">
                            <img class="aw__iutdlvs" src="https://static.chotot.com/storage/chotot-icons/svg/menu-saved-ad.svg" alt="Tin đăng đã lưu"></div>
                            <div class="aw__r13jsj5k">Tin đăng đã lưu</div><div class="clearfix"></div></a></div><div class="aw__l16scxip">
                              <a class="aw__i1ed3qfp" href="https://www.chotot.com/bookmark/tim-kiem-da-luu?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://static.chotot.com/storage/chotot-icons/svg/menu-saved-search.svg" alt="Tìm kiếm đã lưu"></div><div class="aw__r13jsj5k">Tìm kiếm đã lưu</div><div class="clearfix"></div></a></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/user/danh-gia-tu-toi?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://static.chotot.com/storage/chotot-icons/svg/menu-rating-management.svg" alt="Đánh giá từ tôi"></div><div class="aw__r13jsj5k">Đánh giá từ tôi</div><div class="clearfix"></div></a></div><div label="Dịch vụ trả phí" class="aw__d1udrgd8" style="--d1udrgd8-0:38px; --d1udrgd8-1:#f5f5f5; --d1udrgd8-2:10px 0 10px 12px; --d1udrgd8-3:0;"><span>Dịch vụ trả phí</span></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/dashboard/balances?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://st.chotot.com/storage/chotot-icons/svg/ct-coin.svg" alt="Đồng Tốt"></div><div class="aw__r13jsj5k">Đồng Tốt</div><div class="clearfix"></div></a></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/goi-pro?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://st.chotot.com/storage/chotot-icons/svg/sub-pro.svg" alt="Gói PRO"></div><div class="aw__r13jsj5k">Gói PRO</div><div class="aw__nitc35w">Mới</div><div class="clearfix"></div></a></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/dashboard/order/history?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://st.chotot.com/storage/chotot-icons/svg/circle-list.svg" alt="Lịch sử giao dịch"></div><div class="aw__r13jsj5k">Lịch sử giao dịch</div><div class="clearfix"></div></a></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/dashboard/shop/overview?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://st.chotot.com/storage/chotot-icons/svg/circle-plus.svg" alt="Tạo Cửa hàng/Chuyên trang"></div><div class="aw__r13jsj5k">Tạo Cửa hàng/Chuyên trang</div><div class="clearfix"></div></a></div><div label="Ưu đãi, khuyến mãi" class="aw__d1udrgd8" style="--d1udrgd8-0:38px; --d1udrgd8-1:#f5f5f5; --d1udrgd8-2:10px 0 10px 12px; --d1udrgd8-3:0;"><span>Ưu đãi, khuyến mãi</span></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/uu-dai/tat-ca?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://storage.googleapis.com/static-chotot-com/storage/icons/svg/reward-icon.svg" alt="Chợ Tốt ưu đãi"></div><div class="aw__r13jsj5k">Chợ Tốt ưu đãi</div><div class="clearfix"></div></a></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/chuong-trinh/vong-quay-may-man/web/game?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://storage.googleapis.com/static-chotot-com/storage/icons/svg/lucky-circle.svg" alt="Vòng quay may mắn"></div><div class="aw__r13jsj5k">Vòng quay may mắn</div><div class="clearfix"></div></a></div><div label="Khác" class="aw__d1udrgd8" style="--d1udrgd8-0:38px; --d1udrgd8-1:#f5f5f5; --d1udrgd8-2:10px 0 10px 12px; --d1udrgd8-3:0;"><span>Khác</span></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="https://www.chotot.com/dashboard/profile?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://storage.googleapis.com/static-chotot-com/storage/icons/svg/setting.svg" alt="Cài đặt tài khoản"></div><div class="aw__r13jsj5k">Cài đặt tài khoản</div><div class="clearfix"></div></a></div><div class="aw__l16scxip"><a class="aw__i1ed3qfp" href="http://trogiup.chotot.com/mua-hang-tai-chotot-vn/meo-mua-hang-tim-viec/meo-mua-hang-an-toan/?site=referrer&amp;continue=https%3A%2F%2Fwww.nhatot.com%2F" target="_self" rel="nofollow noreferrer"><div class="aw__lvl9mf4"><img class="aw__iutdlvs" src="https://storage.googleapis.com/static-chotot-com/storage/icons/svg/help.svg" alt="Trợ giúp"></div><div class="aw__r13jsj5k">Trợ giúp</div><div class="clearfix"></div></a></div></div></div></div></div></div> -->
              </li>
               
                  <!-- <a href="signup.php" class="btn btn-primary pl-0 pl-md-2 ml-0 ml-md-4 btn-lg active" role="button" aria-pressed="true">Sign Up</a> -->
               
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

</body>

</html>


