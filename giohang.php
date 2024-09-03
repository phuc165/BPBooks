<?php
session_start();
require_once 'connectdb.php';

if (!isset($_SESSION['userID'])) {
    header("location: login.php");
} else {
    $cartList = $_SESSION['cart'];
    global $cartToJson;
    if ($cartList != null) {
        foreach ($cartList as $cartItem) {
            $jsonCart = json_decode($cartItem, true);
            $cartToJson[] = $jsonCart;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng - BPBooks - Manga - Comic</title>
    <link rel="icon" href="./images/home/header/iconlogo.png" type="">
    <link rel="stylesheet" href="./css/foothead.css">
    <link rel="stylesheet" href="./css/cart.css">
    <script>
        var cartListJson = <?= json_encode($cartToJson); ?>
    </script>
</head>

<body onload="UpdateCart()">
    <?php require_once 'header.php' ?>
    <div class="bodyContainer">
        <h2> Giỏ hàng</h2>
        <div class="cartContainer">
            <div class="col1">
                <div class="firstRow">
                    <span id="totalItem"></span>
                    <p id="qtyTitle">Số lượng</p>
                    <p id="sumTitle">Thành tiền</p>
                </div>
                <div class="productContainer" id="cartList">

                </div>
            </div>
            <div class="col2">
                <div class="totalPrice">
                    <div class="row1">
                        <div>Thành tiền</div>
                        <div id="sum"></div>
                    </div>
                    <div class="pay"><a href="thanhtoan.php">THANH TOÁN</a></div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php' ?>
    <script src="./js/cart.js"></script>
</body>

</html>