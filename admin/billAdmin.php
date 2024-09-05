<?php 
    session_start();
    require_once 'connectdb.php';
    if (!isset($_SESSION['username'])){
        header("location: ./login/login.php");
        exit();
    }          
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

            <form method="post" action="./login/logout.php">
                <input type="submit" name="logout" value="Đăng xuất">
            </form>
        </div>
        <div class="billContainer">
                <table class="view">
                    <tr class="view-head">
                        <th>ID đơn hàng</th>
                        <th>ID người nhận</th>
                        <th>Tên người nhận</th>
                        <th>Tổng thành tiền</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>

                        <th></th>
                        <th></th>
                    </tr>

                            <?php
                                try {
                                    $sql = "SELECT * FROM bill;";
                                    // global $conn;
                                    $kq = $conn->query($sql);
                                }
                                catch (Exception $e){
                                    die("Lỗi thực thi sql: " . $e->getMessage() ) ;
                                }

                                foreach($kq as $i){
                                    echo "<tr>";
                                    echo "<td class='cell' style='text-align: center; width: 10%'>", $i['billID'], "</td>";
                                    echo "<td class='cell' style='text-align: center; width: 10%'>", $i['userID'], "</td>";
                                    echo "<td class='cell' style='width:20%;'>", $i['userName'], "</td>";
                                    echo "<td class='cell' style='width:15%; text-align: center;'>", $i['total'], "</td>";
                                    echo "<td class='cell' style='width:30%'>", $i['userAddress'], "</td>";
                                    switch ($i["billState"]) {
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
                                    echo "<td class='cell' style='width:20%'>", $stateText, "</td>";
                                    
                                    ?>
                                    
                                    <td class='cell'><a href="./function/deleteBill.php?billID=<?=$i['billID']?>"><img src="./images/delete_icon.png"/></a></td>
                                    <td class='cell'><a href="./function/editbillstate.php?billID=<?=$i['billID']?>"><img src="./images/edit_icon.png"/></a></td>
                                    <?php
                                    echo "</tr>";
                                }
                            ?>
                </table>
        </div>
        
    </div>
</body>
</html>