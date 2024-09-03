<?php
require_once 'connectdb.php';
if(isset($_POST["did"])){
$sql = "SELECT * FROM ward WHERE dID= {$_POST['did']} ";
$kq = $conn->query($sql);
if($kq->rowCount()>0){
    for($i = 0; $i < $kq->rowCount(); $i++){
    $ward = $kq->fetch();
    echo "<option value='{$ward['wID']}'>{$ward['wName']}</option> ";

    }
}    
}
?>