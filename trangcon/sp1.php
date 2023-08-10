
<?php
session_start();
    require "../dao/pdo.php";
    require "../dao/hang-hoa.php";
    require "../dao/danh-muc.php";
    require "../dao/img.php";
    require "../dao/binh-luan.php";
    //hiển thị 
    if(isset($_GET['ma_hh'])){
        $ma_hh=$_GET['ma_hh'];
        $hang_hoa_info=hang_hoa_getinfo($ma_hh);
        extract($hang_hoa_info);
        $danh_muc_info=danhmuc_getinfo($id_dm_sp);
        extract($danh_muc_info);
        $ds_img_id = img_selectall();
        
        if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

        ?>
        <?php
        
            if(isset($_POST['goibinhluan']) && $_POST['randcheck']==$_SESSION['rand']) {

                $noi_dung=$_POST['binhluan'];
                
                $ma_hh=$_GET['ma_hh'];
                $ma_kh=$_SESSION['user'];
                //$ma_hd=$_POST['ma_hd'];
                $ngay_bl = date_format(date_create(), "Y-m-d ");
                //$trang_thai=$_POST['trang_thai'];
                $trang_thai='chưa xử lý';
                
                binh_luan_insert($noi_dung,$ma_hh,$ma_kh,$ngay_bl,$trang_thai); 
                
            
                }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLV STORE</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/taikhoan.css">
    <style>
        
.left{
float: left;
margin-top: 150px;
}
.left h1{
color: black;
font-size: 30px;
font-family: 'Courier New', Courier, monospace;
}
.left h3{
margin-left: -20px;
color: red;
font-size: 25px;
font-family: 'Courier New', Courier, monospace;
}
.left h4{
margin-top: 20px;
margin-left: 10px;
font-size: 20px;
}
.box h1{
margin: 30px -20px 10px;
margin-top: 20px;
margin-left: 100px;
}
.box img{
margin: 30px;
padding: 0px 0px 0px 0px;
margin-left: 300px;
border-radius: 10px 10px 10px 10px;
}
button{
padding-top: 0px;
color: black;
background: orange;
width: 150px;
height: 50px;
border-radius: 10px 10px 10px 10px;
margin-left: 10px;
}
p{
margin-left: 10px;
color: black;
text-align: justify;
font-size: 15px;
}
.ip:hover{
color: white;
background-color: red;
}
.ip:hover{
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
-ms-transform: scale(1.1);
 -o-transform: scale(1.1);
    transform: scale(1.1);
}
.ip{
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
     -ms-transform: scale(1.0);
      -o-transform: scale(1.0);
         transform: scale(1.0);
}
.left img:hover{
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
-ms-transform: scale(1.1);
 -o-transform: scale(1.1);
    transform: scale(1.1);
}
.left img{
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
     -ms-transform: scale(1.0);
      -o-transform: scale(1.0);
         transform: scale(1.0);
    width: 600px;
    margin-top: -50px;
    margin-left: 180px;
}
.ip{
    padding-top: 0px;
    color: black;
    background: orange;
    width: 150px;
    height: 50px;
    border-radius: 10px 10px 10px 10px;
    margin-left: 0px;  
}
.ten{
    font-size: 30px;
    font-weight: bold;
}
.gia{
    font-size: 20px;
    color: red;
    font-weight: bold;
    
}
.dong{
    margin-left: 50px;
}
h5{
    margin-left: 82px;
    margin-top: -24px;
    font-size: 15px;
    color: red;
}
.binhluan{
    color: red;
    background-color: white;
    width: 480px;
    height: 50px;
    color: black;
    padding: 9px 9px;
    border: none;
    border: 2px solid gray;
    border-radius: 4px;
    cursor: pointer;
    font-size: 18px;
    transition: 0.4s; 
    margin-top: 10px;
    
}
.sub{
        width: 100px;
        height: 40px;
        background-color: black;
        color: white;
        padding: 9px 9px;
        margin: 10px 0;
        border: none;
        /* border: 3px solid darkcyan; */
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        transition: 0.4s; 
    }
    .sub:hover{
        background-color: red;
    }
    .mota{
        width: 450px;
        margin-top: 5px;
    }
    .table1{
        padding-top: 20px;
        padding-bottom: 20px;
    }
    table{
        font-size: 15px;
        margin-top: 10px;
        line-height: 25px;
        border: 2px gray solid;
        border-radius: 10px;
        margin-left: 35px;
        margin-right: 35px;
        padding: 15px;
        padding-top: 10px ;
        width: 1420px;
        margin-left: 50px;
        background-color: 	#DCDCDC;
        
    }
    .hthh{
        padding-right: 13px;
        font-size: 18px;

        
    }
    .htnd{
        padding-right: 30px; 
        text-align: center;
        font-size: 18px;
    }
    .htday{
        padding-left: 10px;
        font-size: 18px;
    }
    .htday2{
        padding-left: 10px; 
        text-align: center;
    }
    .td{
            font-size: 30px;
            font-weight: bold;
            margin-top: -30px;
            margin-bottom: -15px;
            color: black;
            margin-left: 50px;
            
    }
    .makh{
        padding-right: 30px; 
        text-align: center;
        
    }
    .ndbl{
        width: 900px;
        text-align: justify;
    }
    .vnd{
        margin-left: 100px;
    }
    </style>

</head>
<body>
    
<!-- header section starts      -->

<header>
<?php
require_once('../trang-chinh/menu.php');
?>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<!-- header section ends-->
<box class="box">
    </div>
    </div>
    <div class="left">
        <form action="giohang.php?act=addtocart" method="POST">
                    <?php
                        $ds_img=anh_hh($ma_hh);
                        $ma_hh=$ma_hh;
                        foreach($ds_img as $img){
                            extract($img);
                            echo '<td><input type="text" name="img" style="display:none;" value="'.$link_img.'"><img src="../images/'.$link_img.'" width="500px" height="670px"></input></td>';
                            
                        }
                     
                        ?>
            </div>
        
            <div class="left">
                <input class="ten" type="text" name="ten_hh" value="<?php echo $ten_hh ?>"></input><br>
                <input type="text" class="gia" value="<?php echo number_format($don_gia)?>"><h5 class="vnd">VNĐ</h5></input>
                <input type="text" class="gia" name="don_gia" value="<?php echo $don_gia?>" style="display:none;"></input>
                <input type="hidden" name="ma_hh" value="<?php echo $ma_hh?>" ></input>
                <br>
                <input class="ip" type="submit" name="addtocart" value="thêm vào giỏ hàng">
        </form>
        <div style="margin: 130px 0px 0px 0px; margin-top:20px;">
        <h4>XUẤT XỨ</h4>
        <p>Hàng chính hãng của thương hiệu <?php echo $tieu_de ?></p>
        <h4>CHẤT LIỆU</h4>
        <p>Coton 100%</p>
        <h4>ĐẶC ĐIỂM</h4>
        <p class="mota"><?php echo $mo_ta ?>
        <h4>BẢO QUẢN | VỆ SINH
        </h4>
        <p>
            - Không để sản phẩm bị ẩm hay để ở nơi có nước <br>
            - Không vệ sinh với hoá chất có nồng độ tẩy cao <br>
             và nhiệt độ cao<br>
            - Vệ sinh bằng dung dịch chuyên dụng và sấy bằng <br>
             máy giặt ở cường độ thấp <br>
               
    </div> 
       
    </div>
</box>
<form action=""  method="POST">
<input class="binhluan" type="text" name="binhluan" id="" placeholder="Nhập bình luận về sản phẩm">
<br>
<input class="sub" type="submit" name="goibinhluan" value="Xác nhận">  

<div class="p-3 border bg-light" style="margin-top: 2%;">
<div class="card-header">
<?php
   $rand=rand();
   $_SESSION['rand']=$rand;
  ?>
 <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />

</form>
<?php
    }
?>
<br>
<br>
<br>
<br>
<br>
<br>
<h2 class="td">Bình luận về Sản phẩm</h2>
      </div>

      <div class="table1">
        <table class="table">
          <thead>
            <tr>
    
              <th scope="col" class="hthh">Tài khoản</th>
              <th scope="col" class="htnd">Nội dung bình luận</th>
              <th scope="col" class="htday">Ngày gửi</th>
            </tr>
     
          </thead>
        </div>
<?php 
  $binhluan_id_hang_hoa = binh_luan_select_by_id_hang_hoa($ma_hh);
    foreach ($binhluan_id_hang_hoa as $binh_luan_id_hh) {
      extract($binh_luan_id_hh);
     
   
      ?>
      <tbody>
          <tr>
         
          <td class="makh"><?php echo $ma_kh?></td>
          <td class="ndbl"><?php echo $noi_dung?></td>
          <td class="htday2"><?php echo $ngay_bl?></td>
         
        
          </tr>
      </tbody>
      <?php
      
    }
                    
  ?>



</div>
</div>
<!-- home section starts  -->
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js">
           if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
        </script>
        <!-- custom js file link  -->
        <script src="js/script.js"></script>
  </body>
</html>