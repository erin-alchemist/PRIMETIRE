

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="product.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Product</title>
    
  </head>

  <body>
    <?php
    include 'navbar.php';?>
   
    <div class="container promo-container px-5 py-3 mt-4"> 
      <div class="row">
        <div class="col-md-8 d-flex-column align-self-center">
          <h1>Best Possible choice for you</h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nobis, perspiciatis, distinctio ea iusto voluptate placeat sequi possimus officiis reiciendis commodi blanditiis et? Suscipit iure dolorum deleniti illo deserunt mollitia.</p>
          <p class="lead">
            The piece standout for their contemporary lines and imposing
            presence
          </p>
        </div>
        <div class="col-md-4"><img src="images/tire.jpg" alt="" /></div>
      </div>
    </div>
    <!-- <form action="" class="text-center mt-4">
      <button class="category-btn mx-2 px-2 py-1">Button 1</button>
      <button class="category-btn mx-2 px-2 py-1">Button 2</button>
      <button class="category-btn mx-2 px-2 py-1">Button 3</button>
      <button class="category-btn mx-2 px-2 py-1">Button 4</button>
    </form>
    <hr /> -->
    <div class="feature-product-container container mt-4" id="container">
      <div class="row">
        <div class="col-md-2 categories">
            <h2>Categories</h2>
            <ul>
                <li><a href="#">Bridgestone Tires</a></li>
                <li><a href="#">Dunlop Tires</a></li>
                <li><a href="#">Goodyear Tires</a></li>
            </ul>
        </div>
        <div id="product-container" class="product-container col-md-10">
          
        </div>
      </div>
    </div>
  </body>
  <script>
    var tireModels = [
      {
        image: "images/tire.jpg",
        name: "Nigright",
        description: "lorem ipsum dolor met gala",
        price: 9900,
        category: 'All-Season Tires',
      },
      {
        image: "images/tire.jpg",
        name: "Nigright",
        description: "lorem ipsum dolor met gala",
        price: 8900,
        category: 'Winter Tires',
      },
      {
        image: "images/tire.jpg",
        name: "Nigright",
        description: "lorem ipsum dolor met gala",
        price: 10000,
        category: 'Summer Tires',
      },
      {
        image: "images/tire.jpg",
        name: "Nigright",
        description: "lorem ipsum dolor met gala",
        price: 10900,
        category: 'Winter Tires',
      },
      {
        image: "images/tire.jpg",
        name: "Nigright",
        description: "lorem ipsum dolor met gala",
        price: 10500,
        category: 'Off-Road Tires',
      },
      {
        image: "images/tire.jpg",
        name: "Nigright",
        description: "lorem ipsum dolor met gala",
        price: 12000,
        category: 'Performance Tires',
      },
    ];
    var tireContainer = document.querySelector(".product-container");
    document.getElementById("product-container").innerHTML = tireModels
      .map(
        (tire) =>
          `<a href="product_detail.php">
            <div class="">
                <img class="img-fluid" src="${tire.image}" alt="" />
                <p class="product-name mt-1 mb-0">${tire.name}</p>
                <h4 class="product-price mb-0">₱ ${tire.price}</h4>
                <p class="product-desc mb-1">${tire.description}</p>
                <p class="category-chip mb-1 text-center" >${tire.category}</p>
            </div>
        </a>`
      )
      .join("");
  </script>
</html>
