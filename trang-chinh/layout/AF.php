<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/slide.css">
</head>
<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1>STORE GIÀY HLV</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="gioithieu.php">Giới thiệu</a></li>
                <li><a href="lienhe.php">Liên hệ</a></li>
                <li><a href="#">Góp ý</a></li>
                <li><a href="#">Giỏ hàng</a></li>
            </ul>
        </div>
        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <div id="slideshow">
                            <div class="slide-wrapper">
                                <div class="slide"><img src="IMG/1.1.jpg"></div>
                                <div class="slide"><img src="IMG/1.3.jpg"></div>
                                <div class="slide"><img src="IMG/2.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sanpham mr">
                        <div class=" row img"><a href="sp5.php"><img src="IMG/8.png" alt=""></a></div>
                        <p>$80</p>
                        <a href="sp5.php">Nike Air Forced 1 Shawdow</a>
                    </div>
                    <div class="sanpham">
                        <div class=" row img"><a href="sp6.php"><img src="IMG/9.png" alt=""></a></div>
                        <p>$60</p>
                        <a href="sp6.php">Nike Air Forced 1 woman color</a>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb">
                    <div class="boxtieude">TÀI KHOẢN</div>
                    <div class="boxcontent taikhoan">
                        <form action="../../site/tai-khoan/dang-nhap.php" method="Post">
                            <div class="row mb10">
                            Tên đăng nhập: <br>
                            <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                            Mật khẩu: <br>
                            <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                            <input type="checkbox" name="check" id=""> Remember me?
                            </div>
                            <div class="row mb10">
                            <input type="submit"  name="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <li><a href="doimk.php">Đổi mật khẩu</a></li>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="dangky.php">Đăng kí thành viên</a></li>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtieude">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="JD.php">Nike Jordan</a>
                            </li>
                            <li>
                                <a href="AF.php">Nike AirFoce 1</a>
                            </li>
                            <li>
                                <a href="#">Áo thun Adidas</a>
                            </li>
                            <li>
                                <a href="#">Áo thun Nike</a>
                            </li>
                            <li>
                                <a href="#">Áo thun Supreme</a>
                            </li>
                            <li>
                                <a href="#">Dép Addidas</a>
                            </li>
                            <li>
                                <a href="#">Giày thể thao</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxcuoi timkiem">
                        <form action="#" method="post">
                            <input type="text" placeholder="Nhập sản phẩm cần tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtieude">YÊU THÍCH</div>
                    <div class="boxcontent row">
                        <div class="row mb10 top10">
                            <img src="IMG/4.jpg" alt="">
                            <a href="#">Giày Jordan 1 Red</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="IMG/7.jpg" alt="">
                            <a href="#">Giày Jordan 1 DIOR</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="IMG/8.png" alt="">
                            <a href="#">Giày Air Forced 1 Shadow</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="IMG/10.jpg" alt="">
                            <a href="#">Áo thun Jordans "Jump man"</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="IMG/9.png" alt="">
                            <a href="#">Giày Air Forced 1 Blue white </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mb footer">
            Bản quyền thuộc về HLV Store &copy; Right 2021
        </div>
    </div>
</body>
</html>