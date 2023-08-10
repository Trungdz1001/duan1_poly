<?php
require_once("../global.php");
require_once("../dao/pdo.php");
require_once("../dao/khach-hang.php");

$thongbao='';
extract($_REQUEST);
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (exist_param('submit')) {
         $_SESSION['user'] = '';
        $thong_tin_kh = khach_hang_getinfo($user);
        if ($thong_tin_kh) {
            if ($thong_tin_kh['mat_khau'] == $pass) {
              $thongbao = "Đăng nhập thành công";
                $_SESSION['user'] = $user;
                echo "<script> alert ('$thongbao')</script>;";
                echo '<script> location.href = "../index.php"; </script>';
                
                
            } else  {
                $thongbao = "Sai mật khẩu";
                echo "<script> alert ('$thongbao')</script>;";
                
         echo '<script> location.href = "../trangcon/dang-nhap-form.php"; </script>';
                
            }
        }
         else {
            $thongbao = "Sai tên tài khoản hoặc mật khẩu";
            echo "<script> alert ('$thongbao')</script>;";
            echo '<script> location.href = "../trangcon/dang-nhap-form.php"; </script>';
            
           
        }
    }
}


else {
    if (isset($_GET['logout'])) {
        unset($_SESSION['user']);
        echo '<script> location.href = "../index.php"; </script>';
         header("../trang-chinh/index.php");
    }
}

    //header('location: ../../site/trang-chinh/index.php');
?>
