<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">]
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/reusable.css">
    <title>2nd Clothes</title>
    <link rel="shortcut icon" href="./Image/brand/favicon.jpg" type="image/x-icon">
    

    <?php 
    session_start();
        $cartList= $_SESSION['cart'];
        
        global $cartToJs;
        foreach($cartList as $child){
            $new= json_decode($child,true);
            $cartToJs[] = $new;        }
            
            
?>

<script>
        
       
        var cartListjs = <?php echo json_encode($cartToJs);?>;
        
            
            
       

    </script>
</head>
<body onload="UpdateCart()">
<?php require_once 'header.php' ?>
    <div class="container" >
        <div class="user-cart">
            <h2>Giỏ hàng của bạn</h2>
            <h3 id="totalInCart">Bạn đang có 0 sản phẩm trong giỏ hàng</h3>
            <div id="cart-page-list" class="cart-list">
               
            


            
            </div>
        </div>
        <div class="bill-info">
            <h2>Thông tin đơn hàng</h2>
            <div class="total-price">
                    <p>Tổng tiền:</p>
                    <p id="Total-cart-page">0 đ</p>
            </div>
            <div class="additional-text">
                <ul>
                    <li><p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p></li>
                    <li><p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p></li>
                </ul>
            </div>
            <div class="checkout-btn">
                <button ><a href="payment.php?FromCart=1">Thanh toán</a></button>
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
    <script src="./js/cart.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/search.js"></script>

</body>
</html>