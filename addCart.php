<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['productID'])) {
    $stringg = $_POST['productID'];
    $dupl = false;
    foreach ($_SESSION['cart'] as $key) {
        $romove = array_search($key, $_SESSION['cart']);
        $removed = $_SESSION['cart'][$romove];
        unset($_SESSION['cart'][$romove]);
        $check = json_decode($key, true);
        $checked = json_decode($stringg, true);
        if ($checked['id'] == $check['id']) {
            if (($check['qty'] + $checked['qty']) <= $check['productQty']) {
                $check['qty'] += $checked['qty'];
                $_SESSION['cart'][] = json_encode($check, JSON_UNESCAPED_UNICODE);
                $dupl = true;
                break;
            } else {
                $check['qty'] = $check['productQty'];
                $_SESSION['cart'][] = json_encode($check, JSON_UNESCAPED_UNICODE);
                $dupl = true;
                break;
            }
        } else {
            $_SESSION['cart'][]=$removed;
            $dupl = false;
        }
    }
    if (!$dupl) {
        $_SESSION['cart'][] = $stringg;
    }
    header("location: ./home.php");
} else {
    echo "Invalid request.";
    header("location: ./home.php");
}
