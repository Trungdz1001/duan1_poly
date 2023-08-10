<?php
    require_once '../dao/pdo.php';
    require_once '../dao/hoa-don.php';
    require_once '../dao/khach-hang.php';

    session_start();
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){  //thêm giỏ hàng
        $ma_hh=$_POST['ma_hh'];
        $img=$_POST['img'];
        $ten_hh=$_POST['ten_hh'];
        $don_gia=$_POST['don_gia'];
        $so_luong=1;
        
        $spadd=[$img,$ten_hh,$don_gia,$so_luong,$ma_hh];
        array_push($_SESSION['mycart'],$spadd);         //tạo session 
    }
    if(isset($_GET['idcart'])){             //xóa session
        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
    }
    if(isset($_SESSION['user'])){       //tài khoản
        $khachhang=khach_hang_getinfo($_SESSION['user']);
        extract($khachhang);
    }
    $thongbao="";
    if(isset($_POST['dathang'])&&($_POST['dathang'])){
        if($_POST['tongtien']==0){
            $thongbao ="<script>alert('Vui lòng chọn hàng trước khi thanh toán :(')</script>";
        }elseif($_POST['hoten']=="" or $_POST['diachi']=="" or $_POST['email']=="" or $_POST['sdt']==""){
            $thongbao ="<script>alert('Vui lòng nhập đầy đủ thông tin :(')</script>";
        }
        else{
                $ma_hd=rand(0,99999);
                $ma_kh=$ma_kh;
                $tong_tien=$_POST['tongtien'];
                $ho_ten=$_POST['hoten'];
                $dia_chi_giao_hang=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $ngay_dat=date('Y/m/d');
                $trang_thai="đang xử lý";
                hoadon_insert($ma_hd,$ma_kh,$ho_ten,$tong_tien,$dia_chi_giao_hang,$sdt,$email,$ngay_dat,$trang_thai);

            
                //$ma_hh=$_POST['ma_hh'];
                //$ten_hh=$_POST['tenhh'];
                //$so_luong=$_POST['soluong'];
                $ma_km= '';
                
                //$gia_sau_km=$_POST['tongtien'];
              
                foreach($_SESSION['mycart'] as $key => $val){
                    $ma_hh=$val['4'];
                    $ten_hh=$val['1'];
                    $so_luong=$val['3'];
                    $don_gia=$val['2'];
                    $gia_sau_km=$so_luong*$don_gia;
                    $hoadonchitiet= hoadonchitiet_insert($ma_hd,$ma_hh,$ten_hh,$so_luong,$ma_km,$don_gia,$gia_sau_km);
                }

                if(!$hoadonchitiet){
                    $thongbao = "<script>alert('Mua hàng thành công !')</script>";
                    $_SESSION['mycart']=[];
                    }
                else{
                    $thongbao = "<script>alert('Mua hàng thất bại !')</script>";
                }
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../trangcon/css/giohang.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
        .vanchuyen {
    width: 350px;
    margin-top: 4px;
}
.payment-info {
    background: darkcyan;
    padding: 10px;
    border-radius: 6px;
    color: #fff;
    font-weight: bold
}

.product-details {
    padding: 10px
}

body {
    background: #fff
}

.cart {
    background: #fff
}

.p-about {
    font-size: 12px
}

.table-shadow {
    -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
    box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42)
}

.type {
    font-weight: 400;
    font-size: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 1px 12px;
    border: 2px solid #ada9a9;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 300
}

label.radio input:checked+span {
    border-color: #fff;
    background-color: blue;
    color: #fff
}

.credit-inputs {
    background: whitesmoke;
    color: black !important;
    border-color: whitesmoke
}

.credit-inputs::placeholder {
    color: #fff;
    font-size: 13px
}

.credit-card-label {
    font-size: 9px;
    font-weight: 300
}

.form-control.credit-inputs:focus {
    background: rgb(102, 102, 221);
    border: rgb(102, 102, 221);
    color: black;
}

.line {
    border-bottom: 1px solid rgb(102, 102, 221)
}

.information span {
    font-size: 12px;
    font-weight: 500
}

.information {
    margin-bottom: 5px
}

.items {
    -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
    box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08)
}

