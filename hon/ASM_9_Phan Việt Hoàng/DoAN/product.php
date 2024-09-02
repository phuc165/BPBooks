<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>2nd Clothes</title>
    <link rel="shortcut icon" href="./Image/brand/favicon.jpg" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="./css/product.css">
    <link rel="stylesheet" href="./css/reusable.css">
    <?php
    session_start();

    require_once "./admin/connectdb.php";
    $sql = "SELECT * FROM product WHERE instock > 0";
    $kq = $conn->query($sql);

    for ($i = 0; $i < $kq->rowCount(); $i++) {
        $product[] = $kq->fetch();
    }
    global $product;


    //$_SESSION['cart']=[];




    ?>
    <script>
        var productList = <?php echo json_encode($product); ?>;
        console.log(productList);
    </script>
</head>

<body>

    <?php require_once 'header.php' ?>




    <div id="Tatca" class="tabcontent">
        <div class="sorter">
            <h1>Tất cả sản phẩm </h1>

            <select id="sort-options" class="sort-select" onchange="consoloertest()">

                <option value="az">Tên: A-Z</option>
                <option value="za">Tên: Z-A</option>
                <option value="19">Giá: Thấp đến Cao</option>
                <option value="91">Giá: Cao đến Thấp</option>
                <!-- <option  value="time">Mới nhất</option> -->
            </select>
        </div>
        <div class="filter">
            <div class="filter-section">
                <div class="filter-item">
                    <i class="fa fa-filter"></i><span> BỘ LỌC </span>
                </div>

                <div class="filter-select">
                    <div class="filter-subtitle">
                        <span>Lọc giá</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="filter-checkbox">
                        <ul>
                            <li>

                                <input class="price-check" type="checkbox" name="price-filter" id="" value="100000" onclick="AddCondition(this,0,100000)">
                                <label for="">Dưới 100.000đ</label>

                            </li>
                            <li>
                                <input class="price-check" type="checkbox" name="price-filter" id="" value="200000" onclick="AddCondition(this,100000,200000)">
                                <label for="">100.000đ - 200.000đ</label>
                            </li>
                            <li>
                                <input class="price-check" type="checkbox" name="price-filter" id="" value="300000" onclick="AddCondition(this,200000,300000)">
                                <label for="">200.000đ - 300.000đ</label>
                            </li>
                            <li>
                                <input class="price-check" type="checkbox" name="price-filter" id="" value="400000" onclick="AddCondition(this,300000,400000)">
                                <label for="">300.000đ - 400.000đ</label>
                            </li>
                            <li>
                                <input class="price-check" type="checkbox" name="price-filter" id="" value="900000" onclick="AddCondition(this,400000,9999999)">
                                <label for="">Trên 400.000đ</label>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="filter-select">
                    <div class="filter-subtitle">
                        <span>Loại</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="filter-checkbox">
                        <ul>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddTypeCondition(this,'Áo hoodie')" checked>
                                <label for="">Áo hoodie</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddTypeCondition(this,'Áo khoác jean')" checked>
                                <label for="">Áo khoác jean</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddTypeCondition(this,'Áo sơ mi')" checked>
                                <label for="">Áo sơ mi</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddTypeCondition(this,'Quần bò')" checked>
                                <label for="">Quần bò</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddTypeCondition(this,'Quần tây')" checked>
                                <label for="">Quần tây</label>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="filter-select">
                    <div class="filter-subtitle">
                        <span>Kích thước</span>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="filter-checkbox">
                        <ul>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddSizeCondition(this,'S')" checked>
                                <label for="">S</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddSizeCondition(this,'M')" checked>
                                <label for="">M</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddSizeCondition(this,'L')" checked>
                                <label for="">L</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddSizeCondition(this,'XL')" checked>
                                <label for="">XL</label>
                            </li>
                            <li>
                                <input type="checkbox" name="price-filter" id="" onchange="AddSizeCondition(this,'XXL')" checked>
                                <label for="">XXL</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div id="List-san-pham" class="product-list">
            <?php
            $sql = "SELECT * FROM product WHERE instock > 0";
            $kq = $conn->query($sql);
            for ($i = 0; $i < $kq->rowCount(); $i++) {
                $productSingle = $kq->fetch();

                $object = json_encode([
                    "id" => $productSingle['productID'],
                    "qtt" => 1,
                    "name" => $productSingle['productname'],
                    "img" => $productSingle['image'],
                    "warehouse" => $productSingle['instock'],
                    "price" => ($productSingle["price"] - $productSingle["price"] * $productSingle['discount'] / 100)
                ], JSON_UNESCAPED_UNICODE);


                echo
                "<div class='product-single col-20'>
            <a class='product-link' href ='productDetail.php?productID={$productSingle['productID']}'>
            <div class='product-img'>
                <img src='{$productSingle['image']}' alt=''>
            </div>
            <div class='product-name'>
                <p>{$productSingle['productname']} </p>
                
            </div>
            
            </a>
            <div class='product-price'>
               
                ";
                if ($productSingle['discount'] > 0) {
                    echo "
                     <p><del>{$productSingle['price']}</del>    " . ($productSingle['price'] - $productSingle['price'] * $productSingle['discount'] / 100) . " <sup>đ</sup></p>
                <div class='price-discount'><p>{$productSingle['discount']}%</p></div>";
                } else {
                    echo "
                     <p>{$productSingle['price']}<sup>đ</sup></p>";
                }
                echo "
            </div>
            <div class='buy-product'>
                <button  class='buy'><a class='buy-btn-link' href='productDetail.php?productID={$productSingle['productID']}'> Mua</a></button>
                <form class='addCart' method='post' action='cartChange.php'>
                    <input type='hidden' name='prodID' value='{$object}'/>
                    <button type='submit' class='addcart'> Thêm vào giỏ </button>
                </form>
            </div>

        </div>";
            }
                /* <form class='addCart' method='post' action='xulygiohang.php'>
                <input type='hidden' name='productID' value='<?={$productItem['productID']}?>/>
                <button type='submit'>Thêm vào giỏ</button>
                </form> */
            ?>
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
                <a href="">
                    <p>Giới thiệu 2nd Clothes</p>
                </a>
                <a href="">
                    <p>Hướng dẫn đặt hàng</p>
                </a>
                <a href="">
                    <p>Chính sách và quy định</p>
                </a>
                <a href="">
                    <p>Chính sách bảo mật</p>
                </a>
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
    <script src="./js/product.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/search.js"></script>

</body>

</html>