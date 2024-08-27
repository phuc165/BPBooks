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
</head>
<body>
    <div class="container">
        <header>BPBOOKS - ADMIN</header>
        <div class="menu">
            <a href="index.php" class="home">Home</a>
            <!-- <a href="./login/login.php">Logout</a> -->
            <!-- <div class="addProduct">
                <a href="./function/addProduct.php"><img src="./images/add_icon.png"</a>
            </div> -->

            <form method="post" action="./login/logout.php">
                <!-- <img src="/images/logout_icon.png"/> -->
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>
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
                        <th class="productNewPrice">Giá mới</th>
                        <th class="productImg1">Ảnh 1</th>
                        <th class="productImg2">Ảnh 2</th>
                        <th class="productImg3">Ảnh 3</th>
                        <th class="productImg4">Ảnh 4</th>
                        <th class="productRating">Rating</th>
                        <th class="productDescription">Mô tả</th>
                        <th class="productAuthor">Tác giả</th>
                        <th class="productPublisher">Nhà xuất bản</th>
                        <th class="productAges">Lứa tuổi</th>
                        <th class="productGenre">Thể loại</th>
                        <th class="productDelete">Xóa</th>
                        <th class="productEdit">Sửa</th>

                        <th></th>
                    </tr>

                            <?php
                                try {
                                    $sql = "SELECT * FROM product;";
                                    // global $conn;
                                    $kq = $conn->query($sql);
                                }
                                catch (Exception $e){
                                    die("Lỗi thực thi sql: " . $e->getMessage() ) ;
                                }

                                foreach($kq as $i){
                                    echo "<tr>";
                                    echo "<td class='cell' style='text-align: center'>", $i['productID'], "</td>";
                                    echo "<td class='cell'>", $i['title'], "</td>";
                                    echo "<td class='cell'>", $i['oldPrice'], "</td>";
                                    echo "<td class='cell'>", $i['newPrice'], "</td>";
                                    echo "<td class='cell'>", $i['img1'], "</td>";
                                    echo "<td class='cell'>", $i['img2'], "</td>";
                                    echo "<td class='cell'>", $i['img3'], "</td>";
                                    echo "<td class='cell'>", $i['img4'], "</td>";
                                    echo "<td class='cell'>", $i['rating'], "</td>";
                                    echo "<td class='cell'>", $i['description'], "</td>";
                                    echo "<td class='cell'>", $i['nxb'], "</td>";
                                    echo "<td class='cell'>", $i['author'], "</td>";
                                    echo "<td class='cell'>", $i['age'], "</td>";
                                    echo "<td class='cell'>", $i['theLoai'], "</td>";
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
        
    </div>
</body>
</html>