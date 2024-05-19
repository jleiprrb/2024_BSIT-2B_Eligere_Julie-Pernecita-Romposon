<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <title>Eligere</title>
</head>

<body>
  <div class="main">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" id="logo"><img src="./images/logo.png" width="125px" height="55px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-solid fa-bars" style="color: white; font-size: 23px;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blogs</a>
              </li>
            </ul>
            <div class="icons_links">
              <button id="Login"><a href="./login_sign-up/login_customer.php">Login</a></button>
              <button id="Sign-up"><a href="./login_sign-up/sign-up.php">Sign-up</a></button>
              <a href="#"><i class="bi bi-cart-fill"></i></a>
              <a href="#"><i class="bi bi-person-circle"></i></a>
            </div>
          </div>
        </div>
      </nav>

   <!--home section-->
   <section id="home">
     <div class="content">
       <h3>Discover Your Elegance With <br> Eligere Jewelry</h3>
       <p>Step into a world of timeless elegance.<br> Our exquisite pieces are designed to elevate your style,<br> offering a touch of sophistication that captivates the senses 
        <br> Discover the essence of elegance and make every moment unforgetable</p>
        <button id="btn">Shop Now</button>
     </div>
   </section>

   <!---about section-->
   <section id="about">
       <div class="container">
         <div class="heading">About Us</div>
         <div class="row">
            <div class="col-md-6">
                <div class="card">
                  <img src = "./images/jewels.jpg">
                </div>
            </div>

            <div class="col-md-6">
               <h3>What Makes Our Jewelry Special?</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis obcaecati inventore aspernatur laborum, doloremque fuga architecto assumenda, dignissimos explicabo veniam. Laborum, doloremque! Voluptate quod non fugit repudiandae quos iusto.
                 <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis corporis numquam dolorem eligendi! Eaque repellat illo est quibusdam architecto ducimus recusandae amet necessitatibus excepturi aperiam, rem, consequatur ea laudantium possimus!
               </p>
                  <button id="about_btn">Learn More</button>
            </div>
         </div>
       </div>
   </section>


    <!----Product section------>
    <section id="top-cards">
      <h1 class="heading">Necklace</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/florence.jpg" class="card-img">
              <div class="card-info">
                   <h5 class="card-name">Florence</h5>
                   <p class="card-price">₱ 5000.00</p>
                <button class="btn-add-to-cart">Add to Cart</button>
            </div>
          </div>
        </div>

<div class="col-md-4 py-3 py-md-0">
  <div class="card">
    <img src="./images/hermione.jpg" class="card-img">
    <div class="card-info">
         <h5 class="card-name">Hermione</h5>
         <p class="card-price">₱ 6000.00</p>
      <button class="btn-add-to-cart">Add to Cart</button>
  </div>
</div>
</div>

<div class="col-md-4 py-3 py-md-0">
  <div class="card">
    <img src="./images/aneri.jpg" class="card-img">
    <div class="card-info">
         <h5 class="card-name">Aneri</h5>
         <p class="card-price">₱ 6000.00</p>
      <button class="btn-add-to-cart">Add to Cart</button>
  </div>
</div>
</div>

<h1 class="heading">Rings</h1>
<div class="container">
  <div class="row">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/dainty.jpg" class="card-img">
        <div class="card-info">
             <h5 class="card-name">Dainty</h5>
             <p class="card-price">₱ 5000.00</p>
          <button class="btn-add-to-cart">Add to Cart</button>
      </div>
    </div>
  </div>

  <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/yves.jpg" class="card-img">
        <div class="card-info">
             <h5 class="card-name">Yves</h5>
             <p class="card-price">₱ 5000.00</p>
          <button class="btn-add-to-cart">Add to Cart</button>
      </div>
    </div>
  </div>

  
  <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/solitaire.jpg" class="card-img">
        <div class="card-info">
             <h5 class="card-name">Solitaire</h5>
             <p class="card-price">₱ 5000.00</p>
          <button class="btn-add-to-cart">Add to Cart</button>
      </div>
    </div>
  </div>



<h1 class="heading">Bracelet</h1>
<div class="container">
  <div class="row">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/coquette.jpg" class="card-img">
        <div class="card-info">
             <h5 class="card-name">Coquette</h5>
             <p class="card-price">₱ 5000.00</p>
          <button class="btn-add-to-cart">Add to Cart</button>
      </div>
    </div>
  </div>

<div class="col-md-4 py-3 py-md-0">
<div class="card">
<img src="./images/infinity.jpg" class="card-img">
<div class="card-info">
   <h5 class="card-name">Infinite</h5>
   <p class="card-price">₱ 1000.00</p>
<button class="btn-add-to-cart">Add to Cart</button>
</div>
</div>
</div>

<div class="col-md-4 py-3 py-md-0">
<div class="card">
<img src="./images/shinzo.jpg" class="card-img">
<div class="card-info">
   <h5 class="card-name">Heart</h5>
   <p class="card-price">₱ 3000.00</p>
<button class="btn-add-to-cart">Add to Cart</button>
</div>
</div>
</div>



      </div>
    </div>
 </section>
 
  
   



    </div>
   <script src="js/bootstrap.min.js"></script>
   <script>
    document.getElementById('btn').addEventListener('click', function() {
        document.getElementById('top-cards').scrollIntoView({ behavior: 'smooth' });
    });
</script>

 </body>
   
</html>

