<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add_to_cart') {
        $productName = $_POST['name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $size = $_POST['size'];

        // Add product to session cart
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = [
            'name' => $productName,
            'quantity' => $quantity,
            'price' => $price,
            'size' => $size
        ];

        echo 'Product added to cart';
    }
}
?>
