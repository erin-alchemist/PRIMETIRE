<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Tire</title>
    <link rel="stylesheet" href="css/aboutus.css">
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
<body>
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

    <header class="hero-section">
        <h1>Prime tire is here to serve you</h1>
        <div class="hero-image">
            <img src="your-image.jpg" alt="Fashion Shopping">
            <div class="play-button">&#9658;</div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button class="read-more">Read More</button>
    </header>

    <section class="services-section">
        <div class="service">
            <i class="fas fa-truck icon-img"></i>
            <h3>Free Delivery</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="service">
            <i class="fas fa-credit-card icon-img"></i>
            <h3>Quick Payment</h3>
            <p>100% Secure Payment.</p>
        </div>
        <div class="service">
            <i class="fas fa-gift"></i>
            <h3>Gift Certificate</h3>
            <p>Buy New Stock.</p>
        </div>
        <div class="service">
            <i class="fas fa-american-sign-language-interpreting"></i>
            <h3>24/7 Support</h3>
            <p>Ready Support.</p>
        </div>
    </section>

    <section class="customer-review">
        <div class="review-images">
            <img src="customer1.jpg" alt="Customer">
            <img src="product.jpg" alt="Product">
        </div>
        <div class="review-text">
            <h2>Customer Review</h2>
            <blockquote>
                <p>“While the outer fabric that was conventional was earlier of cotton now has silk, we might notice the requirement to change.”</p>
                <cite>– Haseen Khan</cite>
                <div class="rating">★★★★★</div>
            </blockquote>
        </div>
    </section>

    <section class="brands-section">
        <h2>Brands We Carry</h2>
        <div class="brands">
            <img src="adidas-logo.png" alt="Adidas">
            <img src="dior-logo.png" alt="Dior">
            <img src="levis-logo.png" alt="Levi's">
            <img src="givenchy-logo.png" alt="Givenchy">
            <img src="fashion-logo.png" alt="Fashion Brand">
        </div>
    </section>

    <section class="products-section">
        <h2>Our Products</h2>
        <div class="products">
            <img src="product1.jpg" alt="Product 1">
            <img src="product2.jpg" alt="Product 2">
            <img src="product3.jpg" alt="Product 3">
            <img src="product4.jpg" alt="Product 4">
            <img src="product5.jpg" alt="Product 5">
        </div>
    </section>
</body>
</html>
