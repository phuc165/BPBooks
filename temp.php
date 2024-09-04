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

<body>
    <?php require_once 'header.php' ?>
    <div class="container">
        <?php
        if (isset($_SESSION['userID'])) {
            $uID = $_SESSION['userID'];
            $sql = "SELECT b.*, p.*, SUM(b.billQty) AS totalQty, SUM(b.billQty * b.newPrice) AS totalBillPrice
              FROM bill b
              INNER JOIN product p ON b.productID = p.productID
              WHERE b.userID = '{$uID}'
              GROUP BY b.billID, b.productID
              ORDER BY b.billID"; // Add ORDER BY clause for desired order

            $kq = $conn->query($sql);

            if ($kq->rowCount() > 0) {
                $currentBillID = null;
                while ($bill = $kq->fetch()) {
                    $billStateText = "";
                    switch ($bill["billState"]) {
                        case 0:
                            $billStateText = "Đang chờ xác nhận";
                            break;
                        case 1:
                            $billStateText = "Đã xác nhận đơn hàng";
                            break;
                        case 2:
                            $billStateText = "Đơn hàng đang được giao";
                            break;
                        case 3:
                            $billStateText = "Giao hàng thành công";
                            break;
                        default:
                            $billStateText = "Lỗi";
                    }

                    if ($currentBillID != $bill["billID"]) { // Check for new bill group
                        if ($currentBillID !== null) {
                            echo "</div>"; // Close previous bill group container
                        }

                        $currentBillID = $bill["billID"]; // Update current bill ID

                        echo "
              <div class='orderIn4'>
                <div class='orderStatus'>Trạng thái: {$billStateText}</div>
                <div class='receiveInfo'>
                  <div class='name'>Tên người nhận: {$bill['userName']}</div>
                  <div class='phoneNum'>Số điện thoại: {$bill['phoneNum']}</div>
                  <div class='address'>Địa chỉ nhận hàng: " . getDetailAddress($bill['userAddress']) . "-" . getAddress($conn, getWardID($bill['userAddress'])) . "</div>
                </div>
                <div class='orderDate'>Ngày đặt: {$bill['orderDate']}</div>
                <div class='total'>{$bill['totalBillPrice']}</div>
                <div class='product'>
                  <ul>
            ";
                    }

                    echo "
            <li class='productInfo'>
              <div class='col2'>
                <div class='imgHolder'><img src='{$bill['img1']}' alt=''></div>
                <div class='title'>{$bill['title']}</div>
              </div>
              <div class='col1'>
                <div class='newPrice'>{$bill['newPrice']}</div>
                <del class='oldPrice'>{$bill['oldPrice']}</del>
              </div>
              <div class='col1'>
                <div class='qty'>{$bill['totalQty']}</div>
              </div>
              <div class='col1'>
                <div class='totalPerItem'>" . $bill['totalQty'] * $bill['newPrice'] . "</div>
              </div>
            </li>";
                }

                echo "</ul></div></div>"; // Close last bill group container
            } else {
                echo "<div class='noOrder'>Không tìm thấy đơn hàng nào!</div>";
            }
        }
        ?>
    </div>
</body>