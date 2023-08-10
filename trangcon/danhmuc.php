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
    

</head>
<body>
    
<!-- header section starts      -->

<header>
    <?php
    require_once('../trang-chinh/menu.php');
    ?>
    
    
</header>

<!-- header section ends-->
<!-- <?php
/*require_once('../HLVSTORE/trang-chinh/timkiem.php')*/
?>-->
<!-- search form  -->

<!-- home section starts  -->
<section class="dishes" id="dishes">
    <h3 class="sub-heading"> Tất cả </h3>
    <h1 class="heading">Danh mục của HLV STORE</h1>
    <h3 class="sub-heading"> Tất cả </h3>
    <h1 class="heading">Danh mục của HLV STORE</h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="trangcon/sp1.html"><img src="https://localbrand.vn/wp-content/uploads/2020/04/Logo-TSUN.jpg" alt=""></a>
            <a href="trangcon/sp1.html"><h3> TSUN SG</h3></a>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Xem ngay</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://i.pinimg.com/originals/94/d0/73/94d073236dcdcfa124bf095205202dcc.jpg" alt="">
            <h3> HIGHCLUB SG</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Xem Ngay</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://cf.shopee.vn/file/88be918c0c357d9c0920b21a770ce5dc" alt="">
            <h3>GRIMM DC</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Xem ngay</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="data:image/png;base64,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" alt="">
            <h3>SWE Brand</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Xem ngay</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://www.celeb.vn/wp-content/uploads/2021/09/sly-clothing-logo.jpg" alt="">
            <h3>SLY Clothing</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Xem ngay</a>
        </div>
    </div>

</section>
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>localbrand</h3>
            <a href="https://tsunsg.com/">TSUN</a>
            <a href="https://highclub.vn/">Highclub</a>
            <a href="https://slyclothing.vn/">SLY</a>
            <a href="https://swe.vn/">SWE</a>
            <a href="https://grimmdc.com/">Grimm DC</a>
        </div>

        <div class="box">
            <h3>Các trang</h3>
            <a href="#home">Trang Chủ</a>
            <a href="#dishes">NEW ARRIVALS</a>
            <a href="#about">Giới thiệu</a>
            <a href="#menu">Sản phẩm</a>
            <a href="#review">Góp ý</a>
            <a href="#order">Đặt trước</a>
        </div>

        <div class="box">
            <h3>Liên hệ hổ trợ</h3>
            <a href="#">036-850-3413</a>
            <a href="#">036-580-4331</a>
            <a href="#">hypqpc01406@fpt.edu.vn</a>
            <a href="#">vunvpc00001@fpt.edu.vn</a>
            <a href="#">luannlvpc00002@fpt.edu.vn</a>
        </div>

        <div class="box">
            <h3>Theo dõi tại</h3>
            <a href="https://www.facebook.com/Sneaker-HT-115875937347913/">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">zalo</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2021 by <span>HLV STORE</span> </div>

</section>
        <!--loading-->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
        <script src="js/script.js"></script>
  </body>
</html>