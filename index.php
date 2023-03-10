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
        <title>BingHouse - Website t??m tr??? C???n Th??</title>
        <meta name="description" content="BingHouse - Website ????ng,tim nh?? tr??? C???n Th?? m???i ng??y. ????ng tin mua b??n UY T??N, NHANH CH??NG, AN TO??N."/>
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
                <a class="nav-link" href="#">T??m thu??</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <a class="nav-link" href="#">Qu???n l?? tin</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <a class="nav-link" href="#">Th??ng b??o</a>
              </li>
              <li class="nav-item pl-4 pl-md-2 ml-0 ml-md-4">
                <a class="nav-link" href="#">T??i kho???n</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Tin ????ng ???? l??u</a>
                  <a class="dropdown-item" href="#">T??m ki???m ???? l??u</a>
                  <a class="dropdown-item" href="#">????nh gi?? t??? t??i</a>
                  <a class="dropdown-item" href="#">C??i ?????t</a>
                  <a class="dropdown-item" href="#">Tr??? gi??p</a>
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

<!-- Link to page
================================================== -->
<div class="ssn_pw_filter" >
  
    <div class="box-cla-filter-pc-v2">
 <form class="f-body cla-filter" action="/search" method="get">
 <div class="row-main">
 <div class="item-filter has-icon border-r flex-none">
 <i class="icon mcon-city"></i>
 <select name="iCat" class="f-form-input">
 <option value="0">Ch???n lo???i nh?? tr???</option>
  <optgroup label="Nh?? ?????t b??n">
  <option value="324">B??n c??n h??? chung c??</option>
    
  <option value="324">B??n c??n h??? chung c??</option>
  <option value="41">B??n nh?? ri??ng</option>
  <option value="325">B??n nh?? bi???t th???, li???n k???</option>
  <option value="163">B??n nh?? m???t ph???</option>
  <option value="40">B??n ?????t n???n d??? ??n</option>
  <option value="283">B??n ?????t</option>
  <option value="44">B??n trang tr???i, khu ngh??? d?????ng</option>
  <option value="45">B??n kho, nh?? x?????ng</option>
  <option value="48">B??n lo???i b???t ?????ng s???n kh??c</option>
  </optgroup>
  <optgroup label="Nh?? ?????t cho thu??">
  <option value="326">Cho thu?? c??n h??? chung c??</option>
  <option value="52">Cho thu?? nh?? ri??ng</option>
  <option value="51">Cho thu?? nh?? m???t ph???</option>
  <option value="57">Cho thu?? nh?? tr???, ph??ng tr???</option>
  <option value="50">Cho thu?? v??n ph??ng</option>
  <option value="55">Cho thu?? c???a h??ng, ki ???t</option>
  <option value="53">Cho thu?? kho, nh?? x?????ng, ?????t</option>
  <option value="59">Cho thu?? lo???i b???t ?????ng s???n kh??c</option>
  </optgroup>
  </select>
 </div>
 <div class="item-filter">
 <input type="text" value="" id="input-form-search" placeholder="T??? kh??a t??m ki???m. VD: Thu?? nh?? tr??? C???u Gi???y" name="keyword" class="f-form-input" autocomplete="off">
 </div>
 <button type="submit" class="btn btn-primary">
 T??m ki???m
 </button>

 </div>
 <div class="row-main-2">
 <div class="item-filter">
 <select name="iCitId" class="f-form-input" onchange="getDistrictClaFilter(this.value)">
 <option value="0">T???t c??? T???nh/Th??nh ph???</option>
 <?php
  foreach ($tinhsql as $key => $value){?>
    <option value=''><?php echo $value['TENTINH'] ?></option>
    
<?php } ?>
  </select>
 </div>
 <div class="item-filter">
 <select name="iDisId" class="f-form-input city" onchange="getWardClaFilter(this.value)">
  <option value="">Qu???n/Huy???n</option>
  <?php
  foreach ($huyensql as $key => $value){?>
    <option value='<?php echo $value['ID_HUYEN'] ?>'><?php echo $value['TENHUYEN'] ?></option>
    
<?php } ?>
  </select>
 </div>
 <div class="item-filter">
 <select name="iWardId" class="f-form-input tinh">
  <option value="0">Ph?????ng/X??</option>    
 </select>
 </div>
 <div class="item-filter">
    <select class="f-form-input" name="iPrice">
  <option selected="" value="0">
 T???t c??? m???c gi??
 </option>
  <option value="1">
 D?????i 1 tri???u
 </option>
  <option value="2">
 1 tri???u - 3 tri???u
 </option>
  <option value="3">
 3 tri???u - 5 tri???u
 </option>
  <option value="4">
 5 tri???u - 7 tri???u
 </option>
  <option value="5">
 7 tri???u - 10 tri???u
 </option>
  <option value="6">
 10 tri???u - 15 tri???u
 </option>
  <option value="7">
 15 tri???u - 20 tri???u
 </option>
  <option value="8">
 20 tri???u - 25 tri???u
 </option>
  <option value="9">
 25 tri???u - 30 tri???u
 </option>
  <option value="10">
 30 tri???u - 40 tri???u
 </option>
  <option value="11">
 40 tri???u - 60 tri???u
 </option>
  <option value="12">
 60 tri???u - 80 tri???u
 </option>
  <option value="13">
 80 tri???u - 100 tri???u
 </option>
  <option value="14">
 100 tri???u - 120 tri???u
 </option>
  <option value="15">
 120 tri???u - 150 tri???u
 </option>
  <option value="16">
 150 tri???u - 200 tri???u
 </option>
  <option value="17">
 200 tri???u - 250 tri???u
 </option>
  <option value="18">
 250 tri???u - 500 tri???u
 </option>
  <option value="19">
 500 tri???u - 750 tri???u
 </option>
  <option value="20">
 750 tri???u - 1 t???
 </option>
  <option value="21">
 1 t??? - 1.5 t???
 </option>
  <option value="22">
 1.5 t??? - 2 t???
 </option>
  <option value="23">
 2 t??? - 3 t???
 </option>
  <option value="24">
 3 t??? - 5 t???
 </option>
  <option value="25">
 5 t??? - 10 t???
 </option>
  <option value="26">
 10 t??? - 20 t???
 </option>
  <option value="27">
 20 t??? - 25 t???
 </option>
  <option value="28">
 25 t??? - 30 t???
 </option>
  <option value="29">
 Tr??n 30 t???
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
