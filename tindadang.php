<!DOCTYPE html>
<?php
  include './config/config.php';
  session_start();
  $tinh="select * from tinh";
  $tinhsql = mysqli_query($conn,$tinh);
  $huyen="select * from huyen";
  $huyensql = mysqli_query($conn,$huyen);
  $loaiphong = "SELECT DISTINCT * 
  FROM loaiphong ";
  $loaiphongsql = mysqli_query($conn,$loaiphong);
  $baiviet = "SELECT a.NGAYDANG, a.ID_BAIVIET,a.TIEUDE, a.GIOITHIEUBAIVIET, b.TENKHUTRO, e.TENXA, d.TENHUYEN, c.TENTINH, g.TENLOAIPHONG, g.SONGUOIOTOIDA, g.DIENTICH, p.TENPHONG, t.GIA, k.HINH, f.HOTEN, f.SDT, b.SONHA, l.TENTT
  from baiviet as a, khutro as b, tinh as c, huyen as d, xa as e, loaiphong as g, phong as p, giathuephong as t, hinh as k, chukhutro as f, trangthai as l, chukhutro as tr
  where a.ID_KHUTRO = b.ID_KHUTRO 
  and b.ID_CKT = tr.ID_CKT
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
  and tr.TENDANGNHAP=  '".$_SESSION['TENDANGNHAP']."'
  GROUP BY a.ID_BAIVIET DESC";
  $baivietsql = mysqli_query($conn,$baiviet);
?>
 <?php
  include './incl/header.php'
  ?>
<!-- 
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
        <script src="js/ajax1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      <style>
        .ssn_pw home_buy_sell dadang{
                
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 15px 80px 20px 20px;
        }
        </style>
    </head>
   
    <!-- <body class="hero-anime">

<div class="navigation-wrap bg-light start-header start-style">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-md navbar-light">
       
        <div class="ssn_header" alt="">
        <a class="ssn_logo" title="binghouse" href="index.php">
            <img src="image/logo.png" alt="BingHouse">
            <!-- <img src="image/desiglogo.png" alt="BingHouse"> -->
      

<!-- <div class="my-4 py-4">
</div> -->

<!-- Link to page
================================================== -->

    <div class="ssn_pw home_buy_sell dadang">
        <div class="listing">
        <strong class="label">TIN ĐÃ ĐĂNG</strong>

        <?php 
       
                
                if (($baivietsql)) {?>
                  <?php foreach ($baivietsql as $key => $row){?>
                    <div class="home_listing">
                
                                    <div class=" item" style="height:auto">
                        <a class="img_r " href="chitiet.php?ID_BAIVIET=<?php echo $row['ID_BAIVIET'] ?>" title="<?php echo $row['TIEUDE'] ?> ">
                                                          
                                                                             <img src="./ha_phong/<?php echo $row['HINH'] ?>" style="width:150px; height:150px" alt="Cần bán 25x45= 1125m2 đất gần khu công nghiệp, ngay chợ dân đông. giá 290tr/5x45m">
                                                    </a>
                        <div class="info">
                            <h3>
                                <a class="name-vip title" href="chitiet.php?ID_BAIVIET=<?php echo $row['ID_BAIVIET'] ?>" title="<?php echo $row['TIEUDE'] ?>">
                                <?php echo $row['TIEUDE'] ?>                          </a>
                            </h3>
                            <div class="if">
                                <span class="label"> Giá </span>
                                                                    <strong class="f3b1abed9c57992b822e259ef8c7ac1f price"><?php echo number_format ($row['GIA']) .' VNĐ'?></strong>                                                            </div>
                                                            <div class="if">
                                    <span class="label"> Diện tích </span>
                                                                            <div class="acreage"><strong><?php echo $row['DIENTICH'] ?>m<sup>2</sup></strong></div>
                                                                    </div>
                                                            <div class="if">
                                <span class="label"> Địa chỉ </span>
                                <div class="address"><strong><?php echo $row['SONHA'] ?>,<?php echo $row['TENXA'] ?>,<?php echo $row['TENHUYEN'] ?>,<?php echo $row['TENTINH'] ?></strong></div>
                        
                            </div>
                            <div class="if">
                          <span class="label">Giới thiệu </span>
                          <div class="address"><strong><?php echo $row['GIOITHIEUBAIVIET'] ?></strong></div>
                  
                      </div>
                            <div class="if">
                                <span class="label"> Ngày đăng </span>
                                <div class="address"><?php echo $row['NGAYDANG'] ?></div>
                        
                            </div>
                            <div class="info_user_home" >
                                <div class="user_name">
                                <div class="user_avatar" style ="background-color:white">
                              <i  class="fa fa-user" style="font-size:48px;"></i>
                                                                      </div>
                                    <div class="avatar_name">
                                        <span class="phone_name" title="Thị Kim"><?php echo $row['HOTEN'] ?></span>
                                                                                    <span class="phone_number"> <?php echo $row['SDT'] ?> </span>
                                                                            </div>
                                </div>
                            </div>
                            <div class="if">
                  <!-- <button type="button" class="btn btn-primary">Sửa</button> -->
                  <button type="button" class="btn btn-danger"> <a href="xoatindadang.php?ID_BAIVIET=<?php echo $row['ID_BAIVIET'] ?>" style="color: white;" > Xóa </a></button>
                  </div>
                        </div>
                    </div>
</div>
                  <?php } }
                 
                  ?> 
                 

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
<?php
   include 'incl/footer.php';
?>
</html>


