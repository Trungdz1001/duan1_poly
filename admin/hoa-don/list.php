<?php
require "../../dao/pdo.php";
require "../../dao/hoa-don.php";
    
    //xóa
    if(isset($_GET['ma_hd'])){
        $ma_hd=$_GET['ma_hd'];
        hoa_don_delete($ma_hd);
        hoadonchitiet_delete($ma_hd);
    }

    //load lại ds loại
    $ds_hoa_don=hoa_don_selectall();

    //var_dump($dsloai);
    
    
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
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">MÃ HÓA ĐƠN</th>
              <th scope="col">MÃ KHÁCH HÀNG</th>
              <th scope="col">HỌ TÊN</th>
              <th scope="col">TỔNG TIỀN</th>
              <th scope="col">ĐỊA CHỈ GIAO HÀNG</th>
              <th scope="col">NGÀY ĐẶT</th>
              <th scope="col">TRẠNG THÁI</th>
            </tr>
          </thead>
          <?php
                foreach($ds_hoa_don as $hoa_don){
                    extract($hoa_don);
                    $del_link="list.php?ma_hd=".$ma_hd;
                    $edit_link="edit.php?ma_hd=".$ma_hd;
                    $chitiet_link="chitiet.php?ma_hd=".$ma_hd;
            ?>
            <tbody>
                <tr>
                <td><?php echo $ma_hd?></td>
                <td><?php echo $ma_kh?></td>
                <td><?php echo $ho_ten?></td>
                <td><?php echo number_format($tong_tien).'đ'?></td>
                <td><?php echo $dia_chi_giao_hang?></td>
                <td><?php echo $ngay_dat?></td>
                <td><?php echo $trang_thai?></td>
                <td>
                  <a href="<?php echo $chitiet_link?>"><button class="btn btn-success">Chi Tiết</button></a>
                  <a href="<?php echo $edit_link?>"><button class="btn btn-primary">Sửa</button></a>
                  <a href="<?php echo $del_link?>"><button class="btn btn-danger">Xóa</button></a>
                </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
        
      </div>
    </main>
  </div>
</div>
  </body>
</html>