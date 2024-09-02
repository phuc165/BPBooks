<?php
    require_once '../connectdb.php'; 
?>

<?php
    function deleteProduct($id){
        $sql = "DELETE FROM product WHERE productID = $id";
        global $conn;
        $kq = $conn->exec($sql);
    }
    function deleteBill($id){
        $sql = "DELETE FROM bill WHERE billID = $id";
        global $conn;
        $kq = $conn->exec($sql);
    }

    function addProduct($title, $price, $discount, $img1, $description, $brand, $size,  $phanloai,$stock){
        $sql = "INSERT INTO product (productname, price, discount, image, description, brand, size,  category,instock) VALUES ('{$title}', '{$price}', '{$discount}', '{$img1}',  '{$description}', '{$brand}', '{$size}',  '{$phanloai}',  '{$stock}');";
        global $conn;
        $kq = $conn->exec($sql);
        return $kq==1;
    }

    function getDetailProduct($id){
        $sql = "SELECT * FROM product WHERE productID = $id";
        global $conn;
        $kq = $conn->query($sql);
        if ($kq==null) return false;
        else return $kq->fetch();
    }
    function getDetailBill($id){
        $sql = "SELECT * FROM bill WHERE billID = $id";
        global $conn;
        $kq = $conn->query($sql);
        if ($kq==null) return false;
        else return $kq->fetch();
    }

    function updateProduct($id, $title, $price, $discount, $img1, $description, $brand, $size, $phanloai,$stock){
        $sql = "UPDATE product SET productname='{$title}', price=$price, discount=$discount, image='{$img1}',  description='{$description}', brand='{$brand}', size='{$size}' ,category='{$phanloai}',instock='{$stock}'
                WHERE productID=$id";
        global $conn;
        $kq = $conn->exec($sql);
        return $kq==1;
    }
    function updateBill($id,$code,$user,$prod,$qtt,$name,$phone,$fullAddress,$date,$state,$total){
        $sql = "UPDATE bill SET billID='{$id}',maBill='{$code}',userID='{$user}',productID='{$prod}',quantity='{$qtt}',username='{$name}',phone='{$phone}'
        ,useraddress='{$fullAddress}',buytime='{$date}',maBill='{$code}',billstate='{$state}',total='{$total}'
                WHERE billID=$id";
        global $conn;
        $kq = $conn->exec($sql);
        return $kq==1;
    }