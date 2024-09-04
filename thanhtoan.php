<?php
session_start();
require_once 'connectdb.php';

$cart = $_GET["Cart"];
settype($cart, "int");
$sql = "SELECT * FROM province ";
$kq = $conn->query($sql);
if ($kq->rowCount() > 0) {
for ($i = 0; $i < $kq->rowCount(); $i++) {
$province[] = $kq->fetch();
}
}
if ($cart == 1) {
echo '<input name="Cart" value="1" hidden>';
} else {
echo '<input name="Cart" value="0" hidden>';
echo '<input name="productID" value="' . $_GET["productID"] . '" hidden>';
echo '<input name="qty" value="' . $_GET["qty"] . '" hidden>';
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thanh toán - BPBooks.com - Manga - Comic</title>
        <link rel="icon" href="./images/home/header/iconlogo.png" type>
        <link rel="stylesheet" href="./css/foothead.css">
        <link rel="stylesheet" href="./css/payment.css">
        <script src="./js/thanhtoan.js"></script>
    </head>

    <body>
        <?php require_once 'header.php' ?>
        <div class="bodyContainer">
            <div class="container">
                <div class="orderInfo">
                    <form>
                        <h2>ĐỊA CHỈ GIAO HÀNG</h2>
                        <div class="formContainer">
                            <div class="customerInfo">
                                <div>Họ và tên người nhận</div>
                                <div>Số điện thoại</div>
                                <div>Email</div>
                                <div>Tỉnh/Thành Phố</div>
                                <div>Quận/Huyện</div>
                                <div>Phường/Xã</div>
                                <div>Địa chỉ nhận hàng</div>
                            </div>
                            <div class="inputField">
                                <input type="text"
                                    placeholder="Nhập họ và tên người nhận">
                                <input type="text"
                                    placeholder="Ví dụ: 0909123xxx (10 ký tự số)">
                                <input type="text" placeholder="Nhập Email">

                                <select id="tinhthanh" name="tinhthanh"
                                    onchange="quanHuyen()" required>
                                    <option>Tỉnh/Thành</option>
                                    <?php
                                    try {
                                    $sql = "SELECT * FROM province";
                                    // global $conn;
                                    $kq = $conn->query($sql);
                                    } catch (Exception $e) {
                                    die("Lỗi thực thi sql: " .
                                    $e->getMessage());
                                    }

                                    foreach ($kq as $tt) {
                                    echo "<option value='" . $tt['pID'] .
                                        "'>" . $tt['pName'] . "</option>";
                                    }

                                    ?>

                                </select>

                                <select id="quanhuyen" name="quanhuyen"
                                    onchange="phuongXa()" required>
                                    <option>Quận/Huyện</option>
                                </select>
                                <select id="phuongxa" name="phuongxa" required>
                                    <option>Phường/Xã</option>
                                </select>
                                <input type="text"
                                    placeholder="Số nhà, tên đường">
                            </div>
                        </div>
                    </form>
                    <div class="transport">
                        <h2>PHƯƠNG THỨC VẬN CHUYỂN</h2>
                        <label>Giao hàng tiêu chuẩn: 20.000đ<input type="radio"
                                checked name><span
                                class="checkmark"></span></label>
                        <h2>PHƯƠNG THỨC THANH TOÁN</h2>
                        <label>Ví điện tử<input type="radio" checked
                                name="option"><span
                                class="checkmark"></span></label>
                        <label>ATM/Internet Banking<input type="radio"
                                name="option"><span
                                class="checkmark"></span></label>
                        <label>Visa/Master/JCB<input type="radio"
                                name="option"><span
                                class="checkmark"></span></label>
                        <label>Thanh toán bằng tiền mặt khi nhận hàng<input
                                type="radio" name="option"><span
                                class="checkmark"></span></label>
                    </div>
                </div>
                <div class="checkOrder">
                    <h2>KIỂM TRA LẠI ĐƠN HÀNG</h2>
                    <div class="orderContent">
                        <?php
                        $totalOrder = 0;
                        if ($cart == 1) {
                        foreach ($_SESSION['cart'] as $i) {
                            $cartItem = json_decode($i, true);
                            $totalPrice = $cartItem['newPrice'] * $cartItem['qty'];
                            $totalOrder += $totalPrice;
                            echo "
                                <div class='product'>
                                    <div class='imgHolder'>
                                        <a href><img src='{$cartItem['img']}'></a>
                                    </div>
                                    <div class='{$cartItem['title']}'></div>
                                    <div class='price'>{$cartItem['newPrice']}<br><del>{$cartItem['oldPrice']}</del></div>
                                    <div class='quantity'>{$cartItem['qty']}</div>
                                    <div class='totalPrice'>{$totalPrice}</div>
                                </div>";
                            }
                        } else
                        ?>
                        <div class="product">
                            <div class="imgHolder">
                                <a href><img
                                        src="./images/product/test2.jpg"></a>
                            </div>
                            <div class="title">Shin tập Bài Tập - Phát Triển
                                Nâng Lực Bài Tập - Phát Triển Nâng Lực Toán 3
                                (Biên Soạn Theo Chương Trình GDPT Mới)Toán 3
                                (Biên Soạn Theo Chương Trình GDPT Mới) </div>
                            <div class="price">126.000đ
                                <br><del>168.000đ</del></div>
                            <div class="quantity">1</div>
                            <div class="totalPrice">126.000đ</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sideBar">
                <hr>
                <div><a href="successOrder.php">XÁC NHẬN THANH TOÁN</a></div>
            </div>
        </div>
        <script src="./js/thanhtoan.js"></script>
    </body>

</html>