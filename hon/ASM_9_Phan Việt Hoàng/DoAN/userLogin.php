<?php
//tiếp nhận user, pass từ form
$u = $_POST['u'];
$p = $_POST['p'];
//validate dữ liệu tiếp nhận
$u = trim(strip_tags($u));
$p = trim(strip_tags($p));
//truy xuất db
require_once './admin/connectdb.php';
//asd
$sql="SELECT * FROM user WHERE userName='{$u}' AND pass ='{$p}' AND permission=0";
$kq = $conn->query($sql);
$numrows_user = $kq->rowCount();
if ($numrows_user == 1) {// login thành công
    session_start();
    $row_user = $kq->fetch();
    $_SESSION['cart']=[];
    $_SESSION['userID'] = $row_user['userID'];
    $_SESSION['userName'] = $row_user['userName'];//tạo biến ghi nhận user đã login
    $_SESSION['pass'] = $row_user['pass'];//tạo biến ghi nhận user đã login
    header("location: ./home.php");
}
else header("location: login.php");//login thất bại, login lại