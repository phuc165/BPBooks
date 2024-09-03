<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['productID'])) {
    $stringg = $_POST['productID'];

    $_SESSION['cart'][] = $stringg;
    header("location: ./home.php");
} else {
    echo "Invalid request.";
    header("location: ./home.php");
}
