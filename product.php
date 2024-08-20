// title, giá cũ/mới, url img, rate, mô tả, ID, NXB, Tác giả, độ tuổi,
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPBooks.com - Manga - Comic</title>
    <link rel="icon" href="./images/home/header/iconlogo.png" type="">
    <link rel="stylesheet" href="./css/foothead.css">
    <link rel="stylesheet" href="./css/product.css">
</head>
<body>
    <?php require_once 'header.php' ?>
    <div class="bodyContainer">
        <div class="productContainer">
            <div class="imageContainer">
                <div id="gallery" class="galleryContainer">                                    
                    <div class="imgExtend">
                        <img id="expandedImg1"> 
                    </div>          
                    <div class="row">
                        <div class="column">
                            <img src="./images/product/test1.jpg" onclick="myFunction(this,1);"id="defaultOpen">
                        </div>
                        <div class="column">
                            <img src="./images/product/test2.jpg" onclick="myFunction(this,1);">
                        </div>
                        <div class="column">
                            <img src="./images//product/test3.jpg" onclick="myFunction(this,1);">
                        </div>
                        <div class="column">
                            <img src="./images//product/test4.jpg" onclick="myFunction(this,1);">
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
                                <img src="./images/product/test1.jpg" onclick="myFunction(this,2);"id="defaultOpen2">
                            </div>
                            <div class="column">
                                <img src="./images/product/test2.jpg" onclick="myFunction(this,2);">
                            </div>
                            <div class="column">
                                <img src="./images/product/test3.jpg" onclick="myFunction(this,2);">
                            </div>
                            <div class="column">
                                <img src="./images/product/test4.jpg" onclick="myFunction(this,2);">
                            </div>                         
                        </div>                        
                    </div>
                    <div id="imgText"></div>                 
                </div>
            </div>
            <div class="imageLeft">
                <div id="productTitle" >Sách - Bocchi The Rock!: Tập 4 (Tặng Kèm Standee Ivory, Số Lượng Có Hạn)</div>
                <span id="rate">5<img src="./images/product/star.png" alt=""></span>
                <div class="publicDetail">
                    <div id="NXB">Nhà xuất bản: <b>NXB Kim Đồng</b></div>
                    <div id="author">Tác giả: <b>Aki Hamazi</b></div>
                </div>
                <div class="price">
                    <div class="oldPrice">999 đ</div>
                    <div class="newPrice">20.000 đ</div>
                    <div class="discount">-5%</div>
                </div>                
                <div class="qtyControl">
                    <p>Số lượng:</p>
                    <div class="qtyBTgroup">
                        <button>-</button>
                        <div class="qty">2</div>
                        <button>+</button>
                    </div>                    
                </div>
                <div class="buy">
                    <div class="addCart">Thêm vào giỏ</div>
                    <div class="buyNow">Mua ngay</div>
                </div>
                <div class=""></div>
            </div>  
        </div>
        <div class="detailContainer">
            <div class="detail">
                Mô tả sản phẩm
            </div>
            
        </div>
    </div>
    <?php require_once 'footer.php' ?>
    <script src="./js/product.js"></script>
</body>
</html>