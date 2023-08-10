<?php
	require_once('../../dao/pdo.php');
	require_once('../../dao/khach-hang.php');
	require_once('../../global.php');
        if(isset($_POST['sbt'])){
			$path = $CONTENT_URL;
            $ma_kh = $_POST['user'];
            $mat_khau = $_POST['pass'];
			$ho_ten = $_POST['hoten'];
			$kich_hoat = $_POST['kichhoat'];
			$hinh = $_FILES['hinh']['name'];	
            $email = $_POST['email'];
			$vai_tro = $_POST['vaitro'];
			move_uploaded_file($_FILES['hinh']['tmp_name'], "$path./IMG/$hinh");
			khach_hang_insert($ma_kh,$mat_khau,$ho_ten,$kich_hoat,$hinh,$email,$vai_tro);
			header("location: ". $ROOT_URL);
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
    <link rel="stylesheet" href="CSS/dangky.css">
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
            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data" onsubmit="return KiemTra()">
                <label for="student">Tài Khoản: </label>
                <input type="text" id="student" name="user">
                <div id="error1" class="error"></div>
                <br>
                <label for="name">Mật Khẩu: </label>
                <input type="password" name="pass" id="name">
                <div id="error2" class="error"></div>
                <br>
				<label for="student">Họ Tên: </label>
                <input type="text" id="student" name="hoten">
                <div id="error1" class="error"></div>
                <br>
             
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
                <div id="error3" class="error"></div>
                <br>
				<label for="hinh">Thêm ảnh: </label>
				<input type="file" name="hinh" id="hinh">
				<div id="error3" class="error"></div>
				<br>
                <label for="gender">Giới tính: </label>
                <div class="inp">
                    <input type="radio" name="gender"><span>Nam</span>
                    <input type="radio" name="gender"><span>Nữ</span>
					<div id="error4" class="error"></div>
                </div>
				<br>
				<div hidden>
				<label for="kichhoat" hidden>Kích hoạt: </label>
                <div class="inp" hidden>
                    <input type="radio" name="kichhoat" value="1" checked hidden><span>Có</span>
                </div>
                <div id="error4" class="error"></div>
				</div>
				
				<div hidden>
				<label for="vaitro" hidden>Vai trò: </label>
                <div class="inp" hidden>
                    <input type="radio" name="vaitro" value="1" checked hidden><span>Người dùng</span>
                </div>
                <div id="error4" class="error"></div>
				</div>

                <input type="submit" name="sbt"value="Đăng ký">
            </form>
			<li><a href="index.php"> Quay lại trang chủ </a></li>
        </div>
		
    </article>
</body>
</html>