<?php
session_start();
include 'db.php'; // Ensure this file contains the database connection setup

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email already exists
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email exists, show an error message
        $message = "An account with this email already exists. Please use a different email.";
    } else {
        // Proceed with registration
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $fullName = $_POST['fullName'];
        $phone = $_POST['phone'];
        $birthDate = $_POST['birthDate'];
        $gender = $_POST['gender'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $postalCode = $_POST['postalCode'];
        
        // Determine the role based on the email (admin or regular user)
        if ($email == 'admin@gmail.com') {
            $role = 0; // Admin role
        } else {
            $role = 1; // Regular user role
        }

        // Insert new user into the database
        $sql = "INSERT INTO users (email, password, full_name, phone, birth_date, gender, address1, address2, barangay, city, region, postal_code, role)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssssssssssssi", $email, $password, $fullName, $phone, $birthDate, $gender, $address1, $address2, $barangay, $city, $region, $postalCode, $role);

        if ($stmt->execute()) {
            // Redirect to the login page after successful registration
            header("Location: login.php");
            exit();
        } else {
            $message = "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
            

<?php if (!empty($message)) : ?>
    <div id="message" class="show" style="margin-top: 20px; font-size: 1rem;">
        <?= htmlspecialchars($message); ?>
    </div>
<?php endif; ?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
<style>
#message {
    margin-top: 20px;
    font-size: 1rem;
    color: white;
    background-color: <?= strpos($message, 'successful') !== false ? 'green' : 'orange'; ?>;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    width: 65%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: opacity 0.5s ease-in-out;
    opacity: 0;
    position: absolute;
    top: 1px;
    left: 25%;
    transform: translateX(-10%);
}

#message.show {
    opacity: 1;
}

.hide-message {
    display: none;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Prime Tire Registration</title>
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <section class="container">
        <div class="left-side">
            <img src="images/logo.png" alt="PRIME TIRE" />
           

        </div>
        <div class="right-side">
    <header>Registration Form</header>
    <form action="#" method="post" class="form">
        <!-- Form Fields -->
        <div class="input-box">
            <label>Full Name</label>
            <input type="text" name="fullName" placeholder="Enter full name" required />
        </div>
        <div class="input-box">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter email address" required />
        </div>
        <div class="column">
            <div class="input-box">
                <label>Phone Number</label>
                <input type="tel" name="phone" placeholder="Enter phone number" required />
            </div>
            <div class="input-box">
                <label>Birth Date</label>
                <input type="date" name="birthDate" required />
            </div>
        </div>
        <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
                <div class="gender">
                    <input type="radio" id="check-male" name="gender" value="Male" checked />
                    <label for="check-male">Male</label>
                </div>
                <div class="gender">
                    <input type="radio" id="check-female" name="gender" value="Female" />
                    <label for="check-female">Female</label>
                </div>
                <div class="gender">
                    <input type="radio" id="check-other" name="gender" value="Prefer not to say" />
                    <label for="check-other">Prefer not to say</label>
                </div>
            </div>
        </div>
        <div class="input-box address">
            <label>Address</label>
            <input type="text" name="address1" placeholder="Enter Street, Phase" required />
            <input type="text" name="address2" placeholder="Enter Block, Lot, Subdivision" />
            <input type="text" name="barangay" placeholder="Enter your barangay" required />
             <input type="text" name="city" placeholder="Enter your city" required />
                
            </div>
            <div class="column">
              
                <div class="column">
                <div class="select-box">
                <select name="region" required>
    <option hidden>Region</option>
    <option value="National Capital Region (NCR)">National Capital Region (NCR)</option>
    <option value="Cordillera Administrative Region (CAR)">Cordillera Administrative Region (CAR)</option>
    <option value="Ilocos Region (Region I)">Ilocos Region (Region I)</option>
    <option value="Cagayan Valley (Region II)">Cagayan Valley (Region II)</option>
    <option value="Central Luzon (Region III)">Central Luzon (Region III)</option>
    <option value="CALABARZON (Region IV-A)">CALABARZON (Region IV-A)</option>
    <option value="MIMAROPA (Region IV-B)">MIMAROPA (Region IV-B)</option>
    <option value="Bicol Region (Region V)">Bicol Region (Region V)</option>
    <option value="Western Visayas (Region VI)">Western Visayas (Region VI)</option>
    <option value="Central Visayas (Region VII)">Central Visayas (Region VII)</option>
    <option value="Eastern Visayas (Region VIII)">Eastern Visayas (Region VIII)</option>
    <option value="Zamboanga Peninsula (Region IX)">Zamboanga Peninsula (Region IX)</option>
    <option value="Northern Mindanao (Region X)">Northern Mindanao (Region X)</option>
    <option value="Davao Region (Region XI)">Davao Region (Region XI)</option>
    <option value="SOCCSKSARGEN (Region XII)">SOCCSKSARGEN (Region XII)</option>
    <option value="Caraga (Region XIII)">Caraga (Region XIII)</option>
    <option value="Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)">Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)</option>
</select>

                </div>
                <input type="number" name="postalCode" placeholder="Enter postal code" required />
            </div>
        </div>
        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required />
        </div>
        <button type="submit">Submit</button>
    </form>
    <?php if (!empty($message)) : ?>
        <div id="message" style="margin-top: 20px; font-size: 1rem; color: <?= strpos($message, 'successful') !== false ? 'green' : 'violet'; ?>;">
            <?= htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <script>
        window.onload = function() {
            var message = document.getElementById('message');
            if (message) {
                message.classList.add('show');
                setTimeout(function() {
                    message.classList.remove('show');
                }, 5000); // 5 seconds 
            }
        }
    </script>

    </body>
    </html>
