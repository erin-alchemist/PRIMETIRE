<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Detail</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <style>
      * {
        font-family: Arial, Helvetica, sans-serif;
      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      body::-webkit-scrollbar {
        overflow: hidden;
      }
      .primary-img {
        object-fit: cover;
        height: 100%;
      }
      .side-pic {
        margin-bottom: 4px;
      }
      .buy-now {
        background-color: orange;
        border: none;
        color: white;
        padding: 8px 16px;
        border-radius: 4px;
        /* box-shadow: 2px 1px 10px rgb(224, 138, 9); */
      }
      .add-to-cart {
        background-color: white;
        border: 1px solid orange;
        color: orange;
        border-radius: 4px;
        padding: 8px 16px;
      }

      .size-title {
        font-size: 12px;
        text-align: center;
        color: black;
        background-color: rgb(250, 216, 152);
        padding: 4px 4px;
        margin: 2px 4px;
        border: none;
      }

      .active {
        background-color: orange;
        color: white;
        border: none;
      }
      .picked {
        background-color: orange;
        color: white;
        border: none;
      }
      .small-side-pic {
        display: none;
      }
      .category {
        font-size: 16px;
        text-align: center;
        color: black;
        border-radius: 4px;
        padding: 4px 12px;
        margin: 2px 4px;
        border: none;
      }
      hr {
        border-color: orange;
        border-width: 2px;
      }
      #quantity {
        border: 1px solid orange;
        text-align: center;
        width: 100px;
      }

      .quantity-container button {
        border: none;
        background-color: lightgray;
        color: black;
        transition: background-color 0.2s ease-in-out;
      }
      .quantity-container button:hover {
        background-color: orange;
      }

      @media only screen and (max-width: 759px) {
        .big-side-pic {
          display: none;
        }
        .small-side-pic {
          margin-top: 8px;
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
          margin: 4px 0;
        }
        .side-pic {
          width: 200px;
          object-fit: cover;
        }
        .quantity-container {
          display: flex;
          max-width: 200px;
          width: 100%;
        }

        .quantity {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <?php
    include 'navbar.php';?>
    <div class="container py-4 px-0">
      <div class="row">
        <div class="big-side-pic col-md-2" id="side-tire">
          <img class="side-pic img-fluid" src="images/tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="images/tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="images/tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="images/tire.jpg" alt="" />
        </div>
        <div class="col-md-5">
          <img class="primary-img img-fluid" src="images/tire.jpg" alt="" />
        </div>
        <div class="small-side-pic col-md-2"></div>
        <div class="col-md-5 pt-2">
          <h2>Bridgestone Potenza</h2>
          <p>
            High-performance all-season tire for sports cars, performance for
            sedances, and coupes. It offers excellent wet and try traction,
            enhanced handling, and a confortable ride.
          </p>
          <span class="fa fa-star checked" style="color: yellow"></span>
          <span class="fa fa-star checked" style="color: yellow"></span>
          <span class="fa fa-star checked" style="color: yellow"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star mr-1s"
            ><span class="ml-1"> 120+ Reviews </span></span
          >
          <h5 class="pb-1" id="price-lead">₱<span id="price">900</span></h5>
          <h4 class="pb-3 pt-0 mt-0" id="total-lead" hidden>
            ₱<span id="total">0</span>
          </h4>
          <div class="quantity-container mb-2">
            <button class="subtract" id="subtract" onclick="subtract()">
              -
            </button>
            <input
              type="number"
              name="quantity"
              id="quantity"
              min="1"
              value="1"
              disabled
            />
            <button class="add" id="add" onclick="add()">+</button>
          </div>
          <p class="mb-1 p-0 ml-1">Sizes:</p>
          <div class="row pb-4 ml-0" id="sizes-container">
            <button class="size-title col-sm-3 active">204/55R16</button>
            <button class="size-title col-sm-3">225/45R17</button>
            <button class="size-title col-sm-3">245/40R18</button>
            <button class="size-title col-md-3">275/35R19</button>
          </div>
          <div class="row ml-1">
            <button class="buy-now col-sm-5 mr-3">Buy Now</button>
            <a href="cart.php" class="add-to-cart col-sm-5 btn btn-info"
              >Checkout</a
            >
          </div>
        </div>
      </div>
      <p class="lead mt-4 mb-0 ml-2">Categories</p>
      <div class="row mt-0 ml-0" id="category-container">
        <button class="category col-mid-4 mx-2 picked">Category 1</button>
        <button class="category col-mid-4 mx-2">Category 2</button>
        <button class="category col-mid-4 mx-2">Category 3</button>
      </div>
      <p class="card-title mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
        atque. Doloribus est repellat, vel optio qui, saepe minima aut
        cupiditate alias, doloremque et quia quaerat dolor rem ab inventore
        officiis!
      </p>
      <p class="card-subtitle mt-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
        atque. Doloribus est repellat, vel optio qui, saepe minima aut
        cupiditate alias, doloremque et quia quaerat dolor rem ab inventore
        officiis! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
        quos eos rem possimus excepturi reprehenderit asperiores voluptates
        provident nihil. Non consectetur quae, officia esse sunt dolorum sequi
        ratione accusantium placeat?
      </p>
    </div>
    
    <div class="container">
      <hr />
      <p class="lead">Related Products</p>
      <div class="row">
        <div class="col-md-3">
          <img class="img-fluid" src="images/tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop GRandtrek Touring A/S</h5>
          <p>₱ 8,250</p>
          <p class="text-secondary">
            An all-season tire designed for crossovers and SUVs, providing
            reliable traction, a comfortable ride, and long-tread life.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid" src="images/tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop Grandtrek AT20</h5>
          <p>₱ 9,350</p>
          <p class="text-secondary">
            An all-terrain tire for SUVs and trucks, offering a balance between
            off-road capability and on-road comfort, with good traction in
            various conditions.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid" src="images/tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop Direzza DZ102</h5>
          <p>₱ 7,700</p>
          <p class="text-secondary">
            High-performance summer tire for sports car and performance
            vehicles, delivering excellent grip, responsive handling, and
            enhanced cornering stability.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid" src="images/tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop SP Sport Maxx RT</h5>
          <p>₱ 11,000</p>
          <p class="text-secondary">
            A premium high-performance summer tire for high-end sports car and
            performance sedans, providing exceptional grip, precise handling,
            and superior braking performance.
          </p>
        </div>
      </div>
    </div>
    <script>
      var btnContainer = document.getElementById("sizes-container");
      var btns = btnContainer.getElementsByClassName("size-title");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
      var btnContainer = document.getElementById("category-container");
      var btns = btnContainer.getElementsByClassName("category");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
          var current = document.getElementsByClassName("picked");
          current[0].className = current[0].className.replace(" picked", "");
          this.className += " picked";
        });
      }
      let price = document.getElementById("price");
      let input = document.getElementById("quantity");
      let total = document.getElementById("total");
      let priceLead = document.getElementById("price-lead");
      let totalLead = document.getElementById("total-lead");

      function add() {
        console.log(`inner ${input.value}`);
        var currentValue = parseInt(input.value, 10);
        var newValue = currentValue + 1;
        input.value = newValue;
        total.textContent = `${Number(price.innerHTML) * Number(newValue)}`;
        totalLead.hidden = false;
        priceLead.style.color = "grey";
      }
      function subtract() {
        if (Number(input.value) > 1) {
          console.log(`inner ${input.value}`);
          var currentValue = parseInt(input.value, 10);
          var newValue = currentValue - 1;
          input.value = newValue;
          total.textContent = Number(total.innerHTML) - 900;
          if (Number(total.innerHTML) == 900) {
            totalLead.hidden = true;
            priceLead.style.color = "black";
          }
        }
      }
      //!SECTION List of tires
      var tireContainer = document.querySelector(".big-side-pic");
      const tires = [
        "images/tire1.jpg",
        "images/tire2.jpg",
        "images/tire3.jpg",
        "images/tire4.jpg",
      ];
      document.getElementById("side-tire").innerHTML = tires.map(
        (tire) => `<img class="side-pic img-fluid" src="${tire}" alt="" />`
      );

 document.querySelector(".buy-now").addEventListener("click", function () {
  document.querySelector('input[name="size"]').value = document.querySelector(".size-title.active").textContent;
  document.querySelector('input[name="quantity"]').value = document.getElementById("quantity").value;
});


    </script>
    <script>
  document.querySelector(".buy-now").addEventListener("click", function () {
    const size = document.querySelector(".size-title.active").textContent;
    const quantity = document.getElementById("quantity").value;
    const price = document.getElementById("price").textContent;
    const productName = document.querySelector("h2").textContent;

    const formData = new FormData();
    formData.append('action', 'add_to_cart');
    formData.append('name', productName);
    formData.append('quantity', quantity);
    formData.append('price', price);
    formData.append('size', size);

    fetch('cart_handler.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      window.location.href = 'cart.php'; // Redirect to cart page
    })
    .catch(error => {
      console.error('Error:', error);
    });
  });
</script>

  </body>
</html>
