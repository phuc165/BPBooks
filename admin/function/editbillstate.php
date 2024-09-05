<?php
    require_once 'functions.php';
    session_start();
    if (!isset($_SESSION['username'])){
        header("location: ../login/login.php");
        exit();
    }     

    $id = $_GET['billID'];
    settype($id, "int");
    $bill = getBillState($id);
    switch ($bill["billState"]) {
        case 0:
            $stateText = "Đang chờ xác nhận";
            break;
        case 1:
            $stateText = "Đã xác nhận đơn hàng";
            break;
        case 2:
            $stateText = "Đơn hàng đang được giao";
            break;
        case 3:
            $stateText = "Giao hàng thành công";
            break;
        default:
            $stateText = "Lỗi";
    }
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
            <h4 class="formHeader">CẬP NHẬT TRẠNG THÁI ĐƠN HÀNG</h4>
            <form action="" method="post">
                <div class="form-group">
                <label>Trạng thái đơn hàng</label> <input name="billState" type="text" value="<?=$bill['billState']?>" class="form-control"/>
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
        $billState = $_POST['billState'];
        

        settype($billState, "int");
        

        

        $kq = updateBillState($id, $billState);
        if ($kq){
            header("location: ../billAdmin.php");
            exit();
        }
    }
