<div class="productList" >
    <div class="productFilter">
        <p>Lọc sản phẩm</p>
        <div class="Filter">
            <button class="dropBtn">Giá</button>
            <div class="dropdownContent">
                <div class="filterContent"><input type="checkbox">0-100,000đ</div>
                <div class="filterContent"><input type="checkbox">100,000đ-200,000đ</div>
                <div class="filterContent"><input type="checkbox">200,000đ-500,000đ</div>
                <div class="filterContent"><input type="checkbox">500,000đ trở lên</div>
            </div>
        </div>
        <div class="Filter">
            <button class="dropBtn">Độ tuổi</button>
            <div class="dropdownContent">
                <div class="filterContent"><input type="checkbox">6+</div>
                <div class="filterContent"><input type="checkbox">11+</div>
                <div class="filterContent"><input type="checkbox">16+</div>
                <div class="filterContent"><input type="checkbox">18+</div>
            </div>
        </div>
        <div class="Filter">
            <button class="dropBtn">Nhà xuất bản</button>
            <div class="dropdownContent">
                <div class="filterContent"><input type="checkbox">NXB Trẻ</div>
                <div class="filterContent"><input type="checkbox">NXB Kim Đồng</div>
                <div class="filterContent"><input type="checkbox">IPM</div>                
            </div>
        </div>
    </div>
    <div class="listContainer">
        <?php 
            for ($i=1; $i<=40; $i++) { 
                $product = getProduct($i); ?>
                <div class="product_container2">
                    <a href="product.php?productID=<?=$product['productID']?>" class="product_image">
                        <img src="<?= $product['img1'] ?>" alt="">
                    </a>
                    <div class="product_bottom">
                        <a href="product.php?productID=<?=$product['productID']?>"></a>
                        <div class="product_price">
                            <p class="newprice"><?= $product['newPrice'] ?> đ<span>--<?= round((1-($product['newPrice']/$product['oldPrice']))*100,1) ?>%</span></p>
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
        <div class="category_expand" id="showmore" onclick="ShowAll()">Xem thêm</div>
    </div>
</div>
<script src="./js/productList.js"></script>