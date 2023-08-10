<?php
    require "../../dao/pdo.php";
    require "../../dao/hoa-don.php";
    //update loại
    if(isset($_POST['btn-edit'])){
        $ma_hd=$_POST['ma_hd'];
        $trang_thai=$_POST['trang_thai'];
        hoa_don_update($ma_hd,$trang_thai);
        header('location: list.php');
    }
    //hiển thị loại
    if(isset($_GET['ma_hd'])){
        $ma_hd=$_GET['ma_hd'];
        $hoa_don_info=hoa_don_getinfo($ma_hd);
        extract($hoa_don_info);
    
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
            <a class="nav-link" href="#../danh-muc/list.php">
              Danh Mục
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../img/list.php">
              Img
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../khach-hang/list.php">
              Khách Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../binh-luan/list.php">
              Bình Luận
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="#">
              Hóa Đơn
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../khuyen-mai/list.php"">
              Khuyến Mãi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../thong-ke/list.php">
              Thống Kê
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
            ⇦ Quay lại trang chủ
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>HÓA ĐƠN</h2>
      </div>
            <form action="" method="POST">
            <div class="row">
                <div class="form-group col-sm-4">
                    <h4>Mã hóa đơn</h4>
                    <input type="text"  class="form-control" name="ma_hd" value="<?php echo $ma_hd?>">
                  </div>
                  <div class="form-group col-sm-4">
                    <h4>Mã khách hàng</h4>
                    <input type="text"  class="form-control" value="<?php echo $ma_kh?>"disabled>
                  </div>
                  <div class="form-group col-sm-4">
                    <h4>Tổng tiền</h4>
                    <input type="text"  class="form-control" value="<?php echo number_format($tong_tien).'đ'?>"disabled>
                  </div>
                  <div class="form-group col-sm-4">
                    <h4>Địa chỉ giao hàng</h4>
                    <input type="text"  class="form-control" value="<?php echo $dia_chi_giao_hang?>" disabled>
                  </div>
                  <div class="form-group col-sm-4">
                    <h4>Ngày đặt</h4>
                    <input type="text"  class="form-control" value="<?php echo $ngay_dat?>"disabled>
                  </div>
                  <div class="form-group col-sm-4">
                    <h4>TRẠNG THÁI</h4>
                    <select name="trang_thai" class="form-select">
                      <option>Đang Xử Lý</option>
                      <option>Đang Giao Hàng</option>
                      <option>Đã Giao Hàng</option>
                      <option>Hoàn Thành</option>
                    </select>
                </div>
                
                <div class="form-group col-sm-12">
                    <br>
                    <button class="btn btn-primary" name="btn-edit">Sửa</button>
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