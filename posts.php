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
         <link href="css/posts.css" rel="stylesheet" type="text/css" media="all"/>
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
                <a class="nav-link" href="#">Tài khoản</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Tin đăng đã lưu</a>
                  <a class="dropdown-item" href="#">Tìm kiếm đã lưu</a>
                  <a class="dropdown-item" href="#">Đánh giá từ tôi</a>
                  <a class="dropdown-item" href="#">Cài đặt</a>
                  <a class="dropdown-item" href="#">Trợ giúp</a>
                </div>
              </li>
               
                  <a href="signup.php" class="btn btn-primary pl-0 pl-md-2 ml-0 ml-md-4 btn-lg active" role="button" aria-pressed="true">Sign Up</a>
               
            </ul>
          </div>

        </nav>
      </div>
    </div>
  </div>
</div>

<div class="my-4 py-4">
</div>   
 
    <?php
        $namehouse = $typeroom = $room = $address = $const = $image = $comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namehouse = test_input($_POST["namehouse"]);
        $typeroom = test_input($_POST["typeroom"]);
        $room = test_input($_POST["room"]);
        $image = test_input($_POST["image"]);
        $const = test_input($_POST["const"]);
        $address = test_input($_POST["address"]);
        $comment = test_input($_POST["comment"]);
        
        }
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
<div class="ssn_pw_filter">
 <!-- test -->
<div class="box-cla-filter-pc-v2">
<section class="content-header">
  <ol class="breadcrumb"><li>
    <a href="/quanly" class="router-link-active">
    <i class="fa fa-dashboard">
    </i> Trang chủ</a></li>
    <li><a class="active">Đăng tin mua/bán nhà đất</a></li>
  </ol>
</section>

<section class="content ">
  <div class="row">
  <div class="col-xs-12">
  <div class="my-form-wizard md" id="form_add">
  <div class="wizard-navigation">
    <ul role="tablist" class="wizard-nav">
    <li class="step" step-size="md">
      <a href="javascript:void(0)" role="tab" tabindex="0" id="step-Nộidung0" aria-controls="Nộidung0" aria-disabled="true" aria-selected="true" class="step_content active">
      <i class="wizard-icon fa fa-pencil-square-o"></i>
        <span class="mb_hide"> Nội dung</span>
      </a>
    </li>
  <li class="step" step-size="md">
      <a href="javascript:void(0)" role="tab" tabindex="" id="step-Liênhệ1" aria-controls="Liênhệ1" class="step_content disabled">
      <i class="wizard-icon fa fa-phone-square"></i>
      <span class="mb_hide"> Liên hệ</span></a>
  </li>
  <li class="step" step-size="md">
    <a href="javascript:void(0)" role="tab" tabindex="" id="step-Media2" aria-controls="Media2" class="step_content disabled">
    <i class="wizard-icon fa fa-upload"></i>
    <span class="mb_hide"> Media</span></a>
  </li>
