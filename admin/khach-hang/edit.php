<?php
    require "../../dao/pdo.php";
    require "../../dao/khach-hang.php";
    require "../../dao/img.php";
    $thongbao="";
    //update loại
    if(isset($_POST['btn-edit'])){
      if($_POST['ma_kh']=="" or $_POST['mat_khau']=="" or $_POST['ho_ten']=="" or $_POST['dia_chi']=="" or $_POST['so_dt']==""
        or $_POST['kich_hoat']=="" or $_POST['img_id']=="" or $_POST['email']=="" or $_POST['vai_tro']==""){
        $thongbao ="<script>alert('Vui lòng nhập đầy đủ thông tin!! :(')</script>";
      }else{
        $ma_kh=$_POST['ma_kh'];
        $mat_khau=$_POST['mat_khau'];
        $ho_ten=$_POST['ho_ten'];
        $dia_chi=$_POST['dia_chi'];
        $so_dt=$_POST['so_dt'];
        $kich_hoat=$_POST['kich_hoat'];
        $img_id=$_POST['img_id'];
        $email=$_POST['email'];
        $vai_tro=$_POST['vai_tro'];
        khach_hang_update($ma_kh,$mat_khau,$ho_ten,$dia_chi,$so_dt,$kich_hoat,$img_id,$email,$vai_tro);
        header('location: list.php');
      }
    }
    //hiển thị loại
    if(isset($_GET['ma_kh'])){
        $ma_kh=$_GET['ma_kh'];
        $khach_hang_info=khach_hang_getinfo($ma_kh);
        extract($khach_hang_info);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>ADMIN HLV</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="../../css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/assets/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <h1 style="color: white;">HLV STORE</h1>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../hang-hoa/list.php">
              Hàng Hóa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../danh-muc/list.php">
              Danh Mục
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../img/list.php">
              Img
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="#">
              Khách Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../binh-luan/list.php">
              Bình Luận
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../hoa-don/list.php">
              Hóa Đơn
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
            ⇦ Quay lại trang chủ
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>KHÁCH HÀNG</h2>
      </div>
      <form action="" method="POST">
    <div class="row">
            <div class="form-group col-sm-4">
              <h4>Mã khách hàng (Tên đăng nhập)</h4>
              <input type="text" name="ma_kh" class="form-control" value="<?php echo $ma_kh?>" style="border: none;">
            </div>
            <div class="form-group col-sm-4">
              <h4>Mật khẩu</h4>
              <input type="password" name="mat_khau" class="form-control" value="<?php echo $mat_khau?>">
            </div>
            <div class="form-group col-sm-4">
              <h4>Họ và tên</h4>
              <input type="text" name="ho_ten" class="form-control" value="<?php echo $ho_ten?>">
            </div>
            <div class="form-group col-sm-4">
              <h4>Địa chỉ</h4>
              <input type="password" name="dia_chi" class="form-control" value="<?php echo $mat_khau?>">
            </div>
            <div class="form-group col-sm-4">
              <h4>Số điện thoại</h4>
              <input type="text" name="so_dt" class="form-control" value="<?php echo $so_dt?>">
            </div>
            <div class="form-group col-sm-4">
              <h4>Kích hoạt</h4>
              <input type="text" name="kich_hoat" class="form-control" value="<?php echo $kich_hoat?>">
            </div>
            <div class="form-group col-sm-4">
              <h4>Hình ảnh</h4>
                      <select name="img_id" class="form-control" value="<?php echo $img_id ?>">
                          <?php
                          $ds_img_id = img_selectall();
                          foreach ($ds_img_id as $img) {
                              extract($img);
                              echo '<option value="' . $img_id . '">' . $img_id . '</option>';
                          }
                          ?>
                      </select>
            </div>
            <div class="form-group col-sm-4">
              <h4>Email</h4>
              <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
            </div>
            <div class="form-group col-sm-4">
              <h4>Vai trò (Admin='0')</h4>
              <input type="text" name="vai_tro" class="form-control" value="<?php echo $vai_tro ?>">
            </div>
    </div>
                        
        <div class="form-group col-sm-12">
            <br>
            <button class="btn btn-primary" name="btn-edit">Sửa</button>
            <a href="#" class="btn btn-secondary">Nhập lại</a>
            <a href="list.php" class="btn btn-dark">Danh sách</a>
        </div>
    </div>
</form>
<?php echo $thongbao;
    }
?>
    </main>
  </div>
</div>
  </body>
</html>