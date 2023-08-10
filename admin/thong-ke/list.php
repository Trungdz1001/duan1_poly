<?php
require "../../dao/pdo.php";
require "../../dao/thong-ke.php";
require "../../dao/hang-hoa.php";
    
    //load lại ds 
    $ds_thong_ke=thong_ke_hang_hoa();
    


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
    <link href="../../content/css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../content/css/assets/dashboard.css" rel="stylesheet">
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
            <a class="nav-link" href="../loai-hang/list.php">
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
            <a class="nav-link" href="#">
              Hóa Đơn
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Thống kê
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
        <h2>THỐNG KÊ</h2>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">1</th>
              <th scope="col">2</th>
              <th scope="col">3</th>
              <th scope="col">4</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
              <td>
                <button class="btn btn-secondary" style="float: right;">Xóa</button>   
                <button class="btn btn-secondary" style="float: right;">Sửa</button>
              </td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
  </body>
</html>