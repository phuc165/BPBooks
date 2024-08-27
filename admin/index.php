<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location: ./login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <header>BPBOOKS - ADMIN</header>
        <div class="menu">
            <a href="index.php" class="home">Home</a>
            <form method="post" action="./login/logout.php">
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>

        <div class="site">
            <a href="admin.php">
                <img src="./images/product_icon.png"/>
                <div class="name">Product</div>
            </a>
        </div>
    </div>
</body>
</html>