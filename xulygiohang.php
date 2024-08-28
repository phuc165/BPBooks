<?php
session_start();
require_once 'connectdb.php';
$pID = $_POST['productID'];
$uID = $_SESSION['userID'];


if (!isset($_SESSION['userID'])){
    header("location: ./login.php");
    exit();
}
else {
    $sql="INSERT INTO cart (productID, userID) VALUES ('$pID', '$uID')";
    $kq = $conn->exec($sql);
    if($kq==1){
        echo "<script type='text/javascript'>alert('Thành công');</script>";
    }
}
?>