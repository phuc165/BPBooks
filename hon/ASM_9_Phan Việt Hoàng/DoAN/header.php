
<header>
        <div class="navigation">
            <nav class="navBtn-group">
                <a href="./home.php"><p>Trang chủ</p></a>
                <a href="./product.php"><p>Sản phẩm</p></a>
                <a href="./Aboutus.php"><p>Về chúng tôi</p></a>
            </nav>
            <div class="shopLogo"> 
                <img src="./Image/ShopLogo.png" alt="">
            </div>
            <div class="groupBtn">
                <div  class="searchbar">
                    <div class="searchIcon">
                        <img src="./Image/seachicon.png" alt="">
                        
                    </div>
                    <input id="search" type="text" placeholder="Tìm kiếm " onkeyup="Search()">
                    <div id="resultList" class="search-result hidden">
                        
                        
                        
                    </div>
                </div>
                
                <div class="cart">
                    <i class="fa fa-cart-plus"></i>
                    <p>Giỏ hàng</p>
                    <div class="cart-information">
                        <p id="cart-holder" class="cart-tile">GIỎ HÀNG</p>

                        <div class="cart-item-list">

                            
                            <?php
                                
                                require_once './admin/connectdb.php';
                                 if(!isset($_SESSION['userName'])){
                                   echo " <div class='cart-login-required'>
                                        <p class='login-required-text'>
                                                Bạn cần <a href='./login.php'>đăng nhập </a> để có thể xem giỏ hàng
                                        </p>
                                         </div>";
                                } else {
                                 
                                if(count($_SESSION['cart']) >0){
                                foreach($_SESSION['cart'] as $child){
                                   $new= json_decode($child,true);
                                   
                                    echo 
                                
                                         "<div class='cart-item'>
                                        <img src='".$new['img'] ."' alt='' class='product-img'>
                                        <div class='cart-right'>
                                            <p class='product-name'>".$new['name'] ."</p>
                                            <div class='product-quantity'>
                                                <div class='quantity-btn'>
                                                    <p id='cart-qtt-text'>".$new['qtt']."</p>
                                                </div>
                                                
                                                <div class='product-price'>
                                                    <p>".$new['price']." đ</p>
                                                </div>
                                        </div>
                                        </div>
                                        
                                    </div>"; 
                                }}else if(count($_SESSION['cart'])==0){
                                    echo "<div class='empty-cart-item '>
                                <img src='./Image/emptyCart.jpg' alt='' >
                                </div>";
                                

                                }
                            }
                            
                            ?>
                            
                           
                            
                        </div>
                                
                           


                            
                    
                        
                        
                        <div class="total-price">
                            <p></p>
                            <p id="total" class="total"></p>
                        </div>
                        <div class="to-cart">
                            <?php
                            if(isset($_SESSION['userName'])){
                            echo "<a href='./cart.php' class='to-cart-btn'><p>Tới giỏ hàng</p></a>";}
                            else {
                                echo "<a href='./login.php' class='to-cart-btn'><p>Đăng nhập</p></a>";
                            }
                            ?>
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="login">
                    
                    
                    <?php if (isset($_SESSION["userName"])){
                        echo "
                        <a onclick='ShowInfomation()'><i class='fa fa-user'></i>   </a>
                    <div id='user-information' class='userInformation hidden'>
                        <div class='user-name'>
                            <p class='user-name-text'>". $_SESSION['userName']."</p>
                        </div>
                        <div class='bill-check'>
                            <button>
                                <a href='./history.php'>Lịch sử</a>

                            </button>
                        </div>
                        <div class='logout-btn'>
                            <form action='userLogout.php' method='post'>
                                <button type='submit' name='userlogout'>Đăng xuất</button>
                            </form>
                        </div>
                    </div>";
                    }else {
                        echo "<a href='./login.php'><i class='fa fa-user'></i>   </a>";
                    }
                    
                    
                    
                    ?>

                    
                </div>

            </div>
            
        </div>
    </header>
   