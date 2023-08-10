<style>
    .user{
        text-align: center;
        font-size: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        margin-top: 10px;
    }
    .tk{
        font-size: 20px;
        width: 800px;
        height: 700px;
        border-radius: 5px 5px 5px 5px;
        border: 3px solid none;
        padding: 20px;
        margin: 20px;
        margin-top: 8px;
        line-height: 30px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 350px;
        list-style: none;
        background-image: url(https://png.pngtree.com/thumb_back/fw800/back_pic/00/05/66/1356275836021ea.jpg);
        background-repeat: no-repeat;
        background-size: 1200px;
        box-shadow: 4px 4px 4px 4px gray;
    }
    .username{
        text-align: center;
        margin-bottom: -20px;
    }
    li a{
        color: black;
        line-height: 50px;
        margin-left: 30px;
    }
    li a:hover{
        color: red;
    }
    .input{
        width: 400px;
        margin-left: 60px;
    }
    .text{
        width: 700px;
        height: 80px;
        color: black;
        padding: 9px 9px;
        margin: 10px 0;
        border: none;
        /* border: 3px solid darkcyan; */
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        transition: 0.4s; 
        font-family: Arial, Helvetica, sans-serif;
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
    .text2{
        width: 330px;
        height: 50px;
        color: black;
        padding: 9px 9px;
        margin: 10px 0;
        border: none;
        /* border: 3px solid darkcyan; */
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        transition: 0.4s; 
    }
    .text3{
        width: 320px;
        height: 50px;
        color: black;
        padding: 9px 9px;
        border: none;
        /* border: 3px solid darkcyan; */
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        transition: 0.4s;
        margin-left: 270px; 
        
    }
    .text4{
        margin-top: -90px;
        margin-left: 110px;
    }
    .text5{
        width: 700px;
        height: 50px;
        color: black;
        padding: 9px 9px;
        margin: 10px 0;
        border: none;
        /* border: 3px solid darkcyan; */
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        transition: 0.4s; 
    }
    
   
</style>
<?php
                require_once ("../global.php");
                require_once("../dao/pdo.php");
                require_once("../dao/khach-hang.php");
                ?>
              <div class="row mb">
<div class="boxcontent taikhoan">
                      <form action="../trangcon/dang-nhap-form.php" method="POST">
                          <div class="row mb10">
                             <div class="user"> TÀI KHOẢN CỦA TÔI <br></div>
                        <div class="tk">
                            <div class="username">   
                            CHÀO MỪNG KHÁCH HÀNG:  <?= $_SESSION['user'] ?>
                              </div>  
                              <br>

                          <div class="row mb10">
                      </form>
                      <li><a href="../trangcon/doimk.php" style="text-decoration: none;">🔏 Đổi mật khẩu</a></li>
                      <li><a href="../trangcon/donhangcuatoi.php" style="text-decoration: none;">🛒 Đơn hàng của tôi</a></li>
                      <?php
                        $kh =  khach_hang_getinfo($_SESSION['user']);
                        extract($kh);
                        if ($vai_tro == 0) {
                            echo
                            '
                                <li><a href="../admin/index.php" style="text-decoration: none;">🔑 Đăng nhập với tư cách admin</a></li>
                            ';
                        }

                        ?>
                        <?php
                        $kh =  khach_hang_getinfo($_SESSION['user']);
                        extract($kh);
                        if ($vai_tro == 1) {
                            echo
                            '
                                <li><a href="lienheadmin.php" style="text-decoration: none;"> 📞 Liên hệ với quản trị viên</a></li>
                            ';
                        }

                        ?>
                        <li><a href="../index.php" style="text-decoration: none;">🔙 Quay lại cửa hàng</a></li>
                      <li><a href="#" style="text-decoration: none;">⚙️ Cập nhật thông tin </a></li>
                      <div class="caidac">
                      <div class="input">
                            <span>✒ Họ tên:</span>
                            <input class="text5" type="text" name="hoten" placeholder="Nhập họ tên của bạn">
                        </div>
                      <div class="input">
                            <span>☎ Số điện thoại:</span>
                            <input class="text2" type="text" name="sodt" placeholder="Nhập số điện thoại của bạn">
                        </div>
                        <div class="text4">
                        <div class="input">
                            <span class="text3">📧 Email:</span>
                            <input class="text3" type="text" name="email" placeholder="Nhập Email của bạn">
                        </div> 
                        </div> 
                        <div class="input">
                            <span>✈ Cập nhật địa chỉ giao hàng:</span>
                            <textarea class="text" name="diachi" placeholder="Nhập địa chỉ của bạn" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input">
                            <input class="sub" type="submt" value="Cập Nhật"> 
                        </div>
                        
                    </div>
                      
                      <li><a href="../trangcon/dang-nhap.php?logout" style="text-decoration: none;">🔚 Đăng xuất</a></li>
                    </div> 
                  </div>
              </div>