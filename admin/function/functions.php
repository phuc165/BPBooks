<?php
    require_once '../connectdb.php'; 
?>

<?php
    function deleteProduct($id){
        $sql = "DELETE FROM product WHERE productID = $id";
        global $conn;
        $kq = $conn->exec($sql);
    }

    function addProduct($title, $oldPrice, $newPrice, $img1, $img2, $img3, $img4, $rating, $description, $author, $nxb, $age, $theLoai){
        $sql = "INSERT INTO product (title, oldPrice, newPrice, img1, img2, img3, img4, rating, description, author, nxb, age, theLoai) VALUES ('{$title}', '{$oldPrice}', '{$newPrice}', '{$img1}', '{$img2}', '{$img3}', '{$img4}', '{$rating}', '{$description}', '{$author}', '{$nxb}', '{$age}', '{$theLoai}');";
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

    function updateProduct($id, $title, $oldPrice, $newPrice, $img1, $img2, $img3, $img4, $rating, $description, $author, $nxb, $age, $theLoai){
        $sql = "UPDATE product SET title='{$title}', oldPrice=$oldPrice, newPrice=$newPrice, img1='{$img1}', img2='{$img2}', img3='{$img3}', img4='{$img4}', rating=$rating, description='{$description}', author='{$author}', nxb='{$nxb}', age=$age, theLoai='{$theLoai}'
                WHERE productID=$id";
        global $conn;
        $kq = $conn->exec($sql);
        return $kq==1;
    }