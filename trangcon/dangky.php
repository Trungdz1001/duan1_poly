
<?php
require_once('../../HLVSTORE/dao/pdo.php');
require_once('../../HLVSTORE/dao/khach-hang.php');
require_once('../../HLVSTORE/global.php');
if (isset($_POST['submit'])) {
	$path = $CONTENT_URL;
	$ma_kh = $_POST['user'];
	$mat_khau = $_POST['pass'];
	$ho_ten = $_POST['hoten'];
	$dia_chi = $_POST['diachi'];
	$so_dt = $_POST['sodt'];
	$kich_hoat = $_POST['kichhoat'];
	//$img_id = $_FILES['hinh']['name'];
	$img_id = 'hinh';
	$email = $_POST['email'];
	$vai_tro = $_POST['vaitro'];
	//move_uploaded_file($_FILES['hinh']['tmp_name'], "$path./IMG/$img_id");
	khach_hang_insert($ma_kh,$mat_khau,$ho_ten,$dia_chi,$so_dt,$kich_hoat,$img_id,$email,$vai_tro);
	$_SESSION['thong-bao'] = "Đăng ký thành công";
	header('location: ' . $ROOT_URL);
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÝ</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    <style>
        .form{
	width: 600px;
	border-radius: 10px;
	padding: 15px;
	box-sizing: border-box;
	border: 0px solid #ccc;
	margin-left: 31%;
	background-image: url(https://cdn.pixabay.com/photo/2016/02/17/04/09/backround-1204441_960_720.jpg);
	color: white;
	background-repeat: no-repeat;
	background-size: 1500px;
	box-shadow: 4px 4px 4px 4px gray;
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
a{
    color: white;
	font-family: 'Times New Roman', Times, serif;
	font-size: 18px;

}
a:hover{
    color: yellow;
}
    </style>
    <script>
        function KiemTra(){
	var student=document.getElementById("student");
	var name=document.getElementById("name");
	var email=document.getElementById("email");
	var national=document.getElementById("national");

	var error1=document.getElementById("error1");
	var error2=document.getElementById("error2");
	var error3=document.getElementById("error3");
	var error4=document.getElementById("error4");
	var error5=document.getElementById("error5");
	var error6=document.getElementById("error6");
	var error7=document.getElementById("error7");

	var gender=document.getElementsByName("gender");
	var sothich=document.getElementsByClassName("sothich");
	var note=document.getElementById("note");


	//kiểm tra tài khoản
	if(student.value.length==0){
		student.style.border="1px solid red";
		error1.innerHTML="Tài Khoản không được để trống!";
		return false;
	}else{
		student.style.border="none";
		error1.innerHTML="";
	}

	//kiểm tra mật khẩu
	if(name.value.length==0){
		name.style.border="1px solid red";
		error2.innerHTML="Mật Khẩu không được để trống!";
		return false;
        
	}else{
		name.style.border="none";
		error2.innerHTML="";
	}
    //kiểm tra số điện thoại
	if(sdt.value.length==0){
		sdt.style.border="1px solid red";
		error5.innerHTML="Số điện thoại không được để trống!";
		return false;
        
	}else{
		sdt.style.border="none";
		error5.innerHTML="";
	}
	//kiểm tra email
	if(email.value.length==0){
		email.style.border="1px solid red";
		error3.innerHTML="Email không được để trống!";
		return false;
	}else{
		email.style.border="none";
		error3.innerHTML="";
	}

	//kiểm tra giới tính
	if(gender[0].checked!==true & gender[1].checked!==true){
		error4.innerHTML="Bạn phải chọn giới tính!";
		return false;
	}else{
		error4.innerHTML="";
	}

	//ghi chú tối đa 200 ký tự: sử dụng thuộc tính maxlength="200" ở file resgist.html
	if(note.value.length>200){
		error7.innerHTML="Bạn chỉ được nhập tối đa 200 ký tự!";
		note.style.border="1px solid red";
		return false;
	}else{
		error7.innerHTML="";
		note.style.border="1px solid #ccc";
	}
}
    </script>
</head>
<body>
    <article>
        <h1 style="text-align: center;">ĐĂNG KÍ</h1>
        <div class="form">
            <form action="" onsubmit="return KiemTra()" method="POST">
                <label for="student">Tài Khoản: </label>
                <input type="text" id="student" name="user" placeholder="Gồm các chữ và số không bao gồm kí tự đặt biệt">
                <div id="error1" class="error"></div>
                <br>
                <label for="name">Mật Khẩu: </label>
                <input type="password" name="pass" id="name" placeholder="Nhập mật khẩu của bạn">
                <div id="error2" class="error"></div>
                <br>
				<label for="student">Họ tên: </label>
                <input type="text" id="student" name="hoten" placeholder="*VD: Phạm Quốc Hy">
                <div id="error1" class="error"></div>
                <br>
                <label for="name">Số Điện Thoại: </label>
                <input type="text" name="sodt" id="sdt" placeholder="Nhập số điện thoại của bạn">
                <div id="error5" class="error"></div>
                <br>
				<label for="student">Địa chỉ: </label>
                <input type="text" id="student" name="diachi" placeholder="Ấp/thôn - Phường/xã - Huyện/Thị xã - Tỉnh/Thành phố">
                <div id="error1" class="error"></div>
                <br>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="phamquochy@gmail.com">
                <div id="error3" class="error"></div>
                <br>
                <label for="file">Ảnh:</label>
                <input type="radio" name="file" id="email" checked> USER
                <div id="error3" class="error"></div>
                <div id="error4" class="error"></div>
				<div hidden>
				<label for="student">vai trò: </label>
                <input type="radio" id="student" name="vaitro" value="1" checked> user
                <div id="error1" class="error"></div>
                <br>
				<label for="student">kichhoat: </label>
                <input type="radio" id="student" name="kichhoat" value="1" checked> đã kích hoạt
                <div id="error1" class="error"></div>
                <br>
				</div>
                <input type="submit" onclick="alert ('Đăng kí thành công')" name="submit"value="Đăng ký">
            </form>
            <a href="../taikhoan.php" style="text-decoration: none;"> ⇦ Quay lại trang chủ</a>
        </div>
    </article>
</body>
</html>