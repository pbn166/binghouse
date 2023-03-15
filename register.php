<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký tài khoản</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/chutro.css">
        <link rel="icon" type="image/x-icon" href="../images/good-icon.png">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #user_register form{
                width: 400px;
                margin: 40px auto;
            }
            #user_register form input{
                margin: 5px 0;
            }
        </style>
    </head>
    <body>
        <?php 
        include 'config/config.php';
        // include './function.php';
        $error = false;
        if (isset($_GET['action']) && $_GET['action'] == 'reg') {
            if (isset($_POST['TENDANGNHAP']) && !empty($_POST['TENDANGNHAP']) && isset($_POST['MATKHAU']) && !empty($_POST['MATKHAU'])) {
                $hoten = $_POST['HOTEN'];
                $gioitinh = $_POST['GIOITINH'];
                $sdt = $_POST['SDT'];
                
                    $result = mysqli_query($conn, "INSERT INTO `chukhutro` (`HOTEN`,`GIOITINH`,`TENDANGNHAP`,`MATKHAU`,`SDT`) VALUES ('".$_POST['HOTEN']."', '".$_POST['GIOITINH']."', '".$_POST['TENDANGNHAP']."', MD5('".$_POST['MATKHAU']."'), '".$_POST['SDT']."');");
                    if (!$result) {
                        if (strpos(mysqli_error($conn), "Duplicate entry") !== FALSE) {
                            $error = "Tài khoản đã tồn tại. Vui lòng chọn tên tài khoản khác";
                        }
                    }
                    mysqli_close($conn);
                
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content-regis">
                        <h1>Thông báo</h1>
                        <h4><?= $error ?></h4>
                        <a href="./register.php">Quay lại</a>
                    </div>
                <?php } else { ?>
                    <div id="edit-notify" class="box-content-regis">
                        <h1><?= ($error !== false) ? $error : "Đăng ký tài khoản thành công" ?></h1>
                        <a href="./login.php">Bạn có thể đăng nhập ngay bây giờ</a>
                    </div>
                <?php } ?>
                <?php } else { ?>
                    <div id="edit-notify" class="box-content-regis">
                        <h1>Vui lòng nhập đầy đủ thông tin</h1>
                        <a class="back" href="./register.php">Quay lại</a>
                    </div>
                <?php

            }

        }else {
        ?>
        <div id="user_register" class="box-content-regis">
            <h1>Đăng ký tài khoản</h1>
            <form action="./register.php?action=reg" method="Post" autocomplete="off">
                <label>Tên tài khoản<label></br>
                <input class="line" type="text" placeholder="Nhập tên tài khoản" name="TENDANGNHAP" value=""><br/>
                <label>Mật khẩu<label></br>
                <input class="line" type="password" placeholder="Nhập mật khẩu" name="MATKHAU" value=""></br>
                <label>Họ tên<label></br>
                <input class="line" type="text" placeholder="Nhập họ tên của bạn" name="HOTEN" value=""><br/>
                <label>Giới tính<label></br>
                <input class="line" type="text" placeholder="Nhập giới tính của bạn" name="GIOITINH" value=""><br/>
                <label>Số điện thoại<label></br>
                <input class="line" type="text" placeholder="Nhập số điện thoại của bạn" name="SDT" value=""><br/>
                <input class="btn" type="submit" value="Đăng ký">
            </form>
        </div>
      <?php } ?>
    </body>
</html>