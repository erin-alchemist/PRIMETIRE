<?php
session_start();
include 'db.php'; // Ensure this file contains the database connection setup

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, full_name, password, role FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $full_name, $hashed_password, $role);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Set session variables for the logged-in user
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            $_SESSION['full_name'] = $full_name;
            $_SESSION['role'] = $role;

            // Redirect based on role
            if ($role === 0) {
                // Redirect to admin page
                header("Location: admin/admin.php");
            } else {
                // Redirect to user home page
                header("Location: home.php");
            }
            exit();
        } else {
            $message = "Invalid email or password.";
        }
    } else {
        $message = "Account not found.";
    }

    $stmt->close();
    $mysqli->close();
}
?>

            

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Form</title>
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <section class="container">
        <div class="left-side">
            <img src="images/logo.png" alt="Left Side Image" />
        </div>
        <div class="right-side">
            <header>Login Form</header>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter email address" required />
                </div>
                <div class="input-box">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required />
                </div>
                <button type="submit">Login</button>
            </form>

            <!-- Registration link added below the login button -->
            <div style="margin-top: 10px;">
                <p>Don't have an account? <a href="registration.php">Register here</a></p>
            </div>

            <?php if (!empty($message)) : ?>
                <div id="message" style="margin-top: 20px; font-size: 1rem; color: <?= strpos($message, 'Invalid') === false && strpos($message, 'Account') === false ? 'green' : 'red'; ?>;">
                    <?= htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>