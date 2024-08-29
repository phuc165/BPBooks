<?php
session_start();
require_once 'connectdb.php';

if (!isset($_SESSION['userID'])){
    header("location: login.php");
}
else{
    if (!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = [];
    }
    
    if (isset($_POST['productID'])) {
        $productId = $_POST['productID'];
        $productData = getProduct4Cart($productId);
        $_SESSION['giohang'][] = $productData;
    
        header('Location: home.php');
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
    </head>
    <body>
        <?php require_once 'header.php' ?>
        <div class="bodyContainer">
            <h2>GIỎ HÀNG <span class="totalQty"></span></h2>
            <div class="cartContainer">
                <div class="col1">
                    <div class="firstRow">
                        <label for=""><span id="productCount"></span><input type="checkbox" name="" id="checkAll">Chọn tất cả</label>
                        <p>Số lượng</p>
                        <p>Thành tiền</p>
                        <div></div>
                    </div>
                    <!-- <div class="productContainer">
                        <div class="product">
                            <div class="checkColumn"><input type="checkbox" id="check"></div> 
                            <div class="imgHolder"><img src="./images/product/test2.jpg" alt=""></div>
                            <div id="title"></div>
                            <div class="qtyControl">
                                <button onclick="subQty()">-</button>
                                <div id="qty"></div>
                                <button onclick="addQty()">+</button>
                            </div>
                            <div class="price">
                                <div id="newprice"></div>
                                <div id="oldprice"></div>
                            </div>
                            <button class="delete" onclick="deleteProduct()"></button>
                        </div>                    
                    </div> -->
                    <div class="productContainer">
                        <?php if (isset($_SESSION['userID'])) : ?>
                            <?php if (!empty($_SESSION['giohang'])) : ?>
                                <?php foreach ($_SESSION['giohang'] as $product) : ?>
                                    <div class="product">
                                        <div class="checkColumn"><input type="checkbox" id="check"></div> 
                                        <div class="imgHolder"><img src="<?=$product['img1']?>" alt=""/></div>
                                        <div id="title"><?=$product['title']?></div>
                                        <div class="qtyControl">
                                            <button onclick="subQty()">-</button>
                                            <div id="qty"></div>
                                            <button onclick="addQty()">+</button>
                                        </div>
                                        <div class="price">
                                            <div id="newprice"></div>
                                            <div id="oldprice"></div>
                                        </div>
                                        <button class="delete" onclick="deleteProduct()"></button>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?> 
                        <?php endif; ?>
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