<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title> 
 
    <!-- slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">

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
            <a href="#home">HOME</a>
             <a href="#categories">CATEGORIES</a>
             <a href="#gcartoffers">GCART OFFERS</a>
            <a href="#gcartcoupons">GCART COUPONS</a>
            
        </nav>
        
        <div class="icon">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <a href="COP.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
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
    </header>

    <!-- END -->





























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

     <!-- JAVA -->
     <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="homepage_java.js"></script>
</body>
</html>