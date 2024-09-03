<?php
session_start();


if (isset($_POST['value'])) {
    $stringg = $_POST['value'];
    $_SESSION['cart'][] = $stringg;
    $stringg = "";
    echo var_dump($stringg);
    echo var_dump($_SESSION['cart']);
} else {
    echo "Invalid request.";
}
