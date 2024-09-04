<?php
require_once 'connectdb.php';
require_once "./admin/connectdb.php";

$sql = "SELECT * FROM product WHERE productQty > 0";
$kq = $conn->query($sql);
for ($i = 0; $i < $kq->rowCount(); $i++) {
    $product[] = $kq->fetch();
}
global $product;
?>
<script>
    var productList = <?= json_encode($product); ?>;
</script>
<link rel="stylesheet" href="./css/productList.css">
<div class="productList">
    <div class="productFilter">
        <p>Lọc sản phẩm</p>
        <div class="Filter">
            <button class="dropBtn">Giá</button>
            <div class="dropdownContent">
                <div><label><input type="checkbox" name="priceFilter" id="priceCheck" value="50000" onclick="AddPriceFilter(this,0,50000)">Dưới 50.000 đ</label></div>
                <div><label><input type="checkbox" name="priceFilter" id="priceCheck" value="70000" onclick="AddPriceFilter(this,50000,100000)">50.000 - 100.000 đ</label></div>
                <div><label><input type="checkbox" name="priceFilter" id="priceCheck" value="100000" onclick="AddPriceFilter(this,100000,150000)">100.000 - 150.000 đ</label></div>
                <div><label><input type="checkbox" name="priceFilter" id="priceCheck" value="150000" onclick="AddPriceFilter(this,150000,9999999)">150.000 đ trở lên</label></div>
            </div>
        </div>
        <div class="Filter">
            <button class="dropBtn">Độ tuổi</button>
            <div class="dropdownContent">
                <div><label><input type="checkbox" name="priceFilter" onchange="AddAgeFilter(this,'6')" checked>6+</label></div>
                <div><label><input type="checkbox" name="priceFilter" onchange="AddAgeFilter(this,'12')" checked>12+</label></div>
                <div><label><input type="checkbox" name="priceFilter" onchange="AddAgeFilter(this,'16')" checked>16+</label></div>
                <div><label><input type="checkbox" name="priceFilter" onchange="AddAgeFilter(this,'18')" checked>18+</label></div>
            </div>
        </div>
        <div class="Filter">
            <button class="dropBtn">Nhà xuất bản</button>
            <div class="dropdownContent">
                <div><label><input type="checkbox" name="priceFilter" onchange="AddNxbFilter(this,'Nhà Xuất Bản Kim Đồng')" checked>Nhà xuất bản Kim Đồng</label></div>
                <div><label><input type="checkbox" name="priceFilter" onchange="AddNxbFilter(this,'Trẻ')" checked>Trẻ</label></div>
                <div><label><input type="checkbox" name="priceFilter" onchange="AddNxbFilter(this,'IPM')" checked>IPM</label></div>
            </div>
        </div>
    </div>
    <div class="sortItem">
        <select id="sort-options" class="sort-select" onchange="consoloertest()">
            <option value="az">Tên: A-Z</option>
            <option value="za">Tên: Z-A</option>
            <option value="19">Giá: Thấp đến Cao</option>
            <option value="91">Giá: Cao đến Thấp</option>
        </select>
    </div>
    <div class="listContainer" id="list">
        <?php
        $sql = "SELECT * FROM product WHERE productQty > 0";
        $kq = $conn->query($sql);
        for ($i = 0; $i < $kq->rowCount(); $i++) {
            $productItem = $kq->fetch();
            $object = json_encode([
                "id" => $productItem['productID'],
                "qty" => 1,
                "title" => $productItem['title'],
                "img" => $productItem['img1'],
                "productQty" => $productItem['productQty'],
                "newPrice" => $productItem['newPrice'],
                "oldPrice" => $productItem['oldPrice']
            ], JSON_UNESCAPED_UNICODE);
            echo "
                    <div class='product_container2'>
                        <a href='product.php?productID={$productItem['productID']}' class='product_image'>
                            <img src='{$productItem['img1']}' alt=''>
                        </a>
                        <div class='product_bottom'>
                            <div class='title'>
                                <a href='product.php?productID={$productItem['productID']}'>{$productItem['title']}</a>
                            </div>                        
                            <div class='product_price'>
                                <p class='newprice'>{$productItem['newPrice']} đ<span>-".round((1 - ($productItem['newPrice'] / $productItem['oldPrice'])) * 100, 1)."%</span></p>
                                <p class='oldprice'>{$productItem['oldPrice']} đ</p>
                            </div>
                            <div class='buyContainer'>
                                <form method='post' action='addCart.php'>
                                    <input type='hidden' name='productID' value='{$object}'/>
                                    <button type='submit' class='addCart'>Thêm vào giỏ</button>
                                </form>
                                <a class='buyNow' href='thanhtoan.php?productID={$productItem['productID']}&quantity=1&Cart=0'>Mua Ngay</a>
                            </div>  
                            <div class='rating_container'>
                                <div class='rating'>
                                    
                                </div>
                                <div class='soldqty'>
                                    
                                </div>
                            </div>
                        </div>                         
                    </div>
			    ";
        }
        ?>
        <div class="category_expand" id="showmore" onclick="ShowAll()">Xem thêm</div>
    </div>
</div>
<script src="./js/productList.js"></script>