<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baked goods</title>

     <!-- fontawesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="homepage_style.css">

</head>
<body>
    <!-- HEADER -->
   
    <header class="header">
    <div class="logo">
        <a href="homepage.php">
            <img src="IMAGES\logo.png" width="140" height="60" >
        </a>
    </div>
        
        <nav class="navbar">
        <a href="homepage.php">HOME</a>
             <a href="homepage.php">CATEGORIES</a>
             <a href="homepage.php">VIEW PRODUCTS</a>
            <a href="#gcartcoupons">GCART COUPONS</a>
            
        </nav>
        
        <div class="icon">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="user-btn"></div>
            <div class="fa-solid fa-right-to-bracket" id="logout-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    
        <form action="" class="Log-out-form">
            <h3>Are you sure you want to Log-out?</h3>
            <br>
            <a href="logout.php" class="btn">Log out</a>
        </form>

        <form action="" class="cart-form">
            <h3>Proceed to your cart</h3>
            <br>
            <a href="COP.php" class="btn">Proceed</a>
        </form>

        <form action="" class="user-form">
            <h3>User settings</h3>
            <br>
            <a href="" class="btn">Proceed</a>
        </form>

    </header>
    <!-- END -->

    <section class="bake" id="1">
        
        <h1 class="heading">Imported Canned Goods</h1>

        <div class="b-container">
            <div class="box">
            <img src="IMAGES/cava.jpg" height="100" width="200"alt="">
                <h3>Cava</h3>
                <div class="price"> $1.78/-</div>
                <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
            </div>

            <div class="box">
            <img src="IMAGES/heinz.jpg" height="100" width="200"alt="">
                <h3>Heinz Pork And Beans</h3>
                <div class="price"> $2.70/-</div>
                <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
            </div>

            <div class="box">
            <img src="IMAGES/kimchi.jpg" height="100" width="200"alt="">
                <h3>Kimchi (@500g)</h3>
                <div class="price"> $4.07/-</div>
                <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
            </div>

            <div class="box">
            <img src="IMAGES/spam.jpg" height="100" width="200"alt="">
                <h3>SPAM</h3>
                <div class="price"> $2.88/-</div>
                <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
            </div>

            <div class="box">
            <img src="IMAGES/vienna sausage.jpg" height="100" width="200"alt="">
                <h3>Vienna Sausage</h3>
                <div class="price"> $1.26/- </div>
                <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
            </div>

        </div>
        
      
    </section>

      <!-- FOOTER -->

      <section class="footer">

<div class="b-container">
    <div class="box">
        <h3>Corporate Policy</h3>
        <p>About Us</p>
        <p>Services</p>
        <p>Help & Support</p>
        <p>Contuct Us</p>
    </div>

    <div class="box">
        <h3>Policy</h3>
        <p>Privacy and Cookie Policy</p>
        <p>Terms and Condition</p>
        <p>Return Policy</p>
    </div>

    <div class="box">
        <h3>Social Media Platforms</h3>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <h3>Contact Information</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +000-000-0000 </a>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-0000 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> sample@sample.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> China, Shanghai - 400104 </a>
    </div>

    <div class="box">
        <h3>Links</h3>
        <a href="#" class="links"> <i class="fa-solid fa-arrow-up-right-from-square"></i> home </a> 
        <a href="#" class="links"> <i class="fa-solid fa-arrow-up-right-from-square"></i> categories </a>
        <a href="#" class="links"> <i class="fa-solid fa-arrow-up-right-from-square"></i> Gcart offers </a>
        <a href="#" class="links"> <i class="fa-solid fa-arrow-up-right-from-square"></i> Gcart coupons </a>
    
    </div>

    <div class="box">
        <h3>Payment Method</h3>
        <img src="IMAGES/payment.png" alt="payment">
    </div>

</div>

<div class="credit"> Copyright @ <a href="homepage.php"><span> GCART GALORE </span></a> | all rights reserved 2022</div>


</section>
<!-- END OF FOOTER -->


    <script src="homepage_java.js"></script>
</body>
</html>