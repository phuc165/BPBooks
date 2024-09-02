<?php
    try {
        $host = "localhost"; //địa chỉ mysql server sẽ kết nối đến 
        $dbname = "2ndclothes";//tên database sẽ kết nối đến 
        $username = "root"; //username để kết nối đến database 
        $password = ""; // mật khẩu để kết nối đến database 
        global $conn;
        $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) { //bắt lỗi kết kết nối không được 
        die("Lỗi: " . $e->getMessage());
    }


?>