
    <a href="http://localhost/HLVSTORE/index.php" class="logo"><img src="	http://localhost/HLVSTORE/images/HLV%20STORE.png
" alt="" width="100px" height="80px">

<nav class="navbar">
    <a class="active" href="http://localhost/HLVSTORE/index.php">Trang Chủ</a>
    <a href="http://localhost/HLVSTORE/index.php#dishes">New Arrivals</a>
    <a href="http://localhost/HLVSTORE/index.php#about">Giới thiệu</a>
    <a href="http://localhost/HLVSTORE/trangcon/danhmuc.php">Danh mục</a>
    <a href="http://localhost/HLVSTORE/index.php#menu">Sản Phẩm</a>  
    <a href="http://localhost/HLVSTORE/index.php#review">Góp Ý</a>
</nav>

<div class="icons">
    <i class="fas fa-bars" id="menu-bars"></i>
    <i class="fas fa-search" id="search-icon"></i>
    <a href="#" class="fas fa-heart"></a>
    <?php
        if(isset($_SESSION['user'])){
            echo ' <a href="http://localhost/HLVSTORE/trangcon/giohang.php" class="fas fa-cart-arrow-down"></a>';
        }else{
            echo '<a href="http://localhost/HLVSTORE/trangcon/giohang2.php" class="fas fa-cart-plus""></a>';
        }    
    ?>
     
    <?php
        if(isset($_SESSION['user'])){
            echo '<a href="http://localhost/HLVSTORE/trangcon/dang-nhap-info.php" class="fas fa-user-check"></a>';
        }else{
            echo '<a href="http://localhost/HLVSTORE/taikhoan.php" class="fas fa-user"></a>';
        }    
    ?>
</div>
