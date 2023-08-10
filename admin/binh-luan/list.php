<?php
require "../../dao/pdo.php";
require "../../dao/binh-luan.php";  
require "../../dao/thong-ke.php";
    
    //xóa
    if(isset($_GET['ma_bl'])){
        $ma_bl=$_GET['ma_bl'];
        binh_luan_delete($ma_bl);

        
    }

    //load lại ds 
    $danhsachbinhluan = binh_luan_selectAll();
    

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
    <link href="../../css/bootstrap.css">
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
            <a class="nav-link" href="../khach-hang/list.php">
              Khách Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="#">
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
        <h2>BÌNH LUẬN</h2>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Nội dung</th>
              <th scope="col">Mã hàng hóa</th>
              <th scope="col">Mã khách hàng</th>
              <th scope="col">Mã hóa đơn</th>
              <th scope="col">Ngày bình luận</th>
              <th scope="col">Trạng thái</th>

            </tr>
     
          </thead>
  <?php 
    foreach ($danhsachbinhluan as $binh_luan) {
      extract($binh_luan);
     
      $xoabl="index.php?act=xoabl&ma_bl=".$ma_bl;
      ?>
      <tbody>
          <tr>
          <th scope="row"><input type="checkbox"></th>
          <td><?php echo $noi_dung?></td>
          <td><?php echo $ma_hh?></td>
          <td><?php echo $ma_kh?></td>
          <td><?php echo $ma_hd?></td>
          <td><?php echo $ngay_bl?></td>
          <td><?php echo $trang_thai?></td>
          <td>
          <a href="<?php echo $xoabl="index.php?act=xoabl&ma_bl=".$ma_bl?>"><input type="submit" value="Xóa"></a>
          </td>
          </tr>
      </tbody>
      <?php
      
    }
                    
  ?>
      <td><a  href="<?php echo $xoabl ?>"><button class="btn btn-danger">Xóa</button></a>       
      </td> 
        </table>
      </div> 
    </main>
  </div>
</div>


  </body>
</html>