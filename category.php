<link rel="stylesheet" href="./css/home.css">
<div class="category_box">
    <div class="tab">
        <button class="tablinks" onclick="openCategory(event, 'Hành_động',0)" id="defaultOpen">Hành động</button>
        <button class="tablinks" onclick="openCategory(event, 'Phiêu_lưu',3)">Phiêu lưu</button>
        <button class="tablinks" onclick="openCategory(event, 'Lãng_mạn',6)">Lãng mạn</button>
        <button class="tablinks" onclick="openCategory(event, 'Hài_hước',9)">Hài hước</button>
        <button class="tablinks" onclick="openCategory(event, 'Kinh_dị',12)">Kinh dị</button>
        <button class="tablinks" onclick="openCategory(event, 'Đời_thường',15)">Đời thường</button>
        <button class="tablinks" onclick="openCategory(event, 'Trường_học',18)">Trường học</button>
    </div>                
    <div id="Hành_động" class="tabcontent">
        <div class="mySlides fade">
            <?php 
                $idTheLoai = "Hành_động";
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
        <div class="mySlides fade">
            <?php 
                $idTheLoai = "Hành_động";
                for ($i=6; $i<=10; $i++){
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
        <div class="mySlides fade">
            <?php 
                $idTheLoai = "Hành_động";
                for ($i=11; $i<=15; $i++){
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
    <div id="Phiêu_lưu" class="tabcontent">
        <div class="mySlides fade">
            <?php 
                $idTheLoai2 = "Phiêu_lưu";
                for ($i=17; $i<=21; $i++){
                    $product = getProduct4Slide($idTheLoai2, $i);  ?>
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
        <div class="mySlides fade">
            <?php 
                $idTheLoai2 = "Phiêu_lưu";
                for ($i=22; $i<=26; $i++){
                    $product = getProduct4Slide($idTheLoai2, $i);  ?>
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
        <div class="mySlides fade">
            <?php 
                $idTheLoai2 = "Phiêu_lưu";
                for ($i=27; $i<=31; $i++){
                    $product = getProduct4Slide($idTheLoai2, $i);  ?>
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
    <div id="Lãng_mạn" class="tabcontent">
        <div class="mySlides fade">
            <?php 
                $idTheLoai3 = "Lãng_mạn";
                for ($i=33; $i<=37; $i++){
                    $product = getProduct4Slide($idTheLoai3, $i);  ?>
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
        <div class="mySlides fade">
            <?php 
                $idTheLoai3 = "Lãng_mạn";
                for ($i=38; $i<=42; $i++){
                    $product = getProduct4Slide($idTheLoai3, $i);  ?>
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
        <div class="mySlides fade">
            <?php 
                $idTheLoai3 = "Lãng_mạn";
                for ($i=43; $i<=47; $i++){
                    $product = getProduct4Slide($idTheLoai3, $i);  ?>
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
    <div class="sliderButton" id="slider_next" onclick="plusSlides(1)" ></div> 
    <div class="sliderButton" id="slider_prev" onclick="plusSlides(-1)"></div>
</div>