.spec {
    font-size: 11px
}
    </style>

</head>
<body>
<div class="container mt-5 p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-2">
                <div class="d-flex flex-row align-items-center"><a href="../index.php"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Tiếp tục mua hàng</span></div></a>
                <hr>
                <h6 class="mb-0">Giỏ hàng của bạn</h6>
                <div class="d-flex justify-content-between"><span>Bạn có sản phẩm trong giỏ hàng</span>
                    <div class="d-flex flex-row align-items-center"><span class="text-black-50">Hiển thị:</span>
                        <div class="price ml-2"><span class="mr-1">Giá</span><i class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <form action="" method="POST">
                <?php
                $tong=0;
                $tong_phivanchuyen=0;
                $i=0;
                foreach($_SESSION['mycart'] as $cart){
                    $ttien=$cart[3]*$cart[2];
                    $tong+=$ttien;
                    $tong_phivanchuyen=$tong+20000;
                    
                    echo '<div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                            <div class="d-flex flex-row">
                                <div class="ml-2"><span class="font-weight-bold d-block"> <input name="tenhh" style="border:none;" value="'.$cart[1].'" readonly></input></span></div>
                            </div>
                            <img src="../images/'.$cart[0].'" width="50px">
                            <div class="d-flex flex-row align-items-center">
                            <span class="d-block"><input type="number" min="1" max="9" name="soluong" style="border: none;" value="'.$cart[3].'"></input></span>
                            <span class="d-block ml-5 font-weight-bold"><input style="border: none;" value="'.number_format($cart[2]).'đ" readonly></input>
                                                                        <input name="dongia" style="display:none;" value="'.$cart[2].'" readonly></input>
                                                                        </span>
                            <a href="?idcart='.$i.'"><i class="fa fa-trash-o ml-3 text-black-50"></i></a></div>
                            <input name="ma_hh" style="display:none;" value="'.$cart[4].'"></input>
                        </div>
                    ';
                    $i+=1;
                }
                
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-info">
                <div class="d-flex justify-content-between align-items-center"><span style="text-align: center;">Đặt hàng</span></div>
        
                <div><label class="credit-card-label">Họ Tên</label><input type="text" class="form-control credit-inputs" name="hoten" value="<?php echo $ho_ten ?>"></div>
                <div><label class="credit-card-label">Địa chỉ nhận hàng</label><input type="text" class="form-control credit-inputs" name="diachi" value="<?php echo $dia_chi ?>"></div>
                <div><label class="credit-card-label">Số điện thoại</label><input type="text" class="form-control credit-inputs" name="sdt" value="<?php echo $so_dt ?>"></div>
                <div><label class="credit-card-label">Email</label><input type="text" class="form-control credit-inputs" name="email" value="<?php echo $email ?>"></div>
                <div><label class="credit-card-label">Thời gian nhận hàng</label> <select class="vanchuyen" id=""></div>
                <option>Giờ hành chính (Từ thứ 2 đến thứ 7)</option>
                <option>Tất cả các ngày trong tuần</option>
                </select>
                
                <hr class="line">
                <div class="d-flex justify-content-between information"><span>Giá đơn</span><span><?php echo number_format($tong) ?>đ</span></div>
                <div class="d-flex justify-content-between information"><span>Phí vận chuyển</span><span>20,000₫</span></div>
                <div class="d-flex justify-content-between information"><span>Tổng hóa đơn thanh toán</span><?php echo number_format($tong_phivanchuyen) ?>đ</div>
                <div style="display:none;"><span>Tổng hóa đơn thanh toán</span><input name="tongtien" value="<?php echo $tong_phivanchuyen ?>"></input>đ</div>
                <input class="btn btn-primary btn-block d-flex justify-content-between mt-3 nhan" name="dathang" type="submit" value="ĐẶT HÀNG" style="background-color: #CC9933" onlick="alert('đặt hàng thành công')"></input>
            </div>
        </div>
                </form>
                <h3><?php echo $thongbao ?></h3>
    </div>
</div>
</body>
</html>