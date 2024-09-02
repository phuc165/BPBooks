<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <link rel="shortcut icon" href="./Image/brand/favicon.jpg" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="./css/product.css">
    <link rel="stylesheet" href="./css/reusable.css">
    <?php
        require_once "./admin/connectdb.php";
        $sql = "SELECT * FROM product";
            $kq = $conn->query($sql);
           
           for($i=0;$i < $kq->rowCount();$i++){
                $product[] = $kq->fetch();
           }
        global $product;
        
    
         
        
    ?>
    <script>
        var productListHolder =document.getElementById("List-san-pham");
        var productList = <?php echo json_encode($product);?>;
        
        console.log(productList.length);
       
            
        function GetProductByPrice(minPrice=0,maxPrice=999999){
            for(var i=0;i< productList.length;i++){
                if(productList[i].price >=minPrice && productList[i].price <=maxPrice){

                    document.getElementById("List-san-pham").innerHTML = `<div class="product-single col-20">
            <div class="product-img">
                <img src="./Image/product/product1.png" alt="">
            </div>
            <div class="product-name">
                <p>${productList[i].title} </p>
            </div>
            <div class="product-price">
                <p>${productList[i].price} <sup>đ</sup></p>
            </div>
        </div>`
                }
            }
       

        }

    </script>
</head>
<body>
    
  <header>
    <div class="navigation">
        <nav class="navBtn-group">
            <a href="./index.html"><p>Trang chủ</p></a>
            <a href=""><p>Sản phẩm</p></a>
            <a href="#"><p>Về chúng tôi</p></a>
        </nav>
        <div class="shopLogo"> 
            <img src="./Image/ShopLogo.png" alt="">
        </div>
        <div class="groupBtn">
            <div class="searchbar">
                <div class="searchIcon">
                    <img src="./Image/seachicon.png" alt="">
                    
                </div>
                <input type="text" placeholder="Tìm kiếm ">
                
            </div>
            
            <div class="cart">
                <i class="fa fa-cart-plus"></i>
                <p>Giỏ hàng</p>
                <div class="cart-information">
                    <p id="cart-holder" class="cart-tile">GIỎ HÀNG</p>

                    <div class="cart-item-list">
                        <div class="cart-item hidden">
                            <img src="./Image/ShopLogo.png" alt="" class="product-img">
                            <div class="cart-right">
                                <p class="product-name">Logosdsd sddkj sop hay j do dai loaij he cahu khong bhiet nuawd</p>
                                <div class="product-quantity">
                                    <div class="quantity-btn">
                                        <p id="cart-qtt-text">1</p>
                                    </div>
                                    
                                    <div class="product-price">
                                        <p>9999$</p>
                                    </div>
                            </div>
                            </div>
                            
                        </div>


                        
                    </div>
                    
                    
                    <div class="total-price">
                        <p>Tổng tiền:</p>
                        <p id="total" class="total">0đ</p>
                    </div>
                    <div class="to-cart">
                        <a href="./cart.html" class="to-cart-btn"><p>Tới giỏ hàng</p></a>
                    </div>
                </div>
                
            </div>
            
            <div class="login">
                    
                <a href="./login.html"><i class="fa fa-user"></i></a>
            </div>

        </div>
        
    </div>
