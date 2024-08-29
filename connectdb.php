<?php
    try {
        $host = "localhost"; //địa chỉ mysql server sẽ kết nối đến 
        $dbname = "BPBooks";//tên database sẽ kết nối đến 
        $username = "root"; //username để kết nối đến database 
        $password = ""; // mật khẩu để kết nối đến database 
        $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) { //bắt lỗi kết kết nối không được 
        die("Lỗi: " . $e->getMessage());
    }

    function getProduct4Slide($idTL) {
        try {
            $sql = "SELECT productID, title, oldPrice, newPrice, img1, rating FROM product WHERE theLoai='$idTL'";
            global $conn;
            $kq = $conn->query($sql);
            return $kq->fetchAll();
        } catch (Exception $e) {
            die("Lỗi trong hàm: " . __FUNCTION__ . ":" . $e->getMessage());
        }     
    }

    function getProduct($idP) {
        try {
            $sql = "SELECT * FROM product WHERE productID=$idP";
            global $conn;
            $kq = $conn->query($sql);
            return $kq->fetch();
        } catch (Exception $e) {
            die("Lỗi trong hàm: " . __FUNCTION__ . ":" . $e->getMessage());
        }  
    }

    function getProduct4Cart($idP) {
        try {
            $sql = "SELECT title, img1, newPrice, oldPrice FROM product WHERE productID=$idP";
            global $conn;
            $kq = $conn->query($sql);
            return $kq->fetch();
        } catch (Exception $e) {
            die("Lỗi trong hàm: " . __FUNCTION__ . ":" . $e->getMessage());
        }  
    }
?>

