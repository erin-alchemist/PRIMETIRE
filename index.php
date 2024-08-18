<?php
include 'db.php';

session_start();
// Assuming 'loggedIn' is set to true when the user logs in
$isLoggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

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
        .menu-toggle .dropdown-content {
        display: none;
        top: 70%;
        right:100%;
        margin-left: 90%;
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
          padding: 11px 20px;
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
                <li><a href="indexcontact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section class="banner">
        <div class="slider">
            <img src="images\design\banner3.jpg" alt="Banner Image 1" class="slider-img active">
            <img src="images\design\banner4.png" alt="Banner Image 2" class="slider-img">
            <img src="images\design\banner5.jpg" alt="Banner Image 3" class="slider-img">
        </div>
        <div class="banner-text">
            <h1>Prime Tire</h1>
            <p>Discover the best products and deals!</p>
            <a href="login.php" class="shop-now-button">Shop Now</a>
        </div>
        <div class="slider-controls">
            <span class="prev">&#10094;</span>
            <span class="next">&#10095;</span>
        </div>
    </section>

   
    <!-- Information Section -->
    <section class="info-section">
    <div class="info-item categories-dropdown">
        <i class="fas fa-th-large icon-img"></i>
        <p>Categories</p>
        <div class="dropdown-container"> 
            <a href="#">Bridgestone Tires</a>
            <a href="#">Dunlop Tires</a>
            <a href="#">Goodyear Tires</a>
        </div>
    </div>
    <div class="info-item">
        <i class="fas fa-truck icon-img"></i>
        <p>Free Delivery</p>
    </div>
    <div class="info-item">
        <i class="fas fa-credit-card icon-img"></i>
        <p>Quick Payment</p>
    </div>
    <div class="info-item">
        <i class="fas fa-tags icon-img"></i>
        <p>Best Deals</p>
    </div>
    <div class="info-item">
        <i class="fas fa-globe icon-img"></i>
        <p>Ship Nationwide</p>
    </div>
    
</section>


    <!-- Featured Products Section -->
    <section class="featured-products"> 
        <div class="products">
            <h2>Featured Products</h2>
            <div class="product-grid">
            <div class="product">
                    <img src="images\Bridgestone Tires\2. Bridgestone Turanza QuietTrack\front.avif" alt="Featured Product 1">
                    <div class="product-info">
                        <h3>Bridgestone Turanza QuietTrack</h3>
                        <p> <b> Description:</b>Premium touring all-season tire for sedans, coupes, and crossovers. It provides a quiet, comfortable ride with long-lasting performance and enhanced wet and dry traction. </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images\Bridgestone Tires\1.Bridgestone Potenza RE980AS\side.avif" alt="Featured Product 1">
                    <div class="product-info">
                        <h3>Bridgestone Potenza RE980AS</h3>
                        <p> <b> Description:</b> High-performance all-season tire for sports cars, performance sedans, and coupes. It offers excellent wet and dry traction, enhanced handling, and a comfortable ride. </p>
                        <p><b>Price:</b> 9,900 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <!-- Repeat for more products -->
               
                <div class="product">
                    <img src="images\Bridgestone Tires\5. Bridgestone Dueler AT Revo 3\front.avif" alt="Featured Product 3">
                    <div class="product-info">
                        <h3>Bridgestone Dueler H/L Alenza Plus</h3>
                        <p> <b> Description:</b>Premium all-season tire for SUVs and crossovers. It offers a comfortable ride, long tread life, and reliable performance in various weather conditions.
                        </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images\Bridgestone Tires\3 Bridgestone Dueler HL Alenza Plus\tilted.avif" alt="Featured Product 3">
                    <div class="product-info">
                        <h3>Bridgestone Dueler H/L Alenza Plus</h3>
                        <p> <b> Description:</b>Premium all-season tire for SUVs and crossovers. It offers a comfortable ride, long tread life, and reliable performance in various weather conditions.
                        </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images\Bridgestone Tires\3 Bridgestone Dueler HL Alenza Plus\tilted.avif" alt="Featured Product 3">
                    <div class="product-info">
                        <h3>Bridgestone Dueler H/L Alenza Plus</h3>
                        <p> <b> Description:</b>Premium all-season tire for SUVs and crossovers. It offers a comfortable ride, long tread life, and reliable performance in various weather conditions.
                        </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="images\Bridgestone Tires\3 Bridgestone Dueler HL Alenza Plus\tilted.avif" alt="Featured Product 3">
                    <div class="product-info">
                        <h3>Bridgestone Dueler H/L Alenza Plus</h3>
                        <p> <b> Description:</b>Premium all-season tire for SUVs and crossovers. It offers a comfortable ride, long tread life, and reliable performance in various weather conditions.
                        </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div> <div class="product">
                    <img src="images\Bridgestone Tires\3 Bridgestone Dueler HL Alenza Plus\tilted.avif" alt="Featured Product 3">
                    <div class="product-info">
                        <h3>Bridgestone Dueler H/L Alenza Plus</h3>
                        <p> <b> Description:</b>Premium all-season tire for SUVs and crossovers. It offers a comfortable ride, long tread life, and reliable performance in various weather conditions.
                        </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div> <div class="product">
                    <img src="images\Bridgestone Tires\4. Bridgestone Ecopia EP422 Plus\front.avif" alt="Featured Product 3">
                    <div class="product-info">
                        <h3>Bridgestone Dueler H/L Alenza Plus</h3>
                        <p> <b> Description:</b>Premium all-season tire for SUVs and crossovers. It offers a comfortable ride, long tread life, and reliable performance in various weather conditions.
                        </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div> <div class="product">
                    <img src="images\Bridgestone Tires\5. Bridgestone Dueler AT Revo 3\front.avif" alt="Featured Product 3">
                    <div class="product-info">
                        <h3>Bridgestone Dueler H/L Alenza Plus</h3>
                        <p> <b> Description:</b>Premium all-season tire for SUVs and crossovers. It offers a comfortable ride, long tread life, and reliable performance in various weather conditions.
                        </p>
                        <p><b>Price:</b>8,800 PHP </p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
        
                
                <!-- Add more products as needed -->
            </div>
        </div>
    </section>
    <!-- Brand Slider Section -->
    <section class="brand-slider">
        <h2>Our Brands</h2>
        <div class="brand-slider-wrapper">
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 1">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 2">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 3">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 4">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 5">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 6">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 6">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 6">
            </div>
            <div class="brand">
                <img src="https://via.placeholder.com/150x100" alt="Brand 6">
            </div>
            <!-- Add more brands as needed -->
        </div>
    </section>
    <!-- Blog Post Section -->
    <section class="blog-posts">
        <h2>Latest Blog Posts</h2>
        <div class="blog-grid">
            <article class="blog-post">
                <img src="https://via.placeholder.com/400x250" alt="Blog Post 1">
                <div class="blog-info">
                    <h3>Blog Post Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum nunc nec leo efficitur...</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </article>
            <article class="blog-post">
                <img src="https://via.placeholder.com/400x250" alt="Blog Post 2">
                <div class="blog-info">
                    <h3>Blog Post Title 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum nunc nec leo efficitur...</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </article>
            <article class="blog-post">
                <img src="https://via.placeholder.com/400x250" alt="Blog Post 3">
                <div class="blog-info">
                    <h3>Blog Post Title 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum nunc nec leo efficitur...</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </article>
            <!-- Add more blog posts as needed -->
        </div>
    </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="footer-section links">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li> 
                        <li><a href="#">Products</a></li> 
                        <li><a href="#">About Us</a></li> 
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section legal">
                    <h4>Legal</h4>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-section social-media">
                    <h4>Follow Us</h4>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Prime Tire. All rights reserved.</p>
            </div>
        </footer>
    
    <script src="home.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isLoggedIn = document.body.getAttribute('data-logged-in') === 'true';
            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    if (!isLoggedIn) {
                        event.preventDefault();
                        showLoginPopup();
                    }
                });
            });
        });

        function showLoginPopup() {
            alert("Please log in to add items to your cart.");
            window.location.href = "login.php";
        }
    </script>
</body>
</html>
