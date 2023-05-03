

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <meta charset="uft-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link type="text/css" rel="stylesheet" href="./main.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
   .gradient-custom-3 {
/* fallback for old browsers */
background:#005b9c;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}

.text-body {
    color: #c0dfff!important;
}
.gradient-custom-4 {
/* fallback for old browsers */
background:#005B9C;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
}
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, rgb(94 143 198), rgb(87, 197, 182));
} */
.form-check-input {
    position: inherit;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}
    </style>
</head>
<body>
<?php 
        include 'config/config.php';
        $error = false;
        if (isset($_GET['action']) && $_GET['action'] == 'reg') {
            if (isset($_POST['TENDANGNHAP']) && !empty($_POST['TENDANGNHAP']) && isset($_POST['MATKHAU']) && !empty($_POST['MATKHAU'])) {
                $hoten = $_POST['HOTEN'];
                $gioitinh = $_POST['GIOITINH'];
                $sdt = $_POST['SDT'];
                
                    $result = mysqli_query($conn, "INSERT INTO `chukhutro` (`HOTEN`,`GIOITINH`,`TENDANGNHAP`,`MATKHAU`,`SDT`) VALUES ('".$_POST['HOTEN']."', '".$_POST['GIOITINH']."', '".$_POST['TENDANGNHAP']."', MD5('".$_POST['MATKHAU']."'), '".$_POST['SDT']."');");
                    if (!$result) {
                        if (strpos(mysqli_error($conn), "Duplicate entry") == FALSE) {
                            $error = "Tài khoản đã tồn tại. Vui lòng chọn tên tài khoản khác";
                        }
                    }
                    mysqli_close($conn);
                
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content-regis">
                        <h1>Thông báo</h1>
                        <h4><?= $error ?></h4>
                        <a href="./signup.php">Quay lại</a>
                    </div>
                <?php } else { 
                  header('Location: ./login.php');?>
                  
                <?php } ?>
                <?php } else { ?>
                    <div id="edit-notify" class="box-content-regis">
                        <h1>Vui lòng nhập đầy đủ thông tin</h1>
                        <a class="back" href="./signup.php">Quay lại</a>
                    </div>
                <?php

            }

        } ?>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Tạo tài khoản</h2>
              
              <form action="./signup.php?action=reg" method="Post" autocomplete="off">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="TENDANGNHAP" />
                  <label class="form-label" for="form3Example1cg">Tên đăng nhập</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example3cg" class="form-control form-control-lg" name="MATKHAU"/>
                  <label class="form-label" for="form3Example3cg">Mật khẩu</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="HOTEN" />
                  <label class="form-label" for="form3Example4cg">Họ tên</label>
                </div>

                <div class="form-outline mb-4">
                <select name="GIOITINH" class="form-control form-control-lg">
                        <option>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                </select>
                  <label class="form-label" for="form3Example4cdg">Giới tính</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="SDT" />
                  <label class="form-label" for="form3Example4cg">Số điện thoại</label>
                </div>
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    Tôi đồng ý với tất cả điều khoản dịch vụ
                    <a href="#!" class="text-body">
                      </a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    input class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Đăng ký">Đăng ký</button>
                    <!-- <input class="btn" type="submit" value="Đăng ký"> -->
                </div>

                <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? 
                  <a href="login.php"
                    class="fw-bold text-body"><u>Đăng nhập tại đây</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>


