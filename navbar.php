
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <style>
        
      /* Top Header */
      .top-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 30px;
        padding-right: 25px;
        padding-bottom: 0%;
        background-color: black; /* Header color set to black */
        color: white; /* Text color set to white */
        position: relative; /* Position relative for dropdown */
      }

      .logo-img {
        width: 150px; /* Adjust the width as needed */
        height: auto; /* Maintain the aspect ratio */
        margin-top: 15px;
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
  
      
      /* Main Navigation */
      .main-header {
        background-color: black; /* Header color set to black */
        padding: 10px 0;
      }

      .main-header nav ul {
        list-style: none;
        display: flex;
        justify-content: center;
        padding: 5px;
      }

      .main-header nav ul li {
        margin: 0 20px;
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
    <header class="top-header">
      <div class="logo">
        <img src="logo-bg.png" alt="Logo" class="logo-img" />
      </div>
      <div class="header-right">
        <input type="text" placeholder="Search..." class="search-bar" />
        <div class="icon user-acc">
            <a href=""><i class="fas fa-user icon-img" aria-label="Account"></i></a>
            </div>
        <div class="icon cart">
            <a href="cart.php"><i class="fas fa-shopping-cart icon-img" aria-label="Cart"></i></a>
            </div>
        <div class="icon menu-toggle">
          <i class="fas fa-bars icon-img" aria-label="Menu"></i>
          <div class="dropdown-content">
            <a href="#">Help</a>
            <a href="#">Settings</a>
            <a href="logout.php">Logout</a>
  
          </div>
        </div>
      </div>
    </header>

    <!-- Main Navigation -->
    <header class="main-header">
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="product.php">Products</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
</body>
</html>
