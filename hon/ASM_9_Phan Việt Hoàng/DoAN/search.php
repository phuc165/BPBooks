<?php
 require_once "./admin/connectdb.php";
 if(isset($_POST["keyword"])){
    $keyword = $_POST["keyword"];
$sql = "SELECT * FROM product WHERE productname LIKE '%{$keyword}%' ";
$kq = $conn->query($sql);
if($kq->rowCount()>0){
    for($i = 0; $i < $kq->rowCount(); $i++){
   $result = $kq->fetch();
   
   echo "<div class='result'>
                            <a class='result-link' href='productDetail.php?productID={$result['productID']}'>
                            <div class='result-img'>
                                <img src='{$result['image']}' alt=''>
                            </div>
                            <div class='result-name'>
                                {$result['productname']}
                            </div>
                            </a>
                        </div>";

    }
}    else {
    echo "<div style='text-algin:center' >
            <p style='font-size:18px; font-weight:600;    text-align: center;'> Không có kết quả </p>               
        </div>";
}
 }

?>