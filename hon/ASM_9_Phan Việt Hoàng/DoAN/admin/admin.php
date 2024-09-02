<?php 
    session_start();
    require_once 'connectdb.php';     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/admin.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <?php 
            $isBill = $_GET['bill'];
    ?>
</head>
<body>
    <div class="container">
        <header>2ndClothes - ADMIN</header>
        <div class="menu">
            <a href="index.php" class="home">Home</a>
            

            <form method="post" action="./login/logout.php">
                
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>
        <?php if($isBill==0){ ?>
                    <div class="productContainer">
            <div class="addProduct">
                <a href="./function/addProduct.php">
                    <img src="./images/add_icon.png"/>
                    <div class="addText">Thêm sản phẩm</div>
                </a>
            </div>
                <table class="view">
                    <tr class="view-head">
                        <th class="productID" width="10px">ID</th>
                        <th class="productName">Tên</th>
                        <th class="productOldPrice">Giá cũ</th>
                        <th class="productNewPrice">Khuyến mãi</th>
                        <th class="productImg1">Ảnh </th>
                        <th class="productImg2">Tồn kho</th>
                 
                      
                        
                        <th class="productCategory">Phân loại</th>
                        <th class="productDescription">Mô tả</th>
                        <th class="productBrand">Nhãn hiệu</th>
                        <th class="productSize">Kích cỡ</th>
                       
                        <th class="productDelete">Xóa</th>
                        <th class="productEdit">Sửa</th>

                        <th></th>
                    </tr>

                            <?php
                                try {
                                    $sql = "SELECT * FROM product";
                                    // global $conn;
                                    $kq = $conn->query($sql);
                                }
                                catch (Exception $e){
                                    die("Lỗi thực thi sql: " . $e->getMessage() ) ;
                                }

                                foreach($kq as $i){
                                    echo "<tr>";
                                    echo "<td class='cell' style='text-align: center'>", $i['productID'], "</td>";
                                    echo "<td class='cell'>", $i['productname'], "</td>";
                                    echo "<td class='cell'>", $i['price'], "</td>";
                                    echo "<td class='cell'>", $i['discount'], "%</td>";
                                    echo "<td class='cell'>", $i['image'], "</td>";
                                    echo "<td class='cell'>", $i['instock'], "</td>";
                             
                                    
                                    echo "<td class='cell'>", $i['category'], "</td>";
                                    echo "<td class='cell'>", $i['description'], "</td>";
                                    echo "<td class='cell'>", $i['brand'], "</td>";
                                    echo "<td class='cell'>", $i['size'], "</td>";
                                    
                                    
                                    ?>
                                    <!-- echo "<td class='cell'><a href='deleteProduct.php?productID='", $i['productID'], "'>Xóa</a>";  -->
                                    <td class='cell'><a href="./function/deleteProduct.php?productID=<?=$i['productID']?>"><img src="./images/delete_icon.png"/></a></td>
                                    <td class='cell'><a href="./function/editProduct.php?productID=<?=$i['productID']?>"><img src="./images/edit_icon.png"/></a></td>
                                    <?php
                                    echo "</tr>";
                                }
                            ?>
                </table>
        </div>

       <?php }else{?>
        <div class="productContainer">
            <!-- <div class="addProduct">
                <a href="./function/addProduct.php">
                    <img src="./images/add_icon.png"/>
                    <div class="addText">Thêm hóa đơn</div>
                </a> 
            </div> -->
                <table class="view">
                    <tr class="view-head">
                        <th class="billID" width="10px">ID</th>
                        <th class="billCode">Mã đơn hàng</th>
                        <th class="userID">Id người dùng</th>
                        <th class="productID">Id sản phẩm</th>
                        <th class="quantity">Số lượng </th>
                        <th class="total">Tổng tiền</th>
                 
                      
                        
                        <th class="username">Tên người dùng</th>
                        <th class="phone">Số điện thoại</th>
                        <th class="address">Địa chỉ</th>
                        <th class="timebuy">Thời gian mua</th>
                        <th class="billstate">Trạng thái đơn</th>
                        <th class="BillDelete">Xóa</th>
                        <th class="BillEdit">Sửa</th>

                        <th></th>
                    </tr>

                            <?php
                                try {
                                    $sql = "SELECT * FROM bill";
                                    
                                    $kq = $conn->query($sql);
                                }
                                catch (Exception $e){
                                    die("Lỗi thực thi sql: " . $e->getMessage() ) ;
                                }

                                foreach($kq as $i){
                                    echo "<tr>";
                                    echo "<td class='cell' style='text-align: center'>", $i['billID'], "</td>";
                                    echo "<td class='cell'>", $i['maBill'], "</td>";
                                    echo "<td class='cell'>", $i['userID'], "</td>";
                                    echo "<td class='cell'>", $i['productID'], "</td>";
                                    echo "<td class='cell'>", $i['quantity'], "</td>";
                                    echo "<td class='cell'>", $i['total'], "</td>";
                             
                                    
                                    echo "<td class='cell'>", $i['username'], "</td>";
                                    echo "<td class='cell'>", $i['phone'], "</td>";
                                    echo "<td class='cell'>", $i['useraddress'], "</td>";
                                    echo "<td class='cell'>", $i['buytime'], "</td>";
                                    echo "<td class='cell'>", $i['billstate'], "</td>";
                                    
                                    
                                    ?>
                                    
                                    <td class='cell'><a href="./function/deleteBill.php?billID=<?=$i['billID']?>"><img src="./images/delete_icon.png"/></a></td>
                                    <td class='cell'><a href="./function/editBill.php?billID=<?=$i['billID']?>"><img src="./images/edit_icon.png"/></a></td>
                                    <?php
                                    echo "</tr>";
                                }
                            ?>
                </table>
        </div>


        <?php } ?>
    </div>
</body>
</html>