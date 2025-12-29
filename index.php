<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Morya Bakers | Fresh Cakes & Bakery</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
:root {
  --primary:#c0392b;
  --dark:#2c2c2c;
  --light:#fff;
  --gray:#f5f5f5;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{
  font-family:'Poppins',sans-serif;
  background:#fff;
  color:#333;
}
header{
  background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
  url("https://images.unsplash.com/photo-1606890737304-57a1ca8a5b62") center/cover;
  height:85vh;
  color:white;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
}
header h1{font-size:3rem;}
header p{font-size:1.2rem;margin:15px 0;}
.btn{
  background:var(--primary);
  color:white;
  padding:12px 30px;
  text-decoration:none;
  border-radius:30px;
  font-weight:600;
  cursor:pointer;
}
nav{
  background:var(--dark);
  padding:15px;
  position:sticky;
  top:0;
  z-index:10;
  text-align:center;
}
nav a{
  color:white;
  margin:0 15px;
  text-decoration:none;
  font-weight:500;
}
section{padding:70px 10%;}
h2{text-align:center;font-size:2.3rem;margin-bottom:40px;color:var(--dark);}
.about{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:40px;
  align-items:center;
}
.about img{
  width:100%;
  border-radius:20px;
}
.menu{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}
.card{
  background:white;
  border-radius:15px;
  box-shadow:0 5px 15px rgba(0,0,0,.1);
  overflow:hidden;
  text-align:center;
  padding-bottom:15px;
}
.card img{
  width:100%;
  height:200px;
  object-fit:cover;
}
.card h3{margin:15px 0;}
.card p{color:#777;}
.card span{
  display:block;
  margin:10px 0;
  font-weight:600;
  color:var(--primary);
}
.add-to-cart{
  background:var(--primary);
  color:white;
  padding:10px 20px;
  border:none;
  border-radius:20px;
  cursor:pointer;
}
.contact{
  background:var(--gray);
  text-align:center;
}
.contact p{margin:10px 0;font-size:1.1rem;}
footer{
  background:var(--dark);
  color:white;
  text-align:center;
  padding:20px;
}
#order textarea,#order input{
  width:100%;
  padding:10px;
  margin-bottom:15px;
  border-radius:10px;
  border:1px solid #ccc;
}
#order button{
  background:var(--primary);
  color:white;
  padding:12px 25px;
  border:none;
  border-radius:25px;
  cursor:pointer;
  font-weight:600;
}
#message{
  text-align:center;
  margin-top:15px;
  font-weight:bold;
  color:green;
}
@media(max-width:768px){
  header h1{font-size:2.2rem;}
  .about{grid-template-columns:1fr;}
}
</style>
</head>

<body>

<nav>
  <a href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#menu">Menu</a>
  <a href="#order">Order</a>
  <a href="#contact">Contact</a>
</nav>

<header id="home">
  <div>
    <h1>Morya Bakers</h1>
    <p>Fresh Cakes • Premium Taste • Sweet Moments</p>
    <a href="#menu" class="btn">Order Now</a>
  </div>
</header>

<section id="about">
  <h2>About Us</h2>
  <div class="about">
    <div>
      <p>
        <b>Morya Bakers</b> is a premium bakery offering freshly baked cakes,
        pastries and desserts for every celebration.  
        We believe in quality, hygiene and unforgettable taste.
      </p>
      <p>
        🎂 Birthdays | 💍 Weddings | 🎉 Parties | 🧁 Custom Cakes
      </p>
    </div>
    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587">
  </div>
</section>

<section id="menu">
  <h2>Our Best Cakes</h2>
  <div class="menu">

    <div class="card">
      <img src="https://images.unsplash.com/photo-1606890737304-57a1ca8a5b62">
      <h3>Chocolate Truffle</h3>
      <p>Rich & creamy chocolate delight</p>
      <span>₹500 / kg</span>
      <button class="add-to-cart" data-name="Chocolate Truffle" data-price="500">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1559622214-64fbc1bcbab5">
      <h3>Vanilla Cream</h3>
      <p>Classic soft vanilla cake</p>
      <span>₹450 / kg</span>
      <button class="add-to-cart" data-name="Vanilla Cream" data-price="450">Add to Cart</button>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1542826438-8b8c5c3f3c8b">
      <h3>Strawberry Cake</h3>
      <p>Fresh strawberry flavor</p>
      <span>₹550 / kg</span>
      <button class="add-to-cart" data-name="Strawberry Cake" data-price="550">Add to Cart</button>
    </div>

  </div>
</section>

<section id="order">
  <h2>Place Your Order</h2>
  <form id="order-form" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Phone:</label>
    <input type="text" name="phone" required>

    <label>Address:</label>
    <textarea name="address" required></textarea>

    <label>Your Order:</label>
    <textarea name="orderDetails" id="orderDetails" readonly required></textarea>

    <button type="submit">Place Order</button>
    <p id="message"></p>
  </form>
</section>

<section id="contact" class="contact">
  <h2>Contact Us</h2>
  <p>📍 Address: vasud road karmveer nagar road no 7 sangola</p>
  <p>📞 Phone: 9503493276</p>
  <p>📧 Email: moryabakers@gmail.com</p>
</section>

<footer>
  <p>© 2025 Morya Bakers | Designed with ❤️</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
let cart = [];

function updateOrderForm() {
  if(cart.length === 0){
    document.getElementById('orderDetails').value = "";
    return;
  }
  let orderText = "";
  cart.forEach(item => {
    orderText += `${item.name} x ${item.quantity} = ₹${item.price*item.quantity}\n`;
  });
  let total = cart.reduce((sum, item) => sum + item.price*item.quantity, 0);
  orderText += `Total: ₹${total}`;
  document.getElementById('orderDetails').value = orderText;
}

document.querySelectorAll('.add-to-cart').forEach(btn => {
  btn.addEventListener('click', () => {
    const name = btn.dataset.name;
    const price = parseInt(btn.dataset.price);
    const existing = cart.find(item => item.name === name);
    if (existing) existing.quantity += 1;
    else cart.push({name, price, quantity:1});
    updateOrderForm();
    alert(`${name} added to cart!`);
  });
});

// Ajax order submission
$('#order-form').submit(function(e){
  e.preventDefault();
  $.ajax({
    url:'order_backend.php', // create this PHP file on server
    method:'POST',
    data: $(this).serialize(),
    success:function(response){
      $('#message').html(response);
      $('#order-form')[0].reset();
      cart = [];
      updateOrderForm();
    },
    error:function(){
      $('#message').html('Something went wrong. Try again.');
    }
  });
});
</script>

</body>
</html>
