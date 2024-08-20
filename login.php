<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản - BPBooks.com - Manga - Comic</title>
    <link rel="icon" href="./images/home/header/iconlogo.png" type="">
    <link rel="stylesheet" href="./css/foothead.css">
    <link rel="stylesheet" href="./css/login.css">
    
</head>
<body>
    <?php require_once 'header.php' ?>
    <div class="bodyContainer">
        <div class="container">
            <div class="login-tab" style="text-align: center;">
                <button class="tablinks login" onclick="openTab(event,'Login')" id="defaultOpen">Đăng nhập</button>
                <button class="tablinks signin" onclick="openTab(event,'Register')">Đăng ký</button>
            </div>
            
            <div class="tabcontent" id="Login">
                <form class="login-form">
                    <div>
                        <label>Số điện thoại/Email</label> <br>
                        <input type="text" id="login-name"> <br>
                    </div>
                    <div>
                        <label>Mật khẩu</label> <br>
                        <input type="password" id="login-pass"> <br>
                    </div>
                    <!-- <div>
                        <input type="checkbox">
                        <label>Ghi nhớ mật khẩu</label> <br>
                    </div> -->
                    <div>
                        <a href="#" style="text-decoration: none;">Quên mật khẩu?</a>
                    </div>
                    <hr>
                    <div class="submit-button">
                        <button type="submit" id="subcheck">Đăng nhập</button>
                    </div>
                </form>
            </div>
            
            <div class="tabcontent" id="Register">
                <form class="register-form">
                    <div>
                        <label>Số điện thoại</label> <br>
                        <input type="number" required id="number" onkeyup="checkNum()"> <br>
                    </div>

                    <div>
                        <label>Mã xác nhận OTP</label> <br>
                        <input type="text" > <br>
                    </div>

                    <div>
                        <label>Mật khẩu</label> <br>
                        <input type="password" required id="pass"> <br>
                    </div>
                    <hr>
                    <div class="submit-button">
                        <button type="submit" onclick="checkregis">Đăng ký</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <?php require_once 'footer.php' ?>
    <script src="./js/login.js"></script>
</body>
</html>