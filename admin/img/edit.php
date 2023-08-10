<?php
    require "../../dao/pdo.php";
    require "../../dao/hang-hoa.php";
    require "../../dao/khach-hang.php";
    require "../../dao/img.php";
    $thongbao="";
    //update img
    if(isset($_POST['btn-edit'])){
      if($_POST['img_id']=="" or $_POST['link_img']=="" or $_POST['id_new']=="" or $_POST['ma_hh']=="" or $_POST['username']){
        $thongbao ="<script>alert('Vui lòng nhập đầy đủ thông tin!! :(')</script>";
      }else{
        $img_id=$_POST['img_id'];
        $link_img=$_POST['link_img'];
        $id_new=$_POST['id_new'];
        $ma_hh=$_POST['ma_hh'];
        $username=$_POST['username'];
        img_update($img_id,$link_img,$id_new,$ma_hh,$username);
        header('location: list.php');
      }
    }
    //hiển thị img
    if(isset($_GET['img_id'])){
        $img_id=$_GET['img_id'];
        $img_id_info=img_getinfo($img_id);
        extract($img_id_info);
    
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
            <a class="nav-link text-danger" href="#">
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
        <h2>IMG</h2>
      </div>
            <form action="" method="POST">
            <div class="row">
                <div class="form-group col-sm-4">
                    <h4>Img id</h4>
                    <input type="text" name="img_id" class="form-control" value="<?php echo $img_id?>" style="border: none;">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Link img</h4>
                    <input type="file" name="link_img" class="form-control" value="<?php echo $link_img?>">
                </div>
                <div class="form-group col-sm-4">
                    <h4>Id new</h4>
                    <input type="text" name="id_new" class="form-control" value="<?php echo $id_new?>">
                </div>
                <div class="form-group col-sm-4">
                  <h4>Mã hàng hóa</h4>
                      <select name="ma_hh" class="form-control">
                          <?php
                          $ds_hang_hoa = hang_hoa_selectall();
                          foreach ($ds_hang_hoa as $hang_hoa) {
                              extract($hang_hoa);
                              echo '<option value="' . $ma_hh . '">' . $ten_hh . '</option>';
                          }
                          ?>
                      </select>
                </div>
                
                <div class="form-group col-sm-4">
                    <h4>Username</h4>
                    <input type="text" name="username" class="form-control" value="<?php echo $username?>">
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