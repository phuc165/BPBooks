<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/reusable.css">
    <link rel="stylesheet" href="./css/payment.css">
    <title>2nd Clothes</title>
    <link rel="shortcut icon" href="./Image/brand/favicon.jpg" type="image/x-icon">
<?php 
     session_start(); 
     
            $cart = $_GET["FromCart"];
            settype($cart,"int");
require_once "./admin/connectdb.php";
$sql = "SELECT * FROM province ";
$kq = $conn->query($sql);
if($kq->rowCount()>0){
    for($i = 0; $i < $kq->rowCount(); $i++){
   $province[] = $kq->fetch();
    }
}    
            
?>
</head>
<body>
<?php require_once 'header.php' ?>
    <div class="container">
        <div class="delivery-payment">
            <form action="processBill.php" method="post">
            <div class="delivery-info">
                <h2>Thông tin giao hàng</h2>
                <?php if($cart==1){
                echo '<input  name="isCart" value="1" hidden>';
               }else{
                echo '<input  name="isCart" value="0" hidden>';
                echo '<input  name="prodID" value="'.$_GET["productID"].'" hidden>';
                echo '<input  name="quantiy" value="'.$_GET["quantity"].'" hidden>';
               
            }


?> 
                <input  class="delivery-name" type="text" placeholder="Họ và tên" name="name" required>
                <input class="delivery-mail" type="email" placeholder="Email" name="email"  required>
                <input class="delivery-phone" type="text" placeholder="Số điện thoại" name="phone" required>
                <input class="delivery-address" type="text" placeholder="Địa chỉ giao hàng" name="address" required>
                <select id="province" class="delivery-province" type="text" placeholder="Tỉnh / thành" onchange="QueryDistrict()" name="province" required>
                    <option>Tỉnh/ Thành</option>
                    <?php
                    foreach($province as $k ){
                        echo "<option value='{$k['pID']}'>{$k['pName']}</option> ";
                    }
                    ?>
                </select>
                <select id="district" class="delivery-country" type="text" placeholder="Quận / huyện" required onchange="QueryWard()" name="district" required>
                <option>Quận / huyện</option>
                </select>
                <select id="ward" class="delivery-commune" type="text" placeholder="Phường / xã" name="ward" required>
                <option>Phường / xã</option>
                </select>
            </div>
            <div class="delivery-method">
                <div class="delivery">
                    <h2>Phương thức vận chuyển</h2>
                    <label class="shipping" for="shipping">
                        <input type="radio" checked readonly>
                        <span>Giao hàng tận nơi</span>
                        <span>0đ</span>
                    </label>
                </div>
                <div class="payment">
                    <h2>Phương thức thanh toán</h2>
                    <label class="pay" for="payment">
                        <input type="radio" name="payemnt" checked>
                        <span><img src="./Image/Payment/cod.png" alt="">Thanh toán khi giao hàng</span>
                        <span></span>
                    </label>
                    <label class="pay" for="payment">
                        <input disabled type="radio" name="payemnt">
                        <span><img src="./Image/Payment/banking.png" alt="">Thanh toán chuyển khoản</span>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="bill">
            <div class="bill-product-list">
                <?php
                $totlaPrice = 0;
                 if($cart==1){
                    
                    
                    foreach($_SESSION['cart'] as $k ){
                        $item  = json_decode($k,true);
                        
                    

                        $totlaPrice += $item['price']*$item['qtt'];
                        echo"
                    <div class='bill-product'>
                        <div class='bill-product-img'>
                            <img src='{$item['img']}' alt=''>
                            <div class='bill-product-quantity'>{$item['qtt']}</div>
                        </div>
                        <div class='bill-product-name'>
                            <p>{$item['name']} </p>
                        </div>
                        <div class='bill-product-price'>
                            <p>{$item['price']}</p>
                        </div>
                    </div>";
                    }
            }else{
                $id = $_GET["productID"];
                $qtt = $_GET["quantity"];
                settype($id,"integer");
                settype($qtt,"integer");
                $sql = "SELECT * FROM product WHERE productID =$id";
                $kq = $conn->query($sql);
                if($kq->rowCount()==1){
                $product = $kq->fetch();

                }
                $totlaPrice+= $product["price"];
                echo"
                                    <div class='bill-product'>
                        <div class='bill-product-img'>
                            <img src='{$product['image']}' alt=''>
                            <div class='bill-product-quantity'>{$qtt}</div>
                        </div>
                        <div class='bill-product-name'>
                            <p>{$product['productname']} </p>
                        </div>
                        <div class='bill-product-price'>
                            <p>{$product['price']}</p>
                        </div>
                    </div>";
            }
                ?>
                <!-- <--line--> 
            </div>
            <div class="bill-coupon">
                <div class="bill-coupon-input">
                    <input type="text" name="" id="" placeholder="Nhập mã giảm giá">
                </div>
                <div class="bill-coupon-btn active-btn ">
                    <button>Sử dụng</button>
                </div>
               
            </div>
            <div class="bill-cost">
                <div class="bill-product-cost">
                    <p>Tạm tính</p>
                    <p><?=$totlaPrice?><sup>đ</sup></p>
                </div>
                <div class="bill-ship-cost">
                    <p>Phí vận chuyển</p>
                    <p>0đ</p>
                </div>
            </div>
            <div class="bill-total-cost">
                <p>Tổng cộng:</p>
                <p><?=$totlaPrice?><sup>đ</sup></p>
            </div>
            <div class="checkout-btn">
                <button type="submit" href="">Thanh toán</button>
            </div>
        </div>
             
       
    </div>
    </form>
       

        
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
    <script src="./js/header.js"></script>
    <script src="./js/payment.js"></script>
    <script src="./js/search.js"></script>

</body>
</html>