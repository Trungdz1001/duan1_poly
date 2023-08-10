<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    <style>
    .form{
	width: 600px;
	border-radius: 10px;
	padding: 15px;
	box-sizing: border-box;
	border: 0px solid #ccc;
	margin-left: 30%;
  background-image: url(https://cdn.pixabay.com/photo/2016/02/17/04/09/backround-1204441_960_720.jpg);
  color: #fff;
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
.tk2{
  margin-top: 10px;

}
.tk3{
  margin-top: 10px;
  line-height: 27px;

}
a{
    color: white;
    font-family: 'Times New Roman', Times, serif;
    
}
a:hover{
    color: yellow;
}
    </style>
    <script>
        function KiemTra(){
	var user=document.getElementById("user");
	var pass=document.getElementById("pass");
	var error1=document.getElementById("error1");
	var error2=document.getElementById("error2");



	//kiểm tra tài khoản
	if(user.value.length==0){
		pass.style.border="1px solid red";
		error1.innerHTML="Tài Khoản không được để trống!";
		return false;
	}else{
		user.style.border="none";
		error1.innerHTML="";
	}

	//kiểm tra mật khẩu
	if(pass.value.length==0){
		pass.style.border="1px solid red";
		error2.innerHTML="Mật Khẩu không được để trống!";
		return false;
        
	}else{
		pass.style.border="none";
		error2.innerHTML="";
	}
    

	
}
    </script>
</head>
<body>
    <article>
        <h1 style="text-align: center;">ĐĂNG NHẬP</h1>
        <div class="form">
            
            <form action="../trangcon/dang-nhap.php" method="POST" onsubmit="return KiemTra()">
                <label for="student">Tài Khoản: </label>
                <input type="text" id="user" name="user">
                <div id="error1" class="error"></div>
                <br>
                <label for="name">Mật Khẩu: </label>
<input type="password" name="pass" id="pass">
                <div id="error2" class="error"></div>
                <div class="tk2">
                            <input type="checkbox" name="check" id=""> Remember me ?
                            </div>
                            <div class="tk3">
                                  <a style="text-decoration: none;" href="#">🔐 Quên mật khẩu ?</a></li> <br>
                                  <a style="text-decoration: none;" href="../trangcon/dangky.php">🔏 Đăng kí thành viên</a> <br>
                <input type="submit" name="submit" value="Đăng nhập"><br>
               
                
                <a href="../taikhoan.php" style="text-decoration: none;"> ⇦ Quay lại trang chủ</a>
                
</div>    
            </form>
           
        </div>
    </article>
</body>
</html>