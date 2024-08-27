<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $productId = $_POST['productId'];
    
        // Assuming you have a session variable to store the cart
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    
        // Add the product to the cart (you can implement your own logic here)
        $_SESSION['cart'][] = $productId;
    
        echo json_encode(['message' => 'Product added to cart successfully']);
    }
?>