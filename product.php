<?php
include 'navbar.php';
include 'db.php';

// Fetch product data with category names
$sqlProducts = "
    SELECT p.id, p.name, p.price, p.brand_id, p.stock, c.category_name
    FROM products p
    LEFT JOIN categories c ON p.category = c.category_id
";
$resultProducts = $mysqli->query($sqlProducts);

$tireModels = array();

if ($resultProducts->num_rows > 0) {
    while ($row = $resultProducts->fetch_assoc()) {
        $productId = $row['id'];
        if (!isset($tireModels[$productId])) {
            $tireModels[$productId] = [
                'details' => [
                    'name' => $row['name'],
                    'price' => $row['price'],
                    'stock' => $row['stock'],
                    'category_name' => $row['category_name'],
                    'brand_id' => $row['brand_id'],
                    'detailed_description' => '' // Ensure this key exists
                ],
                'images' => []
            ];
        }
    }
    $resultProducts->free();
}

// Fetch product descriptions
$sqlDescriptions = "
    SELECT product_id, detailed_description
    FROM product_descriptions
";
$resultDescriptions = $mysqli->query($sqlDescriptions);

if ($resultDescriptions->num_rows > 0) {
    while ($row = $resultDescriptions->fetch_assoc()) {
        $productId = $row['product_id'];
        if (isset($tireModels[$productId])) {
            $tireModels[$productId]['details']['detailed_description'] = $row['detailed_description'];
        }
    }
    $resultDescriptions->free();
}

// Fetch product images
$sqlImages = "
    SELECT product_id, image_path
    FROM product_images
";
$resultImages = $mysqli->query($sqlImages);

if ($resultImages->num_rows > 0) {
    while ($row = $resultImages->fetch_assoc()) {
        $productId = $row['product_id'];
        if (isset($tireModels[$productId])) {
            $tireModels[$productId]['images'][] = $row['image_path'];
        }
    }
    $resultImages->free();
}

// Fetch unique categories
$sqlCategories = "
    SELECT DISTINCT c.category_name
    FROM products p
    LEFT JOIN categories c ON p.category = c.category_id
";
$resultCategories = $mysqli->query($sqlCategories);
$categories = [];
if ($resultCategories->num_rows > 0) {
    while ($row = $resultCategories->fetch_assoc()) {
        $categories[] = $row['category_name'];
    }
    $resultCategories->free();
}

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Product</title>
</head>
<body>
    <div class="container promo-container px-5 py-3 mt-4"> 
        <div class="row">
            <div class="col-md-8 d-flex-column align-self-center">
                <h1>Drive with Confidence—Quality Tires for Every Journey.</h1>
                <p>Our tire products are meticulously engineered to deliver unparalleled performance, safety, and durability, ensuring a smooth, reliable, and confident driving experience in all weather conditions and on any type of road. </p>
                <p class="lead">The piece standout for their contemporary lines and imposing presence</p>
            </div>
            <div class="col-md-4">
                <img src="images/tire.jpg" alt="" />
            </div>
        </div>
    </div>

    <style>
/* General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

a {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

.product-name,
.product-price,
.product-desc {
  color: #121416; /* Color 3 */
}

/* Promo Container */
.promo-container { 
  background: rgba(255, 224, 167, 0.675);
  background: linear-gradient(
      167deg,
      rgba(247, 206, 162, 0.934) 0%, !important
      rgba(242, 242, 242, 1) 100%
  );
}

.promo-container img {
  height: 300px;
  width: 100%;
  object-fit: cover;
}

/* Category Button */
.category-btn {
  border: none;
  background-color: #f7ccaf; /* Color 2 */ 
  border-radius: 4px;
  color: white;
}

/* Product Container */
.product-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  column-gap: 8px;
  row-gap: 8px;
}

.product-container div {
  padding: 8px;
  margin-bottom: 8px;
  border-radius: 8px;
  background-color: #f4f4f3; /* Light gray color for the background */
  transition: background-color 0.2s ease-in-out;        
  cursor: pointer;
}

.product-container div:hover {
  background-color: #eb742482; /* Color 2 */
}

/* Top Header */
.top-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 30px;
  background-color: #121416; /* Color 3 */
  color: white; /* Text color set to white */
}

/* Dropdown Menu */
.menu-toggle .dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  background-color: #121416; /* Color 3 */
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
  background-color: #f0bc5b; /* Color 2 */
}

/* Main Navigation */
.main-header {
  background-color: #121416; /* Color 3 */
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
  color: #eb7324; /* Color 2 */
  border-bottom: 2px solid #eb7324; /* Border color on hover */
}

/* Category Sidebar */
.categories {
  background-color: #f4f4f4; /* Light gray background */
  padding: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.categories h2 {
  margin-bottom: 15px;
  font-size: 1.2rem;
}

.categories ul {
  list-style: none;
  padding: 0;
}

.categories ul li {
  margin-bottom: 10px;
  font-size: 0.8rem;
}

.categories ul li a {
  text-decoration: none;
  color: rgb(0, 0, 0); /* Text color set to white */
}

.categories ul li a:hover {
  text-decoration: underline;
}

.category-chip {
  background-color: orange; /* Color 2 */
  border-radius: 4px;
  margin-top: 4px;
}

/* Responsive Styles */
@media only screen and (max-width: 759px) {
  .feature-product-container {
      display: flex;
  }
  .categories {
      margin-bottom: 8px;
  }
}

    </style>



    <div class="feature-product-container container mt-4" id="container">
        <div class="row">
            <div class="col-md-2 categories">
                <h2>BRANDS</h2>
                <ul>
                    <?php foreach ($categories as $category): ?>
                        <li><a href="product_detail.php?category=<?php echo urlencode($category); ?>"><?php echo htmlspecialchars($category); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="product-container" class="product-container col-md-10">
                <?php foreach ($tireModels as $product): ?>
                    <div class="product-container">
                        <?php foreach ($product['images'] as $image_path): ?>
                            <img class="img-fluid" src="<?php echo htmlspecialchars($image_path); ?>" alt="Product Image" />
                        <?php endforeach; ?>
                        <p class="product-name mt-1 mb-0"><?php echo htmlspecialchars($product['details']['name']); ?></p>
                        <h4 class="product-price mb-0">₱ <?php echo htmlspecialchars($product['details']['price']); ?></h4>
                        <p class="product-desc mb-1"><?php echo htmlspecialchars($product['details']['detailed_description']); ?></p>
                        <p class="product-stock mb-1">Stock: <?php echo htmlspecialchars($product['details']['stock']); ?></p>
                        <p class="category-chip mb-1 text-center">
                        <a href="product_detail.php?category=<?php echo urlencode($product['details']['category_name']); ?>">
                            <?php echo htmlspecialchars($product['details']['category_name']); ?>
                        </a>
                    </p>                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>
