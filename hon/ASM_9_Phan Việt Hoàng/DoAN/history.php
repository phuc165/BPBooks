<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Clothes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/reusable.css">
    <link rel="stylesheet" href="./css/history.css">
    <?php
    session_start();
    
        require_once "./admin/connectdb.php";
        function getAddress($conn,$w){
            $sql = "SELECT * FROM province JOIN district ON province.pID=district.pID
            JOIN ward ON district.dID = ward.dID  WHERE ward.wID='{$w}'  ";
            $kq = $conn->query($sql);
            $row = $kq->fetch();

            $address=$row['wName']."-".$row['dName']."-".$row['pName'];

            return $address;
        }
        function getWardID($address){
                
                $pattern = "/-(.*?)-/";
                preg_match($pattern, $address, $matches);
                return (int)$matches[1]; 
        }
        function getDetailAddress($address){
            $pattern = "/^(.*?)-/";
                preg_match($pattern, $address, $matches);
                return $matches[1]; 
        }
            

    ?>
</head>

<body>
<?php require_once 'header.php' ?>   

    <div class="container">
        <div style="width:100%; display:flex;flex-direction:row" class="info">
            <p style="width:10%">Mã đơn</p>
            <p style="width:40%">Thông tin sản phẩm</p>
            <p style="width:30%">Thông tin nhận hàng</p>
            <p style="width:10%">Thời gian đặt hàng</p>
            <p style="width:10%">Tình trạng đơn</p>
        </div>
   <?php 
    if (isset($_SESSION['userID'])) {
        $uID = $_SESSION['userID'];
        
    $sql = "SELECT * FROM bill JOIN product ON bill.productID=product.productID WHERE bill.userID='{$uID}'  ";
    $kq = $conn->query($sql);
   for($i= 0;$i < $kq->rowCount();$i++){
       $bill = $kq->fetch();
        switch ($bill["billstate"]) {
            case 0: $stateText="Đang chờ xác nhận";
            break;
            case 1: $stateText="Đã xác nhận đơn hàng";
            break;
            case 2: $stateText="Đơn hàng đang được giao";
            break;
            case 3: $stateText="Giao hàng thành công";
            break;
            default: $stateText= "Lỗi";
        }
       echo"
       <div class='bill-single'>
        <div class='bill-id'>
            <p>{$bill['maBill']}</p>
        </div>
        <div class='bill-product'>
        <div class='prod-img'  >
            <img src='{$bill['image']}' alt=''>
        </div>
            <div class='name-price'>
                <div class='bill-product-name'>{$bill['productname']} x {$bill['quantity']}</div>
                <div class='bill-product-price'> {$bill['price']}<sup>đ</sup></div>
            </div>
            
            <div class='bill-product-total'> {$bill['total']}<sup>đ</sup></div>
        </div>
        <div class='bill-address'>
            <div class='name-phone'>{$bill['username']}-{$bill['phone']}</div>
            <div class='address'>".getDetailAddress($bill['useraddress'])."-".getAddress($conn,getWardID($bill['useraddress']))."</div>
        </div>
         <div class='bill-time'>{$bill['buytime']}</div>
        <div class='bill-state'>{$stateText}</div>
    </div>
        
      
       ";
   }}
?>
    
    

    </div>
    <script src="./js/header.js"></script>
    <script src="./js/search.js"></script>

</body>
</html>