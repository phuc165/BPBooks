<?php
    require_once 'functions.php';
    $id = $_GET['billID'];
    settype($id, "int");
    $bill = getDetailBill($id);
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
            <h4 class="formHeader">SỬA Đơn hàng</h4>
            <form action="" method="post">
                <div class="form-group">
                <label>ID đơn hàng</label> <input name="id" type="number" value="<?=$bill['billID']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Mã đơn hàng</label> <input name="code" type="number" value="<?=$bill['maBill']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>ID người dùng</label> <input name="user" type="text" value="<?=$bill['userID']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>ID sản phẩm</label> <input name="prod" type="number" value="<?=$bill['productID']?>" class="form-control"/>
                </div>
                
                <div class="form-group">
                <label>Số lượng</label> <input name="qtt" type="number" class="form-control" value="<?=$bill['quantity']?>" ></input>
                </div>

                <div class="form-group">
                <label>Tên người dùng</label> <input name="name" type="text" value="<?=$bill['username']?>" class="form-control"/>
                </div>

                <div class="form-group">
                <label>Số điện thoại</label> <input name="phone" type="text" value="<?=$bill['phone']?>" class="form-control"/>
                </div>
                
                <div class="form-group">
                <label>Địa chỉ</label> <input name="fullAddress" type="text" value="<?=$bill['useraddress']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Ngày mua</label> <input name="date" type="text" value="<?=$bill['buytime']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Trạng thái</label> <input name="state" type="number" value="<?=$bill['billstate']?>" class="form-control"/>
                </div>
                <div class="form-group">
                <label>Tổng tiền</label> <input name="total" type="number" value="<?=$bill['total']?>" class="form-control"/>
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
        $id = $_POST['id'];
        $code = $_POST['code'];
        $user = $_POST['user'];
        $prod = $_POST['prod'];
       
        $qtt = $_POST['qtt'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $fullAddress = $_POST['fullAddress'];
        $date = $_POST['date'];
        $state = $_POST['state'];
        $total = $_POST['total'];
        $id = trim(strip_tags($id));
        $code = trim(strip_tags($code));
        $phone = trim(strip_tags($phone));
        
        
    
        $fullAddress = trim(strip_tags($fullAddress));
   
        $total = trim(strip_tags($total));
     

        settype($qtt, "int");
       
        settype($total, "float");
     
       

        $kq = updateBill($id,$code,$user,$prod,$qtt,$name,$phone,$fullAddress,$date,$state,$total);
        if ($kq){
            header("location: ../admin.php?bill=1");
            exit();
        }
    }
