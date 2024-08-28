<?php
//tiếp nhận user, pass từ form
$u = $_POST['u'];
$p = $_POST['p'];
//validate dữ liệu tiếp nhận
$u = trim(strip_tags($u));
$p = trim(strip_tags($p));
//truy xuất db
require_once ("connectdb.php");
//asd
$sql="SELECT userID, userName, password FROM user WHERE userName='{$u}' AND password ='{$p}'";
$kq = $conn->query($sql);
$numrows_user = $kq->rowCount();
if ($numrows_user == 1) {// login thành công
    session_start();
    $row_user = $kq->fetch();
    $_SESSION['userID'] = $row_user['userID'];//tạo biến ghi nhận user đã login
    header("location: ./home.php");
}
else header("location: login.php");//login thất bại, login lại