</header>
    

  
    
    <div id="Tatca" class="tabcontent">
      <div class="sorter">
        <h1>Tất cả sản phẩm</h1>
        
        <select id="sort-options" class="sort-select">
          
            <option value="az">Tên: A-Z</option>
            <option value="za">Tên: Z-A</option>
            <option value="price-asc">Giá: Thấp đến Cao</option>
            <option value="price-desc">Giá: Cao đến Thấp</option>
            <option value="newest">Mới nhất</option>
        </select>
    </div>
      <div class="filter">
        
        <div class="filter-section">
          <div class="filter-item">
            <i class="fa fa-filter"></i><span> BỘ LỌC </span>
          </div>
          
            <div class="filter-select">
              <div class="filter-subtitle">
                <span>Lọc giá</span>
                <i class="fa fa-chevron-down"></i>
              </div>
              <div class="filter-checkbox">
                <ul>
                    <li>
                        
                        <input type="checkbox" name="price-filter" id="" value="100000" onclick="GetProductByPrice(0,100000)">
                        <label for="">Dưới 100.000đ</label>
                       
                    </li>
                    <li>
                        <input type="checkbox" name="price-filter" id="" value="100001">
                        <label for="">100.000đ - 200.000đ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="price-filter" id="" value="200001">
                        <label for="">200.000đ - 300.000đ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="price-filter" id="" value="300001">
                        <label for="">300.000đ - 400.000đ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="price-filter" id="" value="400001" onclick="">
                        <label for="">Trên 400.000đ</label>
                    </li>
                    
                </ul>
              </div>
            </div>
          
          
            <div class="filter-select">
                <div class="filter-subtitle">
                  <span>Màu sắc</span>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="filter-checkbox">
                  <ul  class="color-ul">
                      <li class="color-li">
                          <input id="data-color-1" class="color-checkbox" type="checkbox" name="color-filter" id="" value="Đen">
                          <label class="filter-color" style="background-color: rgb(0, 0, 0);" for="data-color-1">Den</label>
                      </li>
                      <li class="color-li">
                          <input id="data-color-2" class="color-checkbox" type="checkbox" name="color-filter" id="" value="Trắng">
                          <label class="filter-color" style="background-color: rgb(255, 255, 255);" for="data-color-2">trang</label>
                      </li>
                      <li class="color-li">
                          <input id="data-color-3" class="color-checkbox" type="checkbox" name="color-filter" id="" value="Xám">
                          <label class="filter-color" style="background-color: gray;" for="data-color-3">xam</label>
                      </li>
                     
                      
                  </ul>
                </div>
            </div>
            <div class="filter-select">
                <div class="filter-subtitle">
                  <span>Kích thước</span>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="filter-checkbox">
                    <ul>
                        <li>
                            <input type="checkbox" name="price-filter" id="">
                            <label for="">S</label>
                        </li>
                        <li>
                            <input type="checkbox" name="price-filter" id="">
                            <label for="">M</label>
                        </li>
                        <li>
                            <input type="checkbox" name="price-filter" id="">
                            <label for="">L</label>
                        </li>
                        <li>
                            <input type="checkbox" name="price-filter" id="">
                            <label for="">XL</label>
                        </li>
                        <li>
                            <input type="checkbox" name="price-filter" id="">
                            <label for="">XXL</label>
                        </li>
                    </ul>
                  </div>
            </div>
      </div>
     
      </div>
      
      <div id="List-san-pham" class="product-list">
        <!-- <div class="product-single col-20">
            <div class="product-img">
                <img src="./Image/product/product1.png" alt="">
            </div>
            <div class="product-name">
                <p>ti sớt dê rô quanh siu cap vo dich </p>
            </div>
            <div class="product-price">
                <p>9,999,000 <sup>đ</sup></p>
            </div>
        </div>
        <div class="product-single col-20">
            <div class="product-img">
                <img src="./Image/product/product1.png" alt="">
            </div>
            <div class="product-name">
                <p>ti sớt dê rô quanh siu cap vo dich </p>
            </div>
            <div class="product-price">
                <p>9,999,000 <sup>đ</sup></p>
                <div class="price-discount">
                    <p>-15%</p>
                </div>
            </div>
        </div>
        <div class="product-single col-20">
            <div class="product-img">
                <img src="./Image/product/product1.png" alt="">
            </div>
            <div class="product-name">
                <p>ti sớt dê rô quanh siu cap vo dich </p>
            </div>
            <div class="product-price">
                <p>9,999,000 <sup>đ</sup></p>
            </div>
        </div>
        <div class="product-single col-20">
            <div class="product-img">
                <img src="./Image/product/product1.png" alt="">
            </div>
            <div class="product-name">
                <p>ti sớt dê rô quanh siu cap vo dich </p>
            </div>
            <div class="product-price">
                <p>9,999,000 <sup>đ</sup></p>
            </div>
        </div>
        <div class="product-single col-20">
          <div class="product-img">
              <img src="./Image/product/product1.png" alt="">
          </div>
          <div class="product-name">
              <p>ti sớt dê rô quanh siu cap vo dich </p>
          </div>
          <div class="product-price">
              <p>9,999,000 <sup>đ</sup></p>
          </div> -->
      </div>
       
       

       
    </div>
  
    </div>
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
    <script src="./js/product.js"></script>
    
</body>
</html>
