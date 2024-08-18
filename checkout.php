<?php
session_start();
include 'db.php';

$userId = $_SESSION['user_id'];
$total = $_POST['total'];

// Create order
$sql = "INSERT INTO orders (user_id, total) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('id', $userId, $total);
$stmt->execute();
$orderId = $stmt->insert_id;

// Move items from cart to order
$sql = "INSERT INTO order_items (order_id, product_id, quantity, price)
        SELECT ?, product_id, quantity, (SELECT price FROM products WHERE id = product_id)
        FROM cart_items WHERE cart_id = (SELECT id FROM carts WHERE user_id = ? AND status = 'active')";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ii', $orderId, $userId);
$stmt->execute();

// Clear cart
$sql = "DELETE FROM cart_items WHERE cart_id = (SELECT id FROM carts WHERE user_id = ? AND status = 'active')";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $userId);
$stmt->execute();

$sql = "UPDATE carts SET status = 'completed' WHERE user_id = ? AND status = 'active'";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $userId);
$stmt->execute();

$conn->close();
?>