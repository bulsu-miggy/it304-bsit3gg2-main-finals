<?php

    @include 'COPconfig.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Logo and Title -->
    <link rel="icon" href="IMAGES/Glogo.png" type="image/icon type">
    <title>GCart Galore | Shopping Cart</title>
 
    <!-- slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="COPstyle.css">
    

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

            <?php
            
            $select_row = mysqli_query($connect, "SELECT * FROM `cartitems`") or die('query failed');
            $row_count = mysqli_num_rows($select_row);

            ?>

            <div class="fas fa-shopping-cart" id="cart-btn"> <span><?php echo $row_count; ?></span> </div>
            <a href="user.php"><div class="fas fa-user" id="user-btn"></div></a>
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

    <!--  -->

    <section class="home" id="home">
    </section>

    <!--  -->

    <!-- CART -->
    <section class="products" id="gcartoffers">

        <p class="heading" style="text-align: left;"> Shopping Cart </p>

        <div class="process">

            <div class="items">

                <?php
                
                $select_items = mysqli_query($connect, "SELECT * FROM `cartitems`");
                if(mysqli_num_rows($select_items) > 0){
                    while($fetch_item = mysqli_fetch_assoc($select_items)){
                ?>
    
                <div class="itemsbox">
                    <img src="IMAGES/<?php echo $fetch_item['Image']; ?>" alt="">
                    <div class="contentdesc">
                        <p class="description"><?php echo $fetch_item['ItemName']; ?></p>
                        <p class="price"> $ <?php echo $fetch_item['Price']; ?></p>
                        <p class="unit"> Quantity: <input class="quantity-input" type="number" value="1"></p>
                        


                        <button class="btn-area" type="button">     
                            <i class="fa fa-trash"></i>
                            <a class="rbtn" style="color: #fff;"> &nbsp;Remove</a>
                        </button>

                        <input type="hidden" name="product_name" value="<?php echo $fetch_item['ItemName']; ?>" >
                        <input type="hidden" name="product_price" value="<?php echo $fetch_item['Price']; ?>" >
                        <input type="hidden" name="product_image" value="<?php echo $fetch_item['Image']; ?>" >
                    </div>
                </div>
                
                <?php
                    };
                }; 
                ?>
            </div>
            

            <!-- Check Out Section -->

            <div class="right-bar">

               
                <p><span> Subtotal </span> <span class="Subtotal-price"> $ 120 </span></p>
                <hr>
                <p><span> Tax (5%) </span> <span class="Tax"> $ 6 </span></p>
                <hr>
                <p><span> Shipping fee </span> <span class="Shipping-fee"> $ 15 </span></p>
                <hr>
                <p style="font-weight: bold;"><span > Total </span> <span class="Total-price"> $ 141 </span></p>

                <a href="#" name="check_Out" ><i class="fa fa-shopping-cart fa-xl"></i> Check Out </a>
                
            </div>

        </div>

        <!-- RI -->

        <p class="heading"> Recommendations </p>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="IMAGES/Fries.png" alt="">
                    <h3>Frozen Fries (1kg)</h3>
                    <div class="price"> $1.77</div>
                    <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
                </div>


                <div class="swiper-slide box">
                    <img src="IMAGES/soju.png" alt="">
                    <h3>Soju</h3>
                    <div class="price"> $1.95</div>
                    <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="IMAGES/nut waffle.png" alt="">
                    <h3>Nutella Waffle (per box)</h3>
                    <div class="price"> $3.1</div>
                    <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="IMAGES/lemon.png" alt="">
                    <h3>Fresh Lemons (per piece)</h3>
                    <div class="price"> $0.35</div>
                    <a href="#" class="btn"><i class="fa-sharp fa-solid fa-cart-plus"></i>&emsp;add to cart</a>
                </div>

            </div>

        </div>

        <!-- END of RI -->
    </section>

    <!-- END CART -->

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

    <script src="COPjs.js" async></script>
</body>
</html>