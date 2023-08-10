<?php
    require ".../../dao/pdo.php";
    //require "../../dao/hang-hoa.php";
    //require "../../dao/loai.php";
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/taikhoan.css">
    <style>
        .container2 .tk2 {
    text-align: center;
    width: 600px;
    border-radius: 30px 0px 30px 0px;
    padding: 40px;
    box-sizing: border-box;
    border: 0px solid white;
    margin-left: 30%;
    margin-top: 100px;
    margin-bottom: 50px;
    font-family: Arial, Helvetica, sans-serif;
    text-shadow: red;
    background-image: url(https://freerangestock.com/sample/140755/abstract-backround--smooth-blue-and-pink-hues.jpg);
    font-size: 14px;
    box-shadow: 4px 4px 4px 4px gray;
}
.container2 .tk {
    text-align: center;
    width: 600px;
    border-radius: 30px 0px 30px 0px;
    padding: 40px;
    box-sizing: border-box;
    border: 0px solid white;
    margin-left: 30%;
    margin-top: 150px;
    font-family: Arial, Helvetica, sans-serif;
    text-shadow: red;
    background-image: url(https://cdn.pixabay.com/photo/2016/02/17/04/09/backround-1204441_960_720.jpg);
    font-size: 14px;
    box-shadow: 4px 4px 4px 4px gray;
}
.container2 .tk a:hover {
    color: greenyellow;
}
.container2 .tk2 a:hover {
    color: greenyellow;
}

    </style>
    


</head>
<body>
    
<!-- header section starts      -->

<header>
<?php
require_once('../HLVSTORE/trang-chinh/menu.php');
?>

</header>

<!-- header section ends-->

<!-- search form  -->

<?php
require_once('../HLVSTORE/trang-chinh/timkiem.php')
?>
<!-- home section starts  -->

<section class="home" id="home">
        <div class="container2">
            <div class="tk"><h1><a href="trangcon/dang-nhap-form.php">Đăng Nhập ➡️</a>
            </div>
                <div class="container2">
                <div class="tk2"><h1><a href="trangcon/dangky.php">Đăng Ký  📝</a>
            </div>
        </div>
    
</section>

<!-- home section ends -->

<section class="footer">
<?php
    require_once('../HLVSTORE/trang-chinh/footer.php')
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