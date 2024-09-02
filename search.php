<?php
 require_once "./admin/connectdb.php";
 if(isset($_POST["keyword"])){
    $keyword = $_POST["keyword"];
$sql = "SELECT * FROM product WHERE title LIKE '%{$keyword}%' ";
$kq = $conn->query($sql);
if($kq->rowCount()>0){
    for($i = 0; $i < $kq->rowCount(); $i++){
   $result = $kq->fetch();
   
   echo "<div class='result'>
                            <a class='result-link' href='product.php?productID={$result['productID']}'>
                            <div class='result-img'>
                                <img src='{$result['img1']}' alt=''>
                            </div>
                            <div class='result-name'>
                                {$result['title']}
                            </div>
                            </a>
                        </div>";

    }
}    
else {
    echo "Không tìm thấy kết quả";
}
 }

?>

