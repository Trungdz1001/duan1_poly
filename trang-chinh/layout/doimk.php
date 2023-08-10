<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÝ</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    <link rel="stylesheet" href="CSS/dangky.css">
</head>
<body>
    <article>
        <h1 style="text-align: center;">ĐỔI MẬT KHẨU</h1>
        <div class="form">
            <form action="" onsubmit="return KiemTra()">
                <label for="student">Tài Khoản: </label>
                <input type="text" id="student" name="user">
                <div id="error1" class="error"></div>
                <br>
                <label for="name">Mật Khẩu cũ: </label>
                <input type="password" name="pass" id="name">
                <div id="error2" class="error"></div>
                <br>
                <label for="name">Mật Khẩu mới: </label>
                <input type="password" name="pass" id="name">
                <div id="error2" class="error"></div>
                <br>
                <label for="name">Xác nhận mật Khẩu mới: </label>
                <input type="password" name="pass" id="name">
                <div id="error2" class="error"></div>
                <br>
                <div id="error4" class="error"></div>
                <input type="submit" name="submit"value="Xác nhận">
            </form>
			<li><a href="index.php"> Quay lại trang chủ </a></li>
        </div>
		
    </article>
</body>
</html>