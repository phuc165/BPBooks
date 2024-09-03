<?php
require_once 'connectdb.php';
if(isset($_POST["pid"])){
$sql = "SELECT * FROM district WHERE pID= {$_POST['pid']} ";
$kq = $conn->query($sql);
if($kq->rowCount()>0){
    for($i = 0; $i < $kq->rowCount(); $i++){
    $district = $kq->fetch();
    echo "<option value='{$district['dID']}'>{$district['dName']}</option> ";

    }
}    
}
?>