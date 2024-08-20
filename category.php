<link rel="stylesheet" href="./css/home.css">
<div class="category_box">
    <div class="tab">
        <button class="tablinks" onclick="openCategory(event, 'Hành_động',0)" id="defaultOpen">Hành động</button>
        <button class="tablinks" onclick="openCategory(event, 'Phiêu_lưu',3)">Phiêu lưu</button>
        <button class="tablinks" onclick="openCategory(event, 'Tình_cảm',6)">Tình cảm</button>
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
                        <a href="product.php" class="product_image">
                            <img src="<?= $product['img1'] ?>" alt="">
                        </a>
                        <div class="product_bottom">
                            <a href="product.php"><?= $product['title'] ?></a>
                            <div class="product_price">
                                <p class="newprice"><?= $product['newPrice'] ?>đ<span id="discount">-<?= (1-($product['newPrice']/$product['oldPrice']))*100 ?>%</span></p>
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
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test2.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test3.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
        </div>                           
    </div>
    <div id="Phiêu_lưu" class="tabcontent">
        <div class="mySlides fade">
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test4.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test4.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test5.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test2.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test6.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test3.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
        </div>                           
    </div>       
    <div id="Tình_cảm" class="tabcontent">
        <div class="mySlides fade">
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test1.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test2.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test3.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
        </div>                           
    </div>
    <div id="Hài_hước" class="tabcontent">
        <div class="mySlides fade">
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test1.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test2.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test3.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
        </div>                           
    </div>
    <div id="Kinh_dị" class="tabcontent">
        <div class="mySlides fade">
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test1.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test2.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test3.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
        </div>                           
    </div>
    <div id="Đời_thường" class="tabcontent">
        <div class="mySlides fade">
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test1.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test2.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test3.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
        </div>                           
    </div>
    <div id="Trường_học" class="tabcontent">
        <div class="mySlides fade">
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test1.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test1.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test2.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test2.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
                
        </div>
        <div class="mySlides fade">
            
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
                <a href="#" class="product_image">
                    <img src="./images/product/test3.jpg" alt="">
                </a>
                <div class="product_bottom">
                    <a href="#">Shin kậu pé pút ckì</a>
                    <div class="product_price">
                        <p class="newprice">599.400 đ <span>-40%</span></p>
                        <p class="oldprice">999.000 đ</p>
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
            <div class="product_container">
            <a href="#" class="product_image">
                <img src="./images/product/test3.jpg" alt="">
            </a>
            <div class="product_bottom">
                <a href="#">Shin kậu pé pút ckì</a>
                <div class="product_price">
                    <p class="newprice">599.400 đ <span>-40%</span></p>
                    <p class="oldprice">999.000 đ</p>
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
        </div>                           
    </div>           
    <div class="sliderButton" id="slider_next" onclick="plusSlides(1)" ></div> 
    <div class="sliderButton" id="slider_prev" onclick="plusSlides(-1)"></div>
</div>