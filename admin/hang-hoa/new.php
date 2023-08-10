<?php

        require "../../dao/pdo.php";
        require "../../dao/hang-hoa.php";
        require "../../dao/danh-muc.php";
        require "../../dao/img.php";
        require "../../global.php";
        $thongbao="";
        if (isset($_POST['btn_insert'])) {
          if($_POST['ma_hh']=="" or $_POST['ten_hh']=="" or $_POST['don_gia']=="" or $_POST['img_id']==""
              or $_POST['ngay_nhap']=="" or $_POST['mo_ta']=="" or $_POST['dac_biet']=="" or $_POST['so_luot_xem']==""
              or $_POST['so_luong_nhap']=="" or $_POST['id_dm_sp']==""){
                $thongbao ="<script>alert('Vui lòng nhập đầy đủ thông tin!! :(')</script>";
              }
              else{
            $ma_hh = $_POST['ma_hh'];
            $ten_hh = $_POST['ten_hh'];
            $path =  '../../content/IMG/';
            $don_gia = $_POST['don_gia'];
            //$giam_gia = $_POST['giam_gia'];
            $img_id = $_POST['img_id'];
            //$hinh=$_FILES['hinh'];
            // $hinh = save_file('hinh', $UPLOAD_URL);
            $ngay_nhap = $_POST['ngay_nhap'];
            $mo_ta = $_POST['mo_ta'];
            $dac_biet = $_POST['dac_biet'];
            $so_luot_xem = $_POST['so_luot_xem'];
            $so_luong_nhap = $_POST['so_luong_nhap'];
            $id_dm_sp = $_POST['id_dm_sp'];
            //move_uploaded_file($_FILES['hinh']['tmp_name'], $path . $hinh);
            hang_hoa_insert($ma_hh,$ten_hh,$don_gia,$img_id,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$so_luong_nhap,$id_dm_sp);
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
            <a class="nav-link text-danger" href="#">
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
        <h2>HÀNG HÓA</h2>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-4">
                    <h4>Mã hàng hóa</h4>
                    <input name="ma_hh" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Tên hàng hóa</h4>
                    <input name="ten_hh" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Đơn giá</h4>
                    <input name="don_gia" class="form-control">
                </div>
                <div class="form-group col-sm-4">
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
                <div class="form-group col-sm-4">
                    <h4>ID danh mục sản phẩm</h4>
                    <select name="id_dm_sp" class="form-control">
                        <?php
                        $ds_id_dm_sp = danhmuc_selectall();
                        foreach ($ds_id_dm_sp as $dm_sp) {
                            extract($dm_sp);
                            echo '<option value="' . $id_dm_sp . '">' . $tieu_de . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <h4>Hàng đặc biệt (Nổi bật='113')</h4>
                    <input type="text" name="dac_biet" value="0" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Ngày nhập</h4>
                    <input name="ngay_nhap" type="date" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Số lượng nhập</h4>
                    <input type="text" name="so_luong_nhap" value="0" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Số lượt xem</h4>
                    <input type="text" name="so_luot_xem" value="0" class="form-control">
                </div>
                <div class="form-group col-sm-12">
                    <h4>Mô tả</h4>
                    <textarea name="mo_ta" class="form-control" row="10"></textarea>
                </div>
                <div class="form-group col-sm-12">
                    <br>
                    <button class="btn btn-primary" name="btn_insert">Thêm mới</button>
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