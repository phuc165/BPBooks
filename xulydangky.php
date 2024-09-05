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

    function getHightestID($conn){
    
        $usersql ="SELECT userID FROM user WHERE userID LIKE 'U%' ORDER BY CAST(SUBSTRING(userID, 2) AS UNSIGNED) DESC LIMIT 1";
        $u=$conn->query($usersql);
        if($u->rowCount() > 0) {  
            $newest = $u->fetch();
            $newestID = (int)substr($newest["userID"],1);
        }
        return $newestID;
     }   
       
    
        $newID = 'U'.(getHightestID($conn) +1);
    $sql="INSERT INTO user(userName,userID, password) VALUES ('$u','$newID','$pass')";
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