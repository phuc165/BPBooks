<?php
    $u = $_POST['username'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];

    $u = trim(strip_tags($u));
    $pass = trim(strip_tags($pass));
    $repass = trim(strip_tags($repass));

    $loi="";
    if ($pass!=$repass) $loi .="Hai mật khẩu không giống nhau<br>";





    require_once 'connectdb.php';

    $sql="INSERT INTO user(userName, password) VALUES ('$u','$pass')";
    $kq = $conn->exec($sql);
    if($kq==1){
        echo "<script type='text/javascript'>alert('Thành công');</script>";
        header("location: ./login.php");
        exit();
    }
    else{
        echo"<script type='text/javascript'>alert('Thất bại');</script>";
        header("location: ./login.php");
    } 
?>