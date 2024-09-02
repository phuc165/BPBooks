<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/reusable.css">
    <link rel="stylesheet" href="./css/productDetail.css">
    <title>Document</title>
    <link rel="shortcut icon" href="./Image/brand/favicon.jpg" type="image/x-icon">


    <?php
    session_start();

    require_once "./admin/connectdb.php";

    $id = $_GET["productID"];
    settype($id, "integer");

    $product;

    $sql = "SELECT * FROM product WHERE productID =$id";
    $kq = $conn->query($sql);
    if ($kq->rowCount() == 1) {
        $product = $kq->fetch();
    }

    try {
        $sql = "SELECT * FROM product WHERE category= '$product[category]' LIMIT 5";
        $relevant = $conn->query($sql);

        // Fetch all rows from the result set
        $relevant = $relevant->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die("Error in function: " . __FUNCTION__ . ":" . $e->getMessage());
    }

    ?>

    <script>
        var productDetail = <?php echo json_encode($product); ?>;
    </script>
</head>

<body onload=" InnerBuyButton();UpdateQtttext() ">


    <?php require_once 'header.php'; ?>
    <div class="bodyContainer">
        <div id="productDetailContainer" class="productContainer">
            <div class="imageContainer">
                <div id="gallery" class="galleryContainer">
                    <div class="imgExtend">
                        <img id="expandedImg1" src="<?= $product['image'] ?>">
                    </div>

                </div>

                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <div id="gallery" class="modal-content">
                        <div class="imgExtend">
                            <img id="expandedImg2" src="<?= $product['image'] ?>">
                        </div>

                    </div>
                    <div id="imgText"></div>
                </div>
            </div>
            <div class="imageLeft">
                <div id="productTitle"><?= $product['productname'] ?></div>
                <span id="rate">Đánh giá: 5/5</span>
                <div class="publicDetail">
                    <div id="Brand">Phân loại: <b><?= $product['category'] ?></b></div>
                    <div id="Size">Size: <b><?= $product['size'] ?></b></div>
                </div>
                <div class="price">
                    <?php if ($product['discount'] > 0) {
                        echo "  <div class='oldPrice'>{$product['price']} <sup>đ</sup> </div>
                    
                    <div class='newPrice'>" . ($product['price'] - $product['price'] * $product['discount'] / 100) . "<sup>đ</sup></div>
                    <div class='discount'>{$product['discount']}%</div>";
                    } else {
                        echo "<div class='newPrice'>{$product['price']}<sup>đ</sup></div>";
                    }
                    ?>
                </div>
                <div class="qtyControl">
                    <p>Số lượng:</p>
                    <div class="qtyBTgroup">
                        <button onclick="MinusQtt()">-</button>
                        <div id="qtt" class="qty">0</div>
                        <button onclick="PlusQtt()">+</button>
                    </div>
                </div>
                <div class="buy">
                    <?php if (isset($_SESSION["userName"])) {
                        echo "<button type='submit' onclick='addCartFromDetail()' class='addCart'>Thêm vào giỏ</button>";
                    } else {
                        echo "<button type='submit' onclick='addCartFromDetail()' class='addCart' disabled >Thêm vào giỏ</button>";
                    }

                    ?>
                    <div id="buyNow" class="buyNow"></div>
                </div>
                <div class=""></div>
                <div class="detailContainer">
                    <div class="detail">
                        <h1>Thông tin sản phẩm</h1>

                        <p>Size: <?= $product['size'] ?></p>
                        <p><?= $product['description'] ?></p>



                    </div>

                </div>
            </div>
        </div>

        <!-- to here-->
        <div class="relate-product col-100">
            <h1>Sản phẩm liên quan</h1>
            <div class="relate-product-list col-100">
                <?php foreach ($relevant as $k) {
                    echo "
                <div class='relate-product-item col-20'>
                    <a class='relate-link' href='productDetail.php?productID={$k['productID']}'>
                    <div class='rpImg col-80'>
                        <img class='col-100' src='{$k['image']}' alt=''>
                    </div>
                    <div class='rpName col-80'>
                        <p>{$k['productname']}</p>
                    </div>
                    </a>
                    <div class='rpPrice col-50'>";
                    if ($k['discount'] > 0) {
                        $afterdiscount = $k['price'] - $k['price'] * $k['discount'] / 100;
                        echo "
                        <p style='color:#bababa; font-size:18px;margin-top:22px'><del>{$k['price']}</del>   </p>
                        <p>{$afterdiscount}<sup>đ</sup></p>
                        <div class='price-discount'>
                            <p>-15%</p>
                        </div>";
                    } else {
                        echo "
                        <p>{$k['price']}<sup>đ</sup></p>";
                    }
                    echo "</div>
                </div>";
                } ?>


            </div>
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
                <a href="">
                    <p>Giới thiệu 2nd Clothes</p>
                </a>
                <a href="">
                    <p>Hướng dẫn đặt hàng</p>
                </a>
                <a href="">
                    <p>Chính sách và quy định</p>
                </a>
                <a href="">
                    <p>Chính sách bảo mật</p>
                </a>
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
    <script src="./js/productDetail.js"></script>
    <script src="./js/header.js"></script>



</body>

</html>