<?php
require "../../dao/pdo.php";
require "../../dao/danh-muc.php";
require "../../dao/img.php";
    //thêm mới danhmuc
    $thongbao="";
    if(isset($_POST['btn_insert'])){
      if($_POST['id_dm_sp']=="" or $_POST['tieu_de']=="" or $_POST['noi_dung']=="" or $_POST['img_id']==""){
        $thongbao ="<script>alert('Vui lòng nhập đầy đủ thông tin!! :(')</script>";
      }else{
        $id_dm_sp=$_POST['id_dm_sp'];
        $tieu_de=$_POST['tieu_de'];
        $noi_dung=$_POST['noi_dung'];
        $img_id=$_POST['img_id'];
        danhmuc_insert($id_dm_sp,$tieu_de,$noi_dung,$img_id);
        $thongbao ="<script>alert('Vui lòng nhập đầy đủ thông tin!! :(')</script>";
        header('location: list.php');
      }
    }
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
      <form action="" method="POST">
            <div class="row">
                <div class="form-group col-sm-6">
                    <h4>Id danh mục sản phẩm</h4>
                    <input type="text" name="id_dm_sp" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <h4>Tiêu đề</h4>
                    <input type="text" name="tieu_de" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <h4>Hình ảnh</h4>
                    <select name="img_id" class="form-control">
                        <?php
                        $ds_img_id = img_selectall();
                        foreach ($ds_img_id as $img) {
                            extract($img);
                            echo '<option value="' . $img_id . '">' . $username . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <h4>Nội dung</h4>
                    <input type="text" name="noi_dung" class="form-control">
                </div>
                
                <div class="form-group col-sm-12">
                    <br>
                    <a href="new.php" ><button class="btn btn-primary" name="btn_insert">Thêm mới</button></a>
                    <a href="" class="btn btn-secondary">Nhập lại</a>
                    <a href="list.php" class="btn btn-dark">Danh sách</a>
                </div>
            </div>
        </form>
        <?php echo $thongbao ?>
    </main>
  </div>
</div>
  </body>
</html>