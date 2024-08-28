<div class="listContainer">
        <?php 
            for ($i=1; $i<=40; $i++) { 
                $product = getProduct($i); ?>
                <div class="product_container2">
                    <a href="product.php?productID=<?=$product['productID']?>" class="product_image">
                        <img src="<?= $product['img1'] ?>" alt="">
                    </a>
                    <div class="product_bottom">
                        <div class="title">
                            <a href="product.php?productID=<?=$product['productID']?>"><?= $product['title']?></a>
                        </div>                        
                        <div class="product_price">
                            <p class="newprice"><?= $product['newPrice'] ?> đ<span>--<?= round((1-($product['newPrice']/$product['oldPrice']))*100,1) ?>%</span></p>
                            <p class="oldprice"><?= $product['oldPrice'] ?> đ</p>
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
        <div class="category_expand" id="showmore" onclick="ShowAll()">Xem thêm</div>
    </div>