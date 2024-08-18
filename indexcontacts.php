<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Top Header */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px;
            padding-right: 25px;
            background-color: black; /* Header color set to black */
            color: white; /* Text color set to white */
            position: relative; /* Position relative for dropdown */
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .logo-img {
            width: 150px; /* Adjust the width as needed */
            height: auto; /* Maintain the aspect ratio */
            margin-top: 30px;
            margin-left: 50px;
            padding-top: 10px;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .search-bar {
            padding: 5px;
            margin-right: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .icon {
            margin-left: 15px;
            cursor: pointer;
        }

        .icon-img {
            width: 24px; /* Fixed width for icons */
            height: 24px; /* Fixed height for icons */
        }

        /* Dropdown Menu */
        .menu-toggle {
            position: relative;
        }

        .menu-toggle .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: black;
            border: 1px solid #ccc;
            z-index: 1000;
        }

        .menu-toggle:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #eb7324;
        }

        .main-header {
            background-color: black; /* Header color set to black */
            padding: 10px 0; /* Adjusted padding for better spacing */
        }

        .main-header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0; /* Remove default padding */
            margin: 0; /* Remove default margin */
        }

        .main-header nav ul li {
            margin: 0 30px; /* Add space between text items */
        }

        .main-header nav ul li a {
            text-decoration: none;
            color: white; /* Text color set to white */
            font-size: 18px;
            transition: color 0.3s, border-bottom 0.3s; /* Smooth transition for hover effects */
            padding-bottom: 5px; /* Space for border effect */
            border-bottom: 2px solid transparent; /* Bottom border effect */
        }

        .main-header nav ul li a:hover {
            color: #eb7324; /* Text color on hover */
            border-bottom: 2px solid #eb7324; /* Border color on hover */
        }
    </style>
</head>
<body data-logged-in="<?php echo $isLoggedIn ? 'true' : 'false'; ?>">

    <!-- Top Header -->
    <header class="top-header">
        <div class="logo">
            <img src="logo-bg.png" alt="Logo" class="logo-img">
        </div>
        <div class="header-right">
            <input type="text" placeholder="Search..." class="search-bar">
            
            <div class="icon menu-toggle">
                <i class="fas fa-bars icon-img" aria-label="Menu"></i>
                <div class="dropdown-content">
                    <a href="#">Help</a>
                    <a href="#">Settings</a>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Navigation -->
    <header class="main-header">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="indexabout.php">About Us</a></li>
                <li><a href="indexcontacts.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="contact-section">
        <div class="contact-info">
            <h2>Let's Get In Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul>
                <li><strong>Location:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                <li><strong>Call:</strong> +953445-131 <br> +953445-131</li>
                <li><strong>Mail:</strong> mizanulislamlil@gmail.com <br> mizanulislamlil@gmail.com</li>
            </ul>
        </div>
        <div class="contact-image">
            <img src="images/contacts.jpg" alt="Person">
        </div>
        <div class="contact-form">
            <h2>Let's Talk With Us!</h2>
            <form>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email Address">
                <input type="tel" name="phone" placeholder="Phone Number">
                <textarea name="message" placeholder="Message"></textarea>
                <div class="checkbox">
                    <input type="checkbox" name="terms" id="terms">
                    <div class="label">
                        <label for="terms">I agree with the <a href="#">terms of conditions</a></label>
                    </div>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
</body>
</html>
