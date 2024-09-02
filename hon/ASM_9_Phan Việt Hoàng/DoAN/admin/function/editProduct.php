<?php
    require_once 'functions.php';
    $id = $_GET['productID'];
    settype($id, "int");
    $product = getDetailProduct($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/add_update.css" rel= "stylesheet" >
</head>
<body>
    <div class="container">
        <header>2ndClothes - ADMIN</header>
        <div class="menu">
            <a href="../index.php" class="home">Home</a>
            <form method="post" action="../login/logout.php">
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>

        <div class="formContainer">
            <h4 class="formHeader">SỬA SẢN PHẨM</h4>
            <form action="" method="post">
                <div class="form-group">
                <label>Tên sản phẩm</label> <input name="productname" type="text" value="<?=$product['productname']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Giá cũ</label> <input name="price" type="number" value="<?=$product['price']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Giá mới</label> <input name="discount" type="number" value="<?=$product['discount']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Ảnh 1</label> <input name="img" type="text" value="<?=$product['image']?>" class="form-control"/>
                </div>
                
                <div class="form-group">
                <label>Mô tả</label> <textarea class="form-control" name="description" value="<?=$product['description']?>" ></textarea>
                </div>

                <div class="form-group">
                <label>Nhãn hiệu</label> <input name="brand" type="text" value="<?=$product['brand']?>" class="form-control"/>
                </div>
                
                <div class="form-group">
                <label>kích cỡ</label> <input name="size" type="text" value="<?=$product['size']?>" class="form-control"/>
                </div>
                
                <div class="form-group">
                <label>Phân loại</label> <input name="phanloai" type="text" value="<?=$product['category']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Tồn kho</label> <input name="stock" type="text" value="<?=$product['instock']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <input name="btn" type="submit" value="Submit" class="submit-button"/>
                </div>
            </form>             
        </div>
    </div>
    </body>
</html>

<?php
    if(isset($_POST['btn'])){
        $title = $_POST['productname'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $img1 = $_POST['img'];
       
        $description = $_POST['description'];
        $brand = $_POST['brand'];
        $size = $_POST['size'];
        $phanloai = $_POST['phanloai'];
        $stock = $_POST['stock'];
        $title = trim(strip_tags($title));
        $img1 = trim(strip_tags($img1));
        
        
        $description = trim(strip_tags($description));
        $stock = trim(strip_tags($stock));
        $brand = trim(strip_tags($brand));
        $size = trim(strip_tags($size));
        $phanloai = trim(strip_tags($phanloai));

        settype($price, "int");
        settype($stock, "int");
        settype($discount, "float");
     
       

        $kq = updateProduct($id, $title, $price, $discount, $img1, $description, $brand, $size, $phanloai,$stock);
        if ($kq){
            header("location: ../admin.php");
            exit();
        }
    }
