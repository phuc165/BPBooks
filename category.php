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
$count = 0;
?>

<link rel="stylesheet" href="./css/home.css">
<div class="category_box">
    <div class="tab">
        <?php
            foreach ($theLoai as $TL) {
                if ($count == 3) break;     
                $count++;       
                $categoryDisplayName = str_replace("_", " ", $TL['theLoai']); ?>
                <button class="tablinks" onclick="openCategory(event, '<?=$TL['theLoai']?>', <?=$i?>)" <?php if ($i == 0) { echo ' id="defaultOpen"'; }?>><?=$categoryDisplayName?></button>
            <?php 
                $i += 3; 
            } 
        ?>
    </div>      
    <?php
        $count = 0;
        foreach ($theLoai as $TL) {
            if ($count == 3) break;
            $count++;
            $idTheLoai = $TL['theLoai'];
            $product = getProduct4Slide($idTheLoai);
    ?>
            <div id="<?=$TL['theLoai']?>" class="tabcontent">
                <div class="mySlides fade">
                    <?php
                    for ($p = 0; $p < 5; $p++) {
                        $productItem = $product[$p];
                    ?>
                        <div class="product_container">
                            <a href="product.php?productID=<?=$productItem['productID']?>" class="product_image">
                                <img src="<?= $productItem['img1'] ?>" alt="">
                            </a>
                            <div class="product_bottom">
                                <div class="title"><a href="product.php?productID=<?=$productItem['productID']?>"><?= $productItem['title'] ?></a></div>
                                <div class="product_price">
                                    <p class="newprice"><?= $productItem['newPrice'] ?>đ<span id="discount">-<?= round((1-($productItem['newPrice']/$productItem['oldPrice']))*100,1) ?>%</span></p>
                                    <p class="oldprice"><?= $productItem['oldPrice'] ?> đ</p>
                                </div>
                                <div class="buyContainer">
                                    <form class="addCart" method="post" action="xulygiohang.php">
                                        <input type="hidden" name="productID" value="<?=$productItem['productID']?>"/>
                                        <button type="submit" style="border: none; background-color: #CF0A0A; color: white; font-size:16px; cursor: pointer;">Thêm vào giỏ</button>
                                    </form>
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
                <div class="mySlides fade">
                    <?php
                    for ($p = 5; $p < 10; $p++) {
                        $productItem = $product[$p];
                    ?>
                        <div class="product_container">
                            <a href="product.php?productID=<?=$productItem['productID']?>" class="product_image">
                                <img src="<?= $productItem['img1'] ?>" alt="">
                            </a>
                            <div class="product_bottom">
                                <div class="title"><a href="product.php?productID=<?=$productItem['productID']?>"><?= $productItem['title'] ?></a></div>
                                <div class="product_price">
                                    <p class="newprice"><?= $productItem['newPrice'] ?>đ<span id="discount">-<?= round((1-($productItem['newPrice']/$productItem['oldPrice']))*100,1) ?>%</span></p>
                                    <p class="oldprice"><?= $productItem['oldPrice'] ?> đ</p>productItem
                                </div>
                                <div class="buyContainer">
                                    <form class="addCart" method="post" action="xulygiohang.php">
                                        <input type="hidden" name="productID" value="<?=$productItem['productID']?>"/>
                                        <button type="submit" style="border: none; background-color: #CF0A0A; color: white; font-size:16px; cursor: pointer;">Thêm vào giỏ</button>
                                    </form>
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
                <div class="mySlides fade">
                    <?php
                    for ($p = 10; $p < 15; $p++) {
                        $productItem = $product[$p];
                    ?>
                        <div class="product_container">
                            <a href="product.php?productID=<?=$productItem['productID']?>" class="product_image">
                                <img src="<?= $productItem['img1'] ?>" alt="">
                            </a>
                            <div class="product_bottom">
                                <div class="title"><a href="product.php?productID=<?=$productItem['productID']?>"><?= $productItem['title'] ?></a></div>
                                <div class="product_price">
                                    <p class="newprice"><?= $productItem['newPrice'] ?>đ<span id="discount">-<?= round((1-($productItem['newPrice']/$productItem['oldPrice']))*100,1) ?>%</span></p>
                                    <p class="oldprice"><?= $productItem['oldPrice'] ?> đ</p>productItem
                                </div>
                                <div class="buyContainer">
                                    <form class="addCart" method="post" action="xulygiohang.php">
                                        <input type="hidden" name="productID" value="<?=$productItem['productID']?>"/>
                                        <button type="submit" style="border: none; background-color: #CF0A0A; color: white; font-size:16px; cursor: pointer;">Thêm vào giỏ</button>
                                    </form>
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
    <?php            
        }
    ?>           
    <div class="sliderButton" id="slider_next" onclick="plusSlides(1)" ></div> 
    <div class="sliderButton" id="slider_prev" onclick="plusSlides(-1)"></div>
</div>


<?php
    