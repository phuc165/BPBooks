<?php require_once 'connectdb.php'; ?>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="./js/productList.js"></script>
<script src="./js/filter.js"></script>
<link href = "css/productList.css" rel = "stylesheet">
<link rel="stylesheet" href="./css/productList.css">
<div class="productList" >
    <div class="productFilter">
        <p>Lọc sản phẩm</p>
        <div class="Filter">
            <button class="dropBtn">Giá</button>
            <div class="dropdownContent">
                <input type="hidden" id="hidden_minimum_price" value="10000" />
                <input type="hidden" id="hidden_maximum_price" value="300000" />
                <p id="price_show">10000 - 300000</p>
                <div id="price_range"></div>
            </div>
        </div>
        <div class="Filter">
            <button class="dropBtn">Độ tuổi</button>
            <div class="dropdownContent">
                <?php 
                    try {
                        $sql = "SELECT DISTINCT age FROM product";
                        $age = $conn->query($sql);
                        $age -> execute();
                        // Fetch all rows from the result set
                        $age = $age->fetchAll(PDO::FETCH_ASSOC);
                    } catch (Exception $e) {
                        die("Error in function: " . __FUNCTION__ . ":" . $e->getMessage());
                    }
                    foreach ($age as $row) {
                ?>
                <div class="filterContent" class="checkbox">
                    <label>
                        <input 
                            type="checkbox" 
                            value="<?= $row['age']; ?>"
                            class="common_selector age"
                        > 
                        <?= $row['age']; ?> 
                    </label>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="Filter">
            <button class="dropBtn">Nhà xuất bản</button>
            <div class="dropdownContent">
                <?php 
                    try {
                        $sql = "SELECT DISTINCT nxb FROM product";
                        $nxb = $conn->query($sql);
                        $nxb -> execute();
                        // Fetch all rows from the result set
                        $nxb = $nxb->fetchAll(PDO::FETCH_ASSOC);
                    } catch (Exception $e) {
                        die("Error in function: " . __FUNCTION__ . ":" . $e->getMessage());
                    }
                    foreach ($nxb as $row) {
                ?>
                <div class="filterContent" class="checkbox">
                    <label>
                        <input 
                            type="checkbox" 
                            value="<?= $row['nxb']; ?>"
                            class="common_selector nxb"
                            >
                        <?= $row['nxb']; ?>
                    </label>
                </div>
                <?php } ?>            
            </div>
        </div>
    </div>
    <div class="listContainer row filter_data">
        <div class="row filter_data listContainer">
        </div>  
        <!-- <div class="category_expand" id="showmore" onclick="ShowAll()">Xem thêm</div> -->
    </div>
</div>
