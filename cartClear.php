<?php
session_start();


if (isset($_POST['clear'])) {
    $stringg = $_POST['clear'];
    if ($stringg == 1) {
        $_SESSION['cart'] = [];
    }
} else {
    echo "Invalid request.";
}
