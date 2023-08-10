<?php
    require "../dao/pdo.php";
    require "../dao/hoa-don.php";
    $ds_hoa_don=hoa_don_selectall();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .table{
            padding-top:200px;
            display:flex;
            justify-content: center;
            font-size: 20px;
        }
        td,th{
            padding-right:82px;
            text-align:center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLV STORE</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../../content/css/bootstrap.css">
    <link href="../../css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/assets/dashboard.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <style>
        .table{
            padding-top: -10px;
        }
        table{
            margin-left: 35px;
            font-size: 14px;
            border: 2px darkcyan solid;
            padding: 15px;
            padding-top: -20px;
            border-radius: 10px;
            margin-right: 35px;
        }
        .nhan{
            padding-top: 0px;
            color: white;
            background: black;
            width: 100px;
            height: 50px;
            border-radius: 10px 10px 10px 10px;
            margin-left: -30px;
            
        }
        .nhan:hover{
            padding-top: 0px;
            color: white;
            background: red;
            width: 100px;
            height: 50px;
            border-radius: 10px 10px 10px 10px;
            margin-left: -30px;
        }
        .back{
            margin-left: 30px;
            padding-top: 30px;
            padding-bottom: 30px;
            color: black;
        }
        .back a:hover{
            margin-left: 30px;
            padding-top: 30px;
            padding-bottom: 30px;
            color: red;
        }
        .td{
            margin-top: 150px;
            margin-bottom: -180px;
            text-align: center;
            font-size: 40px;
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
<h1 class="td">ĐƠN HÀNG CỦA TÔI</h1>

<div class="table">
    
        <table>
          <thead>
            <tr>
              <th scope="col">MÃ HÓA ĐƠN</th>
              <th scope="col">HỌ TÊN KHÁCH HÀNG</th>
              <th scope="col">TỔNG TIỀN</th>
              <th scope="col">ĐỊA CHỈ GIAO HÀNG</th>
              <th scope="col">NGÀY ĐẶT</th>
              <th scope="col">TRẠNG THÁI</th>
            </tr>
          </thead>
          <?php
                foreach($ds_hoa_don as $hoa_don){
                    extract($hoa_don);
                    $chitiet_link="donhangcuatoichitiet.php?ma_hd=".$ma_hd;
                    if($_SESSION['user']==$ma_kh){
            ?>
            <tbody>
                <tr>
                <td><?php echo $ma_hd?></td>
                <td><?php echo $ho_ten?></td>
                <td><?php echo number_format($tong_tien).'đ'?></td>
                <td><?php echo $dia_chi_giao_hang?></td>
                <td class="ngaydat"><?php echo $ngay_dat?></td>
                <td><?php echo $trang_thai?></td>
                <td>
                  <a href="<?php echo $chitiet_link?>"><button class="nhan">Chi Tiết</button></a>
                </td>
                </tr>
               
            </tbody>
            
            <?php
                }}
            ?>
        
        </table>
        
      </div>
      <h1 class="back"><a href="../index.php" style="text-decoration: none;">🔙 Quay lại cửa hàng</a></h1>
<section class="footer">
<?php
    require_once('../trang-chinh/footer.php')
?>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<!-- <div class="loader-container">
    <img src="images/loader5.gif" alt="">
</div> -->





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>