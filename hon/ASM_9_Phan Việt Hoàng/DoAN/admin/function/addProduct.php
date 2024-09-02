<?php
    require_once 'functions.php';
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
        <header>2dnClothes - ADMIN</header>
        <div class="menu">
            <a href="../index.php" class="home">Home</a>
            <form method="post" action="../login/logout.php">
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>

        <div class="formContainer">
            <h4 class="formHeader">THÊM SẢN PHẨM</h4>
            <form action="" method="post">
                <div class="form-group">
                <label>Tên sản phẩm</label> <input name="title" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Giá </label> <input name="oldPrice" type="number" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Khuyến mãi</label> <input name="newPrice" type="number" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Ảnh </label> <input name="img1" type="text" class="form-control"/>
                </div>
           
                <div class="form-group">
                <label>Tồn kho</label> <input name="stock" type="number" class="form-control"/>
                </div>
           
                <div class="form-group">
                <label>Mô tả</label> <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <label>Nhãn hiệu</label> <input name="brand" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Kích cỡ</label> <input name="size" type="text" class="form-control"/>
                </div>
                
                <div class="form-group">
                <label>Phân loại</label> <input name="phanloai" type="text" class="form-control"/>
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
        $title = $_POST['title'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $img1 = $_POST['img1'];
  
        $stock = $_POST['stock'];

        $description = $_POST['description'];
        $brand = $_POST['brand'];
        $size = $_POST['size'];
        
        $phanloai = $_POST['phanloai'];
    
        $title = trim(strip_tags($title));
        $img1 = trim(strip_tags($img1));
       
        $description = trim(strip_tags($description));
        $brand = trim(strip_tags($brand));
        
        $phanloai = trim(strip_tags($phanloai));

        settype($price, "float");
        settype($discount, "float");
        settype($stock, "int");
        

        $kq = addProduct($title, $price, $discount, $img1,  $description, $brand, $size, $phanloai,$stock);
        if ($kq){
            header("location: ../admin.php");
            exit();
        }
    }


    //////////////////////////////////////////////////////////////////////////
    

