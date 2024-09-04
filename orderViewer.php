<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPBooks.com - Kiểm tra đơn hàng</title>
    <link rel="icon" href="./images/home/header/iconlogo.png" type="">
    <link rel="stylesheet" href="./css/orderViewer.css">
    <link rel="stylesheet" href="./css/foothead.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<?php
session_start();
require_once 'connectdb.php';
function getAddress($conn, $w)
{
    $sql = "SELECT * FROM province JOIN district ON province.pID=district.pID JOIN ward ON district.dID = ward.dID  WHERE ward.wID='{$w}'  ";
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    $address = $row['wName'] . "-" . $row['dName'] . "-" . $row['pName'];
    return $address;
}
function getWardID($address)
{

    $pattern = "/-(.*?)-/";
    preg_match($pattern, $address, $matches);
    return (int)$matches[1];
}
function getDetailAddress($address)
{
    $pattern = "/^(.*?)-/";
    preg_match($pattern, $address, $matches);
    return $matches[1];
}
?>

<body>
    <?php require_once 'header.php' ?>
    <div class="container">
        <!-- <div class="helo">Xin Chào <?php ?></div> -->
        <div class="firstRow">
            <div class="col2">Thông tin sản phẩm</div>
            <div class="col1">Đơn giá</div>
            <div class="col1">Số lượng</div>
            <div class="col1">Thành tiền</div>
        </div>
        <div class="productRow">
            <?php
            if (isset($_SESSION['userID'])) {
                $uID = $_SESSION['userID'];
                $sql = "SELECT * FROM bill JOIN product ON bill.productID=product.productID WHERE bill.userID='{$uID}'  ";
                $kq = $conn->query($sql);
                $billCheck = null;
                for ($i = 0; $i < $kq->rowCount(); $i++) {
                    $bill = $kq->fetch();
                    $total = +$bill['total'];
                    switch ($bill["billState"]) {
                        case 0:
                            $stateText = "Đang chờ xác nhận";
                            break;
                        case 1:
                            $stateText = "Đã xác nhận đơn hàng";
                            break;
                        case 2:
                            $stateText = "Đơn hàng đang được giao";
                            break;
                        case 3:
                            $stateText = "Giao hàng thành công";
                            break;
                        default:
                            $stateText = "Lỗi";
                    }
                    if ($billCheck != $bill['billGroup']) {
                        $billCheck = $bill['billGroup'];
                        echo "
                            <div class='orderIn4'>
                                <div class='orderStatus'>Trạng thái: {$stateText}</div>
                                <div class='receiveInfo'>
                                    <div class='name'>Tên người nhận: {$bill['userName']}</div>
                                    <div class='phoneNum'>Số điện thoại: {$bill['phoneNum']}</div>
                                    <div class='address'>Địa chỉ nhận hàng: " . getDetailAddress($bill['userAddress']) . "-" . getAddress($conn, getWardID($bill['userAddress'])) . "</div>
                                </div>
                                <div class='orderDate'>Ngày đặt: {$bill['orderDate']}</div>
                                <div class='col1' style='color:#CF0A0A; font-siza:18px; font-weight:bold'>{$total} đ</div>
                            </div>";
                    }
                    echo "
                        <div class='productInfo'>
                            <div class='col2'>
                                <div class='imgHolder'><img src='{$bill['img1']}' alt=''></div>
                                <div class='title'>{$bill['title']}</div>
                            </div>
                            <div class='col1'>
                                <div class='newPrice'>{$bill['newPrice']} đ</div>
                                <del class='oldPrice'>{$bill['oldPrice']} đ</del>
                            </div>
                            <div class='col1'>
                                <div class='qty'>{$bill['billQty']}</div>
                            </div>
                            <div class='col1'>
                                <div class='totalPerItem'>{$bill['total']} đ</div>
                            </div>
                        </div>";
            }
            } ?>

        </div>
    </div>
    <?php require_once 'footer.php' ?>
</body>

</html>