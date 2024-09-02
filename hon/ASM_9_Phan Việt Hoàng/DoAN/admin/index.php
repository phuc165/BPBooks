 <?php
session_start();
if (!isset($_SESSION['userName'])){
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
        <header>2ndClothes - ADMIN</header>
        <div class="menu">
            <a href="index.php" class="home">Home</a>
            <form method="post" action="./login/logout.php">
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>

        <div class="site">
            <a href="admin.php?bill=0">
                <img src="./images/product_icon.png"/>
                <div class="name">Product</div>
            </a>
        </div>
        <div class="site">
            <a href="admin.php?bill=1">
                <img src="./images/Bill-Icon.png"/>
                <div class="name">Bill</div>
            </a>
        </div>
    </div>
</body>
</html>