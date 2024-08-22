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

?>

<link rel="stylesheet" href="./css/home.css">
<div class="category_box">
<div class="tab">
        <?php 
            $i = 0;
            foreach ($theLoai as $TL) {            
                $categoryDisplayName = str_replace("_", " ", $TL['theLoai']); ?>
                <button class="tablinks" onclick="openCategory(event, '<?=$TL['theLoai']?>', <?=$i?>)" <?phpif ($i==0){echo id="defaultOpen";}?> ><?=$categoryDisplayName?></button>
            <?php 
                $i += 3; 
            } 
        ?>
    </div>      
    <?php 
        foreach ($theLoai as $TL) {
    ?>
            <div id="<?=$TL['theLoai']?>" class="tabcontent">
                <div class="mySlides fade">
                    <?php 
                        $idTheLoai = $TL['theLoai'];
                        for ($i=1; $i<=5; $i++){
                            $product = getProduct4Slide($idTheLoai, $i);  ?>
                            <div class="product_container">
                                <a href="product.php?productID=<?=$product['productID']?>" class="product_image">
                                    <img src="<?= $product['img1'] ?>" alt="">
                                </a>
                                <div class="product_bottom">
                                    <div class="title"><a href="product.php?productID=<?=$product['productID']?>"><?= $product['title'] ?></a></div>
                                    <div class="product_price">
                                        <p class="newprice"><?= $product['newPrice'] ?>đ<span id="discount">-<?= round((1-($product['newPrice']/$product['oldPrice']))*100,1) ?>%</span></p>
                                        <p class="oldprice"><?= $product['oldPrice'] ?> đ</p>
                                    </div>
                                    <div class="buyContainer">
                                        <div class="addCart">Thêm vào giỏ</div>
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