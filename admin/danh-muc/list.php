<?php
require "../../dao/pdo.php";
require "../../dao/danh-muc.php";
    
    //xóa
    if(isset($_GET['id_dm_sp'])){
        $id_dm_sp=$_GET['id_dm_sp'];
        danhmuc_delete($id_dm_sp);
    }

    //load lại ds loại
    $dsdanhmuc=danhmuc_selectall();

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
            <a class="nav-link text-danger" href="#">
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
        <h2>DANH MỤC</h2>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID DANH MỤC SẢN PHẨM</th>
              <th scope="col">IMG_ID</th>
              <th scope="col">TIÊU ĐỀ</th>
            </tr>
          </thead>
          <?php
                foreach($dsdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $del_link="list.php?id_dm_sp=".$id_dm_sp;
                    $edit_link="edit.php?id_dm_sp=".$id_dm_sp;
            ?>
            <tbody>
                <tr>
                <td><?php echo $id_dm_sp?></td>
                <td><?php echo $img_id?></td>
                <td><?php echo $tieu_de?></td>
                <td>
                <a href="<?php echo $edit_link?>"><button class="btn btn-primary">Sửa</button></a>
                    <a href="<?php echo $del_link?>"><button class="btn btn-danger">Xóa</button></a>
                </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
        <a href="new.php"><button class="btn btn-dark">Thêm Mới</button></a>
      </div>
    </main>
  </div>
</div>
  </body>
</html>