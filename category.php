<script src="./js/home.js"></script>
<script src="./js/addCart.js"></script>
<link rel="stylesheet" href="./css/home.css">
<?php
require_once 'connectdb.php';

try {
    $sql = "SELECT DISTINCT theLoai FROM product";
    $theLoai = $conn->query($sql);

    // Fetch all rows from the result set
    $theLoai = $theLoai->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Error in function: " . __FUNCTION__ . ":" . $e->getMessage());
}
$i = 0;
$check = true;
?>

<link rel="stylesheet" href="./css/home.css">
<div class="category_box">
    <div class="tab">
        <?php
        foreach ($theLoai as $TL) {
            $categoryDisplayName = str_replace("_", " ", $TL['theLoai']); ?>
            <button
                class="tablinks"
                onclick="openCategory(event, '<?= $TL['theLoai'] ?>', <?= $i ?>)"
                <?php if ($i == 0) {
                    echo ' id="defaultOpen"';
                } else {
                    echo ' id="' . $TL['theLoai'] . '2"';
                }
                ?>>
                <?= $categoryDisplayName ?>
            </button>
        <?php
            $i += 3;
        } ?>
    </div>
    <?php
    foreach ($theLoai as $TL) {
        $idTheLoai = $TL['theLoai'];
        $product = getProduct4Slide($idTheLoai);
        if (count($product) >= 15) {
    ?>
            <div id="<?= $TL['theLoai'] ?>" class="tabcontent">
                <div class="mySlides fade">
                    <?php
                    for ($p = 0; $p < 5; $p++) {
                        $productItem = $product[$p];
                        $object = json_encode([
                            "id" => $productItem['productID'],
                            "qty" => 1,
                            "title" => $productItem['title'],
                            "img" => $productItem['img1'],
                            "productQty" => $productItem['productQty'],
                            "newPrice" => $productItem['newPrice'],
                            "oldPrice" => $productItem['oldPrice']
                        ], JSON_UNESCAPED_UNICODE);
                        echo "
                        <div class='product_container'>
                            <a href='product.php?productID={$productItem['productID']}' class='product_image'>
                                <img src='{$productItem['img1']}' alt=''>
                            </a>
                            <div class='product_bottom'>
                                <div class='title'><a href='product.php?productID={$productItem['productID']}'>{$productItem['title']}</a></div>
                                <div class='product_price'>
                                    <p class='newprice'>{$productItem['newPrice']}đ<span id='discount'>-" . round((1 - ($productItem['newPrice'] / $productItem['oldPrice'])) * 100, 1) . "%</span></p>
                                    <p class='oldprice'>{$productItem['oldPrice']} đ</p>
                                </div>
                                <div class='buyContainer'>
                                    <form method='post' action='addCart.php'>
                                        <input type='hidden' name='productID' value='{$object}' />
                                        <button type='submit' class='addCart'>Thêm vào giỏ</button>
                                    </form>
                                    <button class='buyNow' <a href='./thanhtoan.php?productID={$productItem['productID']}&qty=1&Cart=0'>Mua ngay</button>
                                </div>
                                <div class='rating_container'>
                                    <div class='rating'>

                                    </div>
                                    <div class='soldqty'>

                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                    } ?>
                </div>
                <div class="mySlides fade">
                    <?php
                    for ($p = 5; $p < 10; $p++) {
                        $productItem = $product[$p];
                        $object = json_encode([
                            "id" => $productItem['productID'],
                            "qty" => 1,
                            "title" => $productItem['title'],
                            "img" => $productItem['img1'],
                            "productQty" => $productItem['productQty'],
                            "newPrice" => $productItem['newPrice'],
                            "oldPrice" => $productItem['oldPrice']
                        ], JSON_UNESCAPED_UNICODE);
                        echo "
                        <div class='product_container'>
                            <a href='product.php?productID={$productItem['productID']}' class='product_image'>
                                <img src='{$productItem['img1']}' alt=''>
                            </a>
                            <div class='product_bottom'>
                                <div class='title'><a href='product.php?productID={$productItem['productID']}'>{$productItem['title']}</a></div>
                                <div class='product_price'>
                                    <p class='newprice'>{$productItem['newPrice']}đ<span id='discount'>-" . round((1 - ($productItem['newPrice'] / $productItem['oldPrice'])) * 100, 1) . "%</span></p>
                                    <p class='oldprice'>{$productItem['oldPrice']} đ</p>
                                </div>
                                <div class='buyContainer'>
                                    <form method='post' action='addCart.php'>
                                        <input type='hidden' name='productID' value='{$object}' />
                                        <button type='submit' class='addCart'>Thêm vào giỏ</button>
                                    </form>
                                    <button class='buyNow'>Mua ngay</button>
                                </div>
                                <div class='rating_container'>
                                    <div class='rating'>

                                    </div>
                                    <div class='soldqty'>

                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                    } ?>
                </div>
                <div class="mySlides fade">
                    <?php
                    for ($p = 10; $p < 15; $p++) {
                        $productItem = $product[$p];
                        $object = json_encode([
                            "id" => $productItem['productID'],
                            "qty" => 1,
                            "title" => $productItem['title'],
                            "img" => $productItem['img1'],
                            "productQty" => $productItem['productQty'],
                            "newPrice" => $productItem['newPrice'],
                            "oldPrice" => $productItem['oldPrice']
                        ], JSON_UNESCAPED_UNICODE);
                        echo "
                        <div class='product_container'>
                            <a href='product.php?productID={$productItem['productID']}' class='product_image'>
                                <img src='{$productItem['img1']}' alt=''>
                            </a>
                            <div class='product_bottom'>
                                <div class='title'><a href='product.php?productID={$productItem['productID']}'>{$productItem['title']}</a></div>
                                <div class='product_price'>
                                    <p class='newprice'>{$productItem['newPrice']}đ<span id='discount'>-" . round((1 - ($productItem['newPrice'] / $productItem['oldPrice'])) * 100, 1) . "%</span></p>
                                    <p class='oldprice'>{$productItem['oldPrice']} đ</p>
                                </div>
                                <div class='buyContainer'>
                                    <form method='post' action='addCart.php'>
                                        <input type='hidden' name='productID' value='{$object}' />
                                        <button type='submit' class='addCart'>Thêm vào giỏ</button>
                                    </form>
                                    <button class='buyNow'>Mua ngay</button>
                                </div>
                                <div class='rating_container'>
                                    <div class='rating'>

                                    </div>
                                    <div class='soldqty'>

                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                    } ?>
                </div>
            </div>
    <?php
        } else {
            echo    '<script>
                                const element = document.getElementById("' . $TL['theLoai'] . '2");
                                element.style.display="none";
                            </script>';
        }
    }
    ?>
    <div class="sliderButton" id="slider_next" onclick="plusSlides(1)"></div>
    <div class="sliderButton" id="slider_prev" onclick="plusSlides(-1)"></div>
</div>


<?php
