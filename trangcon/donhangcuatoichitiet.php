<?php
    require "../dao/pdo.php";
    require "../dao/hoa-don.php";
    //load 
    session_start();

    if(isset($_GET['ma_hd'])){
        $ma_hd=$_GET['ma_hd'];
        $hoadonchitiet_info=hoadonchitiet_getinfo($ma_hd);
        
    ?>
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
            padding-right:100px;
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
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="../../css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/assets/dashboard.css" rel="stylesheet">
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
            color: black;
        }
        .td{
            margin-top: 100px;
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
<h1 class="td">HÓA ĐƠN CỦA TÔI</h1>
<div class="table">
        <table>
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
                }}
            ?>
        </table>
        
      </div>
      <h1 class="back"><a href="donhangcuatoi.php" style="text-decoration: none;">🔙 Quay lại đơn hàng</a></h1>
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