</ul>
    <div class="wizard-tab-content"><div role="tabpanel" id="Nộidung0" aria-labelledby="step-Nộidung0" class="wizard-tab-container" style="">
          <div>
          <div class="grid-column">
          <div data-v-5d159d94="" class="form-group">
          <label data-v-5d159d94="" class="label-form">Tiêu đề : <small data-v-5d159d94="" style="color: red;">*</small></label>
          <input data-v-5d159d94="" type="text" placeholder="Nhập tiêu đề" name="title" class="form-control">
        </div>
        </div>
        <div class="grid-column grid-xm-column-1">
        <div class="form-group">
        <label class="label-form">
      Mô tả:  
    </label>
    <textarea rows="3" placeholder="Nhập mô tả" minlength="20" maxlength="5000" required="required" class="form-control" style="resize: vertical; min-height: 100px; border-radius: 5px; font-size: 15px; line-height: 1.3;"></textarea>
    </div>
    </div>
  <div class="grid-column grid-column-2 grid-xm-column-1">
  <div class="form-group">
  <label class="label-form">
      Chuyên mục : <small style="color: red;">*</small></label>
      <select name="cat_id" class="form-control" style="border-radius: 5px;">
      <option disabled="disabled" value="0">Chọn chuyên mục :</option>
      <optgroup label="Nhà đất bán">
      <option value="324"> Bán căn hộ chung cư </option>
      <option value="41"> Bán nhà riêng </option>
      <option value="325"> Bán nhà biệt thự, liền kề </option>
      <option value="163"> Bán nhà mặt phố </option>
      <option value="40"> 
      Bán đất nền dự án </option>
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
      <option value="59"> Cho thuê loại bất động sản khác </option></optgroup></select></div>
      <div data-v-5528d396="" class="form-group form-v4-select-suggest">
      <label data-v-5528d396="" class="label-form">Dự án </label>
      <label data-v-5528d396="" for="d2taCego7g" data-limit="2" class="form-control limit-text" style="min-height: 34px; max-height: 50px; height: inherit;">
      Nhập từ khoá tìm kiếm</label>
      <i data-v-5528d396="" class="icon-row-slg fa fa-angle-down "></i>
      </div></div>
      <div class="grid-column grid-column-4 grid-xm-column-1">
      <div data-v-2a5ddd9d="" class="form-group">
      <label data-v-2a5ddd9d="" class="label-form">Giá :</label>
      <div data-v-2a5ddd9d="" class="input-group">
      <input data-v-2a5ddd9d="" type="text" placeholder="Nhập giá" name="price" class="form-control"><span data-v-2a5ddd9d="" class="input-group-addon">VNĐ</span></div></div>
      <div data-v-2a5ddd9d="" class="form-group">
      <label data-v-2a5ddd9d="" class="label-form">Diện tích :</label>
      <div data-v-2a5ddd9d="" class="input-group">
      <input data-v-2a5ddd9d="" type="text" placeholder="Nhập diện tích" name="list_acreage" class="form-control">
      <span data-v-2a5ddd9d="" class="input-group-addon">m<sup>2</sup></span></div>
      </div>
      </div>
      </div>
      </div>
      <div role="tabpanel" id="Liênhệ1" aria-hidden="true" aria-labelledby="step-Liênhệ1" class="wizard-tab-container" style="display: none;">
      <div>
      <div class="grid-column">
      <div data-v-5d159d94="" class="form-group">
      <label data-v-5d159d94="" class="label-form">
      Địa chỉ <small data-v-5d159d94="" style="color: red;">*</small></label>
      <input data-v-5d159d94="" type="text" placeholder="Nhập địa chỉ" name="address" class="form-control">
      </div>
      </div>
      <div class="grid-column grid-column-4 grid-xm-column-1" messages_error="[object Object]" value="[object Object]">
      <div class="form-group"><label class="label-form">Tỉnh/thành phố
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
    </div>
    <div class="form-group">
    <label class="label-form">Quận/huyện</label>
    <select name="disid" class="form-control" style="border-radius: 5px;"><option disabled="disabled" value="0">Chọn quận/huyện</option></select>
    </div>
    <div class="form-group">
    <label class="label-form">Phường/xã
    </label><select name="wardid" class="form-control" style="border-radius: 5px;">
    <option disabled="disabled" value="0">Chọn phường/xã</option></select>
    </div>
    <div class="form-group"><label class="label-form">Đường/Phố 
    </label><select name="streetid" class="form-control" style="border-radius: 5px;"><option disabled="disabled" value="0">Chọn đường/phố</option></select>
    </div>
    </div>
    <div class="grid-column grid-column-3 grid-xs-column-1">
    <div data-v-5d159d94="" class="form-group">
            
  <label data-v-5d159d94="" class="label-form">Tên liên hệ <small data-v-5d159d94="" style="color: red;">*</small></label>
  <input data-v-5d159d94="" type="text" placeholder="Nhập họ/tên" name="contact_name" class="form-control">
  </div>
  <div data-v-5d159d94="" class="form-group">
  <label data-v-5d159d94="" class="label-form">Số điện thoại <small data-v-5d159d94="" style="color: red;">*</small></label>
  <input data-v-5d159d94="" type="text" placeholder="Nhập số điện thoại" name="phone" pattern="^\+?\d+(-\d+)*$" class="form-control">
  </div>
  <div data-v-5d159d94="" class="form-group"><label data-v-5d159d94="" class="label-form">Email 
  </label><input data-v-5d159d94="" type="email" placeholder="Nhập email" name="email" class="form-control">
  </div></div><div class="grid-column" style="margin-bottom: 20px; margin-top: 20px;"><div><div class="title-field-map">
  Chọn vị trí trên bản đồ<small style="color: red;"> ( Di chuyển con trỏ <i class="fa fa-map-marker"></i> để chọn vị trí ) </small>:</div>
  <div id="google-map-vue" style="width: 100%; height: 400px;">
  <div style="height: 100%; width: 100%;">
  <div style="overflow: hidden;"></div></div></div></div></div></div></div>
  <div role="tabpanel" id="Media2" aria-hidden="true" aria-labelledby="step-Media2" class="wizard-tab-container" style="display: none;">
  <div class="medias" value=""><div class="list_media"></div><div class="button_group">
    <label for="files_upload" class="  btn btn-block btn-social  btn-primary">
  <i class="fa fa-instagram"></i> Hình ảnh </label><label class="btn btn-block btn-social  btn-danger">
    <i class="fa fa-youtube-square"></i> Youtube Video </label>
  </div>
  <input type="file" id="files_upload" name="photo[]" accept=".jpg, .png, .jpeg" multiple="multiple" style="display: none;">
  <div class="des-payment_money">  
  </div>
  </div>
  </div>
  <div style="color: red; font-size: 12px; padding: 20px 0px;"> 
Lưu ý: Bạn phải đảm bảo mọi thông tin đăng bán về bất động sản là chuẩn xác và chịu trách nhiệm trước pháp luật. </div></div></div>
  <div class="my-form-footer clearfix"><div class="wizard-footer-left"><!----></div><div class="wizard-footer-right">
  <span role="button" tabindex="0">
  <button tabindex="-1" type="button" class="btn btn-primary" style="background-color: rgb(52, 152, 219); border-color: rgb(52, 152, 219); color: white;"> Tiếp theo </button></span>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>







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
      </body>
    <footer>&copy; 2023 BingHouse</footer>
</html>