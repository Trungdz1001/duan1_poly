<?php
require "../../dao/pdo.php";
require "../../dao/hoa-don.php";
    //load 
    

    if(isset($_GET['ma_hd'])){
      $ma_hd=$_GET['ma_hd'];
      $hoadonchitiet_info=hoadonchitiet_getinfo($ma_hd);
      
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
    <<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../../content/css/bootstrap.css">
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
        <h2>HÓA ĐƠN CHI TIẾT</h2>
      </div>
      <div class="form-group col-sm-12">
                    <h4>Mã hóa đơn</h4>
                    <input type="text" value="<?php echo $ma_hd ?>" class="form-control" disabled>
                </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">TÊN HÀNG HÓA</th>
                <th scope="col">SỐ LƯỢNG</th>
                <th scope="col">ĐƠN GIÁ</th>
                
              </tr>
            </thead>
            <?php
                  foreach($hoadonchitiet_info as $hoadonchitiet){
                      extract($hoadonchitiet);
              ?>
              <tbody>
                  <tr>
                  <td><?php echo $ten_hh?></td>
                  <td><?php echo $so_luong?></td>
                  <td><?php echo number_format($don_gia).'đ'?></td>
                  
                  </tr>
              </tbody>
              <?php
                  }
              ?>
        </table>
      </div>
                <div class="form-group col-sm-12">
                    <br>
                    <a href="list.php" class="btn btn-dark">Danh sách</a>
                </div>
            </div>
            <?php
                  }
              ?>
    </main>
  </div>
</div>
  </body>
</html>