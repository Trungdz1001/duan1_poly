
<?php
require_once('../../HLVSTORE/dao/pdo.php');
require_once('../../HLVSTORE/dao/khach-hang.php');
require_once('../../HLVSTORE/global.php');
    if(isset($_POST['doimk'])){
        $taikhoan = $_POST['user'];
        //echo '<script> alert("Tài khoản. $taikhoan");<script> ';
        $pass_cu = $_POST ['pass'];
        $pass_moi = $_POST ['passnew'];
        $sql = "SELECT COUNT(ho_ten) FROM khachhang WHERE ma_kh ='".$taikhoan."' AND mat_khau='".$pass_cu."'";
        $row = pdo_query($sql);
        $tam = $row[0][0];
        if($tam==1){
            khach_hang_update_pass($taikhoan,$pass_moi);
            echo '<script> alert("Đổi mật khẩu thành công");</script>';
        }
        else{
            echo '<script> alert("Sai tài khoản hoặc mật khẩu cũ.");</script>';
        }

    }
?>
<style>
     .form{
	width: 600px;
	border-radius: 10px;
	padding: 15px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	margin-left: 30%;
}
form{
	margin-left: 20px;
}
input[type=text],input[type=email],input[type=password] {
  width: 90%;
  padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  outline: none;
}

select{
	width: 94%;
	padding: 8px 10px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	font-size: 16px;
}
input[type=submit] {
  width: 94%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 12px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 18px;
  transition: 0.4s;
}
.inp{
	width: 90%;
  padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  background: #fff;
}
.inp span{
	margin-right: 15px;
}
input[type=submit]:hover {
  background-color: gray;
}
input[type=radio],input[type=checkbox] {
  margin-right: 5px;
}
label{
  font-weight: bold;
  margin-top: 8px;
  display: block;
}
textarea{
  padding: 10px 15px;
  font-size: 18px;
  border-radius: 10px;
  outline: none;
	margin-top: 8px;
  width: 482px;
}
.error{
  font-size: 12px;
  color: red;
}
.tk2{
  margin-top: 10px;

}
.tk3{
  margin-top: 10px;
  line-height: 27px;

}
a{
    color: black;
    font-family: 'Times New Roman', Times, serif;
    
}
a:hover{
    color: red;
}
</style>
<h1 style="text-align: center;">ĐỔI MẬT KHẨU</h1>
        <div class="form">
            
            <form action="../trangcon/doimk.php" method="POST" onsubmit="return KiemTra()">
                <label for="student">Tài Khoản: </label>
                <input type="text" id="user" name="user" placeholder="Nhập tài khoản của bạn">
                <div id="error1" class="error"></div>
                <br>
                <label for="name">Mật Khẩu Cũ: </label>
                <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu cũ của bạn">
                <div id="error2" class="error"></div>
                <br>
                <label for="name">Mật Khẩu Mới: </label>
                <input type="password" name="passnew" id="passnew" placeholder="Nhập mật khẩu mới của bạn">
                <div id="error2" class="error"></div>
                <br>
                <input type="submit" name="doimk" value="Xác nhận"><br>
                <a href="../trangcon/dang-nhap-info.php" style="text-decoration: none;"> ⇦ Quay lại trang chủ</a>
            </form>
        </div>