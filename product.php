<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPBooks.com - Manga - Comic</title>
    <link rel="icon" href="./images/home/header/iconlogo.png" type="">
    <link rel="stylesheet" href="./css/foothead.css">
    <link rel="stylesheet" href="./css/product.css">
    <?php
    require_once 'header.php';
    require_once 'connectdb.php';
    $id = $_GET['productID'];
    settype($id, "int");
    $product = getProduct($id);
    try {
        $sql = "SELECT * FROM product WHERE nxb = '$product[nxb]' LIMIT 5";
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

<body>
    <?php
    $id = $_GET['productID'];
    settype($id, "int");
    $product = getProduct($id);
    try {
        $sql = "SELECT * FROM product WHERE nxb = '$product[nxb]' LIMIT 5";
        $relevant = $conn->query($sql);

        // Fetch all rows from the result set
        $relevant = $relevant->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die("Error in function: " . __FUNCTION__ . ":" . $e->getMessage());
    }
    ?>
    <div class="bodyContainer">
        <div class="productContainer">
            <div class="imageContainer">
                <div id="gallery" class="galleryContainer">
                    <div class="imgExtend">
                        <img id="expandedImg1">
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="<?= $product['img1'] ?>" onclick="myFunction(this,1);" id="defaultOpen">
                        </div>
                        <div class="column">
                            <img src="<?= $product['img2'] ?>" onclick="myFunction(this,1);">
                        </div>
                        <div class="column">
                            <img src="<?= $product['img3'] ?>" onclick="myFunction(this,1);">
                        </div>
                        <div class="column">
                            <img src="<?= $product['img4'] ?>" onclick="myFunction(this,1);">
                        </div>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <div id="gallery" class="modal-content">
                        <div class="imgExtend">
                            <img id="expandedImg2">
                        </div>
                        <div class="row">
                            <div class="column">
                                <img src="<?= $product['img1'] ?>" onclick="myFunction(this,2);" id="defaultOpen2">
                            </div>
                            <div class="column">
                                <img src="<?= $product['img2'] ?>" onclick="myFunction(this,2);">
                            </div>
                            <div class="column">
                                <img src="<?= $product['img3'] ?>" onclick="myFunction(this,2);">
                            </div>
                            <div class="column">
                                <img src="<?= $product['img4'] ?>" onclick="myFunction(this,2);">
                            </div>
                        </div>
                    </div>
                    <div id="imgText"></div>
                </div>
            </div>
            <div class="imageLeft">
                <div id="productTitle"><?= $product['title'] ?></div>
                <span id="rate"><?= $product['rating'] ?><img src="./images/product/star.png" alt=""></span>
                <div class="publicDetail">
                    <div id="NXB">Nhà xuất bản: <b><?= $product['nxb'] ?></b></div>
                    <div id="author">Tác giả: <b><?= $product['author'] ?></b></div>
                </div>
                <div class="price">
                    <div class="oldPrice"><?= $product['oldPrice'] ?> đ</div>
                    <div class="newPrice"><?= $product['newPrice'] ?> đ</div>
                    <div class="discount"><span id="discount">-<?= round((1 - ($product['newPrice'] / $product['oldPrice'])) * 100, 1) ?>%</div>
                </div>
                <div class="qtyControl">
                    <p>Số lượng:</p>
                    <div class="qtyBTgroup">
                        <button>-</button>
                        <div id="qty">1</div>
                        <button>+</button>
                    </div>
                </div>
                <div class="buy">
                    <?php if (!isset($_SESSION['userID'])) {
                        echo "<button type='submit' onclick='addCartFromDetail()' class='addCart'>Thêm vào giỏ</button>";
                    } else {
                        echo "<button type='submit' onclick='addCartFromDetail()' class='addCart' disabled >Thêm vào giỏ</button>";
                    }
                    ?>
                    <div class="buyNow">Mua ngay</div>
                </div>
                <div class=""></div>
            </div>
        </div>
        <div class="detailContainer">
            <div class="detail">
                <p style="font-size:25px; font-weight:bold">MÔ TẢ SẢN PHẨM</p>
                <?= $product['description'] ?>
            </div>

        </div>
        <p style="font-size:25px; font-weight:bold; width:80%; margin:auto;">Các sản phẩm cùng Nhà Xuất Bản</p>
        <div class="relevantContainer">
            <?php
            foreach ($relevant as $productItem) {
            ?>
                <div class="product_container2">
                    <a href="product.php?productID=<?= $productItem['productID'] ?>" class="product_image">
                        <img src="<?= $productItem['img1'] ?>" alt="">
                    </a>
                    <div class="product_bottom">
                        <div class="title"><a href="product.php?productID=<?= $productItem['productID'] ?>"><?= $productItem['title'] ?></a></div>
                        <div class="product_price">
                            <p class="newprice"><?= $productItem['newPrice'] ?>đ<span id="discount">-<?= round((1 - ($productItem['newPrice'] / $productItem['oldPrice'])) * 100, 1) ?>%</span></p>
                            <p class="oldprice"><?= $productItem['oldPrice'] ?> đ</p>
                        </div>
                        <div class="buyContainer">
                            <div class="addCart"><?php  ?>Thêm vào giỏ</div>
                            <div class="buyNow">Mua ngay</div>
                        </div>
                        <div class="rating_container">
                            <div class="rating">

                            </div>
                            <div class="soldqty">

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php require_once 'footer.php' ?>
    <script src="./js/product.js"></script>
</body>

</html>