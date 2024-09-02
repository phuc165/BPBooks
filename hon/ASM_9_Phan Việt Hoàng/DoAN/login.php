<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Clothes</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./Image/brand/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/reusable.css">
    
</head>
<body >
<?php require_once 'header.php' ?>
   
    <div class="container">
        <div class="invisible-box">
            <img src="./Image/brand/brandLogo.jpg" alt="">
        </div>
        <div class="login-tab" style="text-align: center;">
            <button class="tablinks login_login" onclick="openTab(event,'Login')" id="defaultOpen">Đăng nhập</button>
            <button class="tablinks signin" onclick="openTab(event,'Register')">Đăng ký</button>
        </div>
        
        <div class="tabcontent" id="Login">
            <form class="login-form" action="userLogin.php" method="post">
                <div>
                    <label>Số điện thoại/Email</label> <br>
                    <input onkeyup="validateLogin()" id="login-name"  class="input" type="text" name="u" required > <br>
                </div>
                <div>
                    <label>Mật khẩu</label> <br>
                    <input onkeyup="validateLogin()" id="login-pass" class="input" type="password" name="p" required> <br>
                </div>
                
                <div>
                    <a href="#" style="text-decoration: none;">Quên mật khẩu?</a>
                </div>
                <hr>
                <div class="submit-button">
                    <button id="login-button" type="submit" disabled>Đăng nhập</button>
                </div>
            </form>
        </div>
        
        <div class="tabcontent" id="Register">
            <form class="register-form" action="userRegister.php" method="post">
                <div>
                    <label>Số điện thoại</label> <br>
                    <input onkeyup="validateRegisting()" id="register-name" class="input" type="text" name="ac" required> <br>
                </div>

             

                <div>
                    <label>Mật khẩu</label> <br>
                    <input onkeyup="validateRegisting()" id="register-pass" class="input" type="password" name="pas" required> <br>
                </div>
                <hr>
                <div class="submit-button">
                    <button id="regist-button" type="submit" disabled>Đăng ký</button>
                </div>
            </form>
        </div>
        
    </div>
    <footer>
        <div class="footer-container">
            <div class="contact-footer">
                <h2>2nd Clothes</h2>
                <p>Chúng tôi tự hào là đơn vị cung cấp quần áo secondhand chất lượng và rẻ. Mang đến cho mọi người cơ hội sở hữu những chiếc áo local brand phù hợp với túi tiền</p>
                <h2> Địa chỉ:</h2>
                <p>số 1234/12/12/12 tp Hồ Chí Minh</p>
            </div>
            <div class="help-footer">
                <h2>Hỗ trợ khách hàng</h2>
                <a href=""><p>Giới thiệu 2nd Clothes</p></a>
                <a href=""><p>Hướng dẫn đặt hàng</p></a>
                <a href=""><p>Chính sách và quy định</p></a>
                <a href=""><p>Chính sách bảo mật</p></a>
            </div>
            <div class="network-footer">
                <h4>Chăm sóc khách hàng</h4>
                
                <h4> <i class="fa fa-phone"></i>+84912768673</h4>
                <h4><i class="fa fa-envelope"></i>2ndclothesvn@gmail.com</h4>
                <h4>Theo dõi chúng tôi</h4>
                <h4><i class="fa fa-facebook border"></i>
                     <i class="fa fa-twitter border"></i>
                    <i class="fa fa-youtube border"></i>
                   
                </h4>
            </div>
        </div>
        <div class="copyright">

        </div>
    </footer>
    <script src="./js/login.js"></script>
    
    <script src="./js/header.js"></script>
    <script src="./js/search.js"></script>

    
</body>
</html>