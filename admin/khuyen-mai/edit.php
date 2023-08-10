<?php
    require "../../dao/pdo.php";
    require "../../dao/khuyen-mai.php";
    //update loại
    if(isset($_POST['btn-edit'])){
      $ma_km=$_POST['ma_km'];
      $hinh_thuc=$_POST['hinh_thuc'];
      $ngay_ap_dung=$_POST['ngay_ap_dung'];
      $ngay_ket_thuc=$_POST['ngay_ket_thuc'];
      $id_km=$_POST['id_km'];
      khuyen_mai_update($ma_km,$hinh_thuc,$ngay_ap_dung,$ngay_ket_thuc,$id_km);
        header('location: list.php');
    }
    //hiển thị loại
    if(isset($_GET['ma_km'])){
        $ma_km=$_GET['ma_km'];
        $khuyen_mai_info=khuyen_mai_getinfo($ma_km);
        extract($khuyen_mai_info);
    
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
              Hàng hóa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Loại hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../khach-hang/list.php">
              Khách Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../binh-luan/list.php">
              Bình luận
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../thong-ke/list.php">
              Thống kê
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>LOẠI HÀNG</h2>
      </div>
            <form action="" method="POST">
            <div class="row">
                <div class="form-group col-sm-4">
                    <h4>Mã khuyến mãi</h4>
                    <input type="text" name="ma_km" class="form-control" value="<?php echo $ma_km?>" style="border: none;">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Hình thức</h4>
                    <input type="text" name="hinh_thuc" class="form-control" value="<?php echo $hinh_thuc?>">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Ngày áp dụng</h4>
                    <input type="date" name="ngay_ap_dung" class="form-control" value="<?php echo $ngay_ap_dung?>">
                </div>
                <div class="form-group col-sm-4">
                    <h4>ngày kết thúc</h4>
                    <input type="date" name="ngay_ket_thuc" class="form-control" value="<?php echo $ngay_ket_thuc?>">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Id khuyến mãi</h4>
                    <input type="text" name="id_km" class="form-control" value="<?php echo $id_km?>">
                </div>
                
                <div class="form-group col-sm-12">
                    <br>
                    <button class="btn btn-primary" name="btn-edit">Sửa</button>
                    <a href="#" class="btn btn-secondary">Nhập lại</a>
                    <a href="list.php" class="btn btn-dark">Danh sách</a>
                </div>
            </div>
            </form>
            <?php
    }
?>
    </main>
  </div>
</div>
  </body>
</html>