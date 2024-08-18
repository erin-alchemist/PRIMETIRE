<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="orders.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #121416; /* Color 3 */
            padding: 20px;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar h2 {
            color: #efc143; /* Color 1 */
            font-size: 22px;
            text-align: center;
            margin: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #eb7324; /* Color 2 */
            border-radius: 5px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 300px; /* Offset for sidebar */
        }

        .main-content header {
            background-color: #efc143; /* Color 1 */
            padding: 20px;
            border-bottom: 1px solid #e1e1e1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .main-content header input {
            width: 200px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #e1e1e1;
        }

        .main-content h2 {
            margin-top: 0;
            color: #121416; /* Color 3 */
        }

        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px 15px;
            border: 1px solid #e1e1e1;
            text-align: left;
        }

        table th {
            background-color: #eb7324; /* Color 2 */
            color: #ffffff;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        button {
            background-color: #eb7324; /* Color 2 */
            color: #ffffff;
            font-size: 14px;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d15d00; /* Slightly darker shade of Color 2 */
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <nav class="sidebar">
            <h2>Prime Tire's Dashboard</h2>
            <ul class="menu">
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="add-category.php">Add Category</a></li>
                <li><a href="add-product.php">Add Product</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

        <div class="main-content">
            <header>
                <input type="text" placeholder="Search...">
                <div class="user-info">
                    <span>Administrator</span>
                </div>
            </header>
            
            <h2>Orders</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="orderTableBody">
                        <!-- Orders will be listed here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        // JavaScript to handle the confirmation of orders
        document.addEventListener('DOMContentLoaded', function() {
            loadOrders();
        });

        function loadOrders() {
            // Fetch orders from your server and populate the table
            fetch('fetch_orders.php')
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('orderTableBody');
                    tbody.innerHTML = ''; // Clear existing rows
                    data.orders.forEach((order, index) => {
                        tbody.innerHTML += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${order.id}</td>
                                <td>${order.customer}</td>
                                <td>${order.date}</td>
                                <td>${order.status}</td>
                                <td>
                                    ${order.status === 'Pending' ? 
                                    `<button onclick="updateStatus(${order.id}, 'Confirmed')">Confirm</button>` : 
                                    `<button onclick="updateStatus(${order.id}, 'Pending')">Pending</button>`}
                                </td>
                            </tr>
                        `;
                    });
                });
        }

        function updateStatus(orderId, newStatus) {
            fetch('update_order_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ orderId: orderId, status: newStatus })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Order status updated successfully!');
                    loadOrders(); // Reload orders to reflect changes
                } else {
                    alert('Failed to update order status.');
                }
            });
        }
    </script>
</body>
</html>
