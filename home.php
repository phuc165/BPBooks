<?php 
    session_start();
    require_once 'connectdb.php';     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPBooks.com - Manga - Comic</title>
    <link rel="icon" href="./images/home/header/iconlogo.png" type="">
    <link rel="stylesheet" href="./css/foothead.css">

</head>

<body onload="hideProduct()">
    <?php require_once 'header.php' ?>
    <div class="bodyContainer">
        <!-- <img src="./images/home/body/banner.png" alt="" style="width:100%"> -->
        <div class="main_body">
            <?php require_once 'category.php' ?>
            <?php require_once 'productList.php' ?>
        </div>
    </div>
    <?php require_once 'footer.php' ?>
    
</body>
</html>