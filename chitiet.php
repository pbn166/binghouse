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
    $map1= "select * from truong";
  $mapsql1=mysqli_query($conn,$map1);
  
    
    
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
                                 <div class="AdImage_imageWrapper__j1z2m">
                                    <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Cho thuê phòng full nội thất" role="presentation" src="https://cdn.chotot.com/JsEfXj0jSZDmNdLOnjjuLA0-enC_GvS8nKq9YJmhWXM/preset:view/plain/7c4be49f63e13a62560fb75eb4bcdbf1-2820419669975919907.jpg" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></div>
                              </div>
                           </div>
                           <!-- <span class="AdImage_imgPosition__PIaiL">1 / 10</span> -->
                        </div>
                        <div class="AdImage_gallerySlider__QeuHQ">
                           <div class="slick-slider sc-1nl301i-0 iCcejU AdImage_imageSlider__ICkDC slick-initialized" dir="ltr">
                              <!-- <button class="AdImage_button__ho9Jx AdImage_Prev__ciQdk AdImage_buttonGallery__if1rz" aria-label="Prev" tabindex="0" type="button"><i></i></button> -->
                              <div class="slick-list">
                                 <div class="slick-track" style="width: 1220px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                       
                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none;">
                                       <div>
                                          <div class="AdImage_sliderItem__rl6i_" >
                                             <span >
                                                <img alt="<?php echo $result['TIEUDE'] ?>" role="presentation" src="./ha_phong/<?php echo $result['HINH'] ?>" decoding="async" data-nimg="fill">
                                                
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    
                                   
                                 </div>
                              </div>
                              
                           </div>
                        </div>
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
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="DetailView_adviewPtyItem__V_sof">
                  <div class="AdParam_adParamTitle__bU__w">Đặc điểm phòng</div>
                  <div class="AdParam_adParamContainerVeh__Vz4Zt">
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" style="width:30px" alt="" src="https://static.chotot.com/storage/icons/logos/ad-param/ad_type.png"></div>
                           <div class="media-body media-middle" style=" margin-left:10px"><span><span></span><span itemprop="ad_type" class="AdParam_adParamValue__IfaYa">Cho thuê</span></span></div>
                        </div>
                     </div>
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" alt="Tình trạng" src="https://static.chotot.com/storage/icons/logos/ad-param/condition_ad.png"></div>
                           <div class="media-body media-middle" style="margin-left:10px"><span><span>Tình trạng: </span><span itemprop="condition_ad" class="AdParam_adParamValue__IfaYa"><?php echo $result['TENTT'] ?></span></span></div>
                        </div>
                     </div>
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" alt="Diện tích" src="https://static.chotot.com/storage/icons/logos/ad-param/size.png"></div>
                           <div class="media-body media-middle" style=" margin-left:10px"><span><span>Diện tích: </span><span itemprop="size" class="AdParam_adParamValue__IfaYa"><?php echo $result['DIENTICH'] ?> m²</span></span></div>
                        </div>
                     </div>
                     <div class="col-xs-6 no-padding AdParam_adParamItemVeh__mCpPS" data-testid="param-item">
                        <div class="AdParam_adMediaParam__3epxo">
                           <div class="media-left media-top"><img class="AdParam_adParamIcon__m87Vj" alt="Số tiền cọc" src="https://static.chotot.com/storage/icons/logos/ad-param/deposit.png"></div>
                           <div class="media-body media-middle" style="margin-left:10px"><span><span>Giá thuê: </span><span itemprop="deposit" class="AdParam_adParamValue__IfaYa"><?php echo number_format ($result['GIA']) .' VNĐ'?></span></span></div>
                        </div>
                     </div>
                  </div>
               </div>
              
               <div class="DetailView_adviewPtyItem__V_sof">
                  <div>
                     <div class="col-xs-12 no-padding">
                        <div class="AdParam_adMapImage__Ysu7w">
                           
                           

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
            center: [105.76691,10.02056], // starting position [lng, lat]
            //center: [<?php echo $result["LONG_TRO"]; ?>,<?php echo $result["LAT_TRO"]; ?>],
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
             105.77061370522297,10.029943222691958,
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

  function createIcon(icon) {
    var el = document.createElement('div');
    el.style.backgroundImage = 'url(' + icon.url + ')';
    el.style.width = icon.size[0] + 'px';
    el.style.height = icon.size[1] + 'px';
    el.style.backgroundSize = '100%';
    el.style.backgroundRepeat = 'no-repeat';
    el.style.backgroundPosition = 'center';
    el.style.borderRadius = '50%';
    return el;
}

  <?php
  foreach ($mapsql1 as $key => $value){?>
  
 
    
    var name = <?php echo json_encode($value['T_TENTRUONG']); ?>;
    var popupHtml = '<p>'+'<strong>' + name +'</strong>'+ '</p>';
    var popup = new mapboxgl.Popup({
      offset: 25
    }).setHTML(popupHtml);
    var icon = {
      url: './icon/<?php echo $value['T_ICON'] ;?>', // đường dẫn đến file hình ảnh icon
      size: [40,40], // kích thước của icon
      anchor: [20,20], // vị trí neo của icon, tính từ góc trái trên cùng
  };
      
  var marker = new mapboxgl.Marker({
      element: createIcon(icon), // tạo element mới chứa hình ảnh icon
  })
      .setLngLat([<?php echo $value['LONG_TRUONG'] ?>,<?php echo $value['LAT_TRUONG'] ?>])
      .setPopup(popup) // đặt vị trí địa lý cho đối tượng Marker
      .addTo(map);
      
   
    
  

<?php } ?>




    
   
   </script>
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
                        <a class="SellerProfile_sellerWrapperVeh__UFHlO" target="_blank" rel="nofollow" href="">
                          
                           <div class="SellerProfile_nameBounder__btDeS" role="button" tabindex="0">
                              <div class="SellerProfile_flexDiv__IEgQl">
                                 <div class="SellerProfile_nameDivVeh__vE94K"><b role="presentation" style="margin-right: 5px; font-size: 14px;"><?php echo $result["HOTEN"]; ?></b></div>
                                 
                              </div>
                            
                        <div class="LeadButton_wrapperLeadButtonDesktop__SVKE8" style="padding: 12px 4px;">
                           <div class="LeadButton_chatDesktopButton__HSQyg"><a href="https://chat.zalo.me/?phone=<?php echo $SDT?>" id="linkzalo" target="_blank" rel="noopener noreferrer" class="btn LeadButton_buttonOnlyChatDesktop__PzaRw" rel="nofollow"><span class="text-success"><span>CHAT VỚI NGƯỜI BÁN</span></span></a></div>
                          
                        </div>
                           </div>
                        </a>
                        <div class="SellerProfile_inforWrapper__KXg71"></div>
                     </div>
                  </div>
                 
                  <div class="d-lg-block d-none">
                    
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

