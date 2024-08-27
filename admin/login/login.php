<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="login-container">
        <form action="xulylogin.php" method="post" class="form">
            <div class="form-group">
                <label>Username</label><br> <input name="u" type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label><br> <input name="p" type="password" class="form-control"/>
            </div>
            <div class="form-group">
                <input name="btn" type="submit" value="Đăng nhập" class="submit-button"/>
            </div>
        </form>
    </div>
    
</body>
</html>