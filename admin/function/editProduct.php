<?php
    require_once 'functions.php';
    session_start();
    if (!isset($_SESSION['username'])){
        header("location: ../login/login.php");
        exit();
    }     

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
        <header>BPBOOKS - ADMIN</header>
        <div class="menu">
            <a href="index.php" class="home">Home</a>
            <form method="post" action="./login/logout.php">
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>

        <div class="formContainer">
            <h4 class="formHeader">SỬA SẢN PHẨM</h4>
            <form action="" method="post">
                <div class="form-group">
                <label>Tên truyện</label> <input name="title" type="text" value="<?=$product['title']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Giá cũ</label> <input name="oldPrice" type="number" value="<?=$product['oldPrice']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Giá mới</label> <input name="newPrice" type="number" value="<?=$product['newPrice']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Ảnh 1</label> <input name="img1" type="text" value="<?=$product['img1']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Ảnh 2</label> <input name="img2" type="text" value="<?=$product['img2']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Ảnh 3</label> <input name="img3" type="text" value="<?=$product['img3']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Ảnh 4</label> <input name="img4" type="text" value="<?=$product['img4']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Rating</label> <input name="rating" type="float" value="<?=$product['rating']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Mô tả</label> <textarea name="description" value="<?=$product['description']?>" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <label>Tác giả</label> <input name="author" type="text" value="<?=$product['author']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Nhà xuất bản</label> <input name="nxb" type="text" value="<?=$product['nxb']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Lứa tuổi</label> <input name="age" type="text" value="<?=$product['age']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Thể loại</label> <input name="theLoai" type="text" value="<?=$product['theLoai']?>" class="form-control"/>
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
        $oldPrice = $_POST['oldPrice'];
        $newPrice = $_POST['newPrice'];
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $img3 = $_POST['img3'];
        $img4 = $_POST['img4'];
        $rating = $_POST['rating'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $nxb = $_POST['nxb'];
        $age = $_POST['age'];
        $theLoai = $_POST['theLoai'];

        $title = trim(strip_tags($title));
        $img1 = trim(strip_tags($img1));
        $img2 = trim(strip_tags($img2));
        $img3 = trim(strip_tags($img3));
        $img4 = trim(strip_tags($img4));
        $description = trim(strip_tags($description));
        $author = trim(strip_tags($author));
        $nxb = trim(strip_tags($nxb));
        $theLoai = trim(strip_tags($theLoai));

        settype($oldPrice, "int");
        settype($newPrice, "int");
        settype($rating, "float");
        settype($age, "int");

        $kq = updateProduct($id, $title, $oldPrice, $newPrice, $img1, $img2, $img3, $img4, $rating, $description, $author, $nxb, $age, $theLoai);
        if ($kq){
            header("location: ../productAdmin.php");
            exit();
        }
    }
