<?php
    try {
        $host = "127.0.0.1";
        $dbname = "admins";
        $username = "root";
        $password = "";
        $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {die("Lỗi: " . $e->getMessage());}
?>
