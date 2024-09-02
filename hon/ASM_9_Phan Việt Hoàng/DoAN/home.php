<?php
session_start();


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reusable.css">
    <title>2nd Clothes</title>
    <link rel="shortcut icon" href="./Image/brand/favicon.jpg" type="image/x-icon">
    <?php
    session_start();
    
        require_once "./admin/connectdb.php";
       
            
 
        
    
         
        
    ?>
</head>
<body onload="autoSlideShow()">
<?php require_once 'header.php' ?>
    <div class="container">
        
        <article>
            <div class="home-page">
                <img id="anh"  alt="">
                <h1>"Brand in your hand" <br> &nbsp;&nbsp;&nbsp;&nbsp; Tới ngay 2ndClothes.</h1>
            </div>
            
            <div class="onSale-page">
                <h2>Sản phẩm bán chạy</h2>
                <div class="product-list">

    <?php 
         $sql = "SELECT * FROM product LIMIT 10";
         $kq = $conn->query($sql);
        for($i= 0;$i < $kq->rowCount();$i++){
            $productSingle = $kq->fetch();
            if($i<=3){
                echo"<div class='product-single col-20'>
            <a class='product-link' href ='productDetail.php?productID={$productSingle['productID']}'>
            <div class='product-img'>
                <img src='{$productSingle['image']}' alt=''>
            </div>
            <div class='product-name'>
                <p>{$productSingle['productname']} </p>
                
            </div>
            
            </a>
            <div class='product-price'>
               
                "; if($productSingle['discount']>0){ echo "
                     <p><del>{$productSingle['price']}</del>    ".($productSingle['price']-$productSingle['price']*$productSingle['discount']/100)." <sup>đ</sup></p>
                <div class='price-discount'><p>{$productSingle['discount']}%</p></div>";}else{
                    echo "
                     <p>{$productSingle['price']}<sup>đ</sup></p>";
                
                }
                echo"
            </div>
            

        </div>";
                
            }else{
                echo"<div class='product-single col-20 hidden'>
            <a class='product-link' href ='productDetail.php?productID={$productSingle['productID']}'>
            <div class='product-img'>
                <img src='{$productSingle['image']}' alt=''>
            </div>
            <div class='product-name'>
                <p>{$productSingle['productname']} </p>
                
            </div>
            
            </a>
            <div class='product-price'>
               
                "; if($productSingle['discount']>0){ echo "
                     <p><del>{$productSingle['price']}</del>    ".($productSingle['price']-$productSingle['price']*$productSingle['discount']/100)." <sup>đ</sup></p>
                <div class='price-discount'><p>{$productSingle['discount']}%</p></div>";}else{
                    echo "
                     <p>{$productSingle['price']}<sup>đ</sup></p>";
                
                }
                echo"
            </div>
            

        </div>";  
            }
        }
    ?>


                    
                    
                   
                    
                  
                


                   
             

                   
                </div>
                <div id="showmore" onclick="ShowAll()" class="view-more-btn ">
                    <div href=""><p>Xem thêm <i class="fa fa-chevron-down"></i></p></div>
                </div>
                <div id="hide" onclick="HideItem()" class="view-more-btn hidden">
                    <div href=""><p>Ẩn bớt <i class="fa fa-chevron-up"></i></p></div>
                </div>
            </div>
        </article>

        
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
                    <a href=""><p>Giới thiệu 2nd Clothes</p></a>
                    <a href=""><p>Hướng dẫn đặt hàng</p></a>
                    <a href=""><p>Chính sách và quy định</p></a>
                    <a href=""><p>Chính sách bảo mật</p></a>
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
    </div>

    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/search.js"></script>

</body>
</html>