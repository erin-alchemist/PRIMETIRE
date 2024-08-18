<?php
session_start();
include 'db.php';

$product_id = $_POST['product_id'];
$quantity = 1;  // default quantity

// Check if cart already exists
if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id] += $quantity;
} else {
    $_SESSION['cart'][$product_id] = $quantity;
}

echo "Product added to cart!";
?>

