<?php

@include 'connect.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

if(isset($_GET['update'])){
    $update_item = $_GET['update'];
    $update_query = mysqli_query($conn, "UPDATE `cart` SET Quantity = Quantity + 1  WHERE Id = $update_item");
    if ($update_query){           
    }
}

if(isset($_GET['update-minus'])){
    $update_item = $_GET['update-minus'];
    $update_query = mysqli_query($conn, "UPDATE `cart` SET Quantity = Quantity - 1  WHERE Id = $update_item");
    if ($update_query){           
    }
}

if(isset($_POST['action'])){
    $insert_item = $_POST['product_name'];
    $insert_price = $_POST['product_price'];
    $insert_image = $_POST['product_image'];
    $insert_quantity = 1;
    $update_query = mysqli_query($conn, "INSERT INTO `cart` VALUES  (0,'".$insert_item."',".$insert_price.",".$insert_quantity.",'".$insert_image."')");
    if ($update_query){           
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title> 
 
    <!-- slider -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->

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
             <a href="#gcartoffers">VIEW PRODUCTS</a>
            <a href="#gcartcoupons">GCART COUPONS</a>
            
        </nav>
        
        <div class="icon">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            
            <?php
            
            $select_row = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
            $row_count = mysqli_num_rows($select_row);

            ?>

            <div class="fas fa-shopping-cart" id="cart-btn"> <span><?php echo $row_count; ?></span> </div>
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

    <!-- HOME -->

    <section class="home" id="home">
        <div class="content">
            <h3>Look no further! We got everything for you.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi. Sed sed tempor lorem, vel congue mi. </p>
            <a href="#" class="btn">shop now</a>
        </div>

    </section>

    <!-- HOME END -->
  
    <!-- FEATURES -->

        <section class="features" id="FEATURES">
        <h1 class="heading">Choose your preferred service and store: </h1>

            <div class="b-container">
                <div class="box">
                    <img src="IMAGES/store.png" alt=""> 
                    <h3>In-store Pickup</h3>
                    <p>Pick-up at your favorite store </p>
                    <a href="#" class="btn">Explore</a>
                </div>

            <div class="b-container">
                <div class="box">
                    <img src="IMAGES/delivery.png" alt="">
                    <h3>Delivery</h3>
                    <p>Groceries delivered at your doorsteps </p>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>
            </div>
        
        </section>

    <!-- END OF FEATURES  -->

    <!-- CATEGORIES -->
     
    <section class="categories" id="categories">

        <h1 class="heading"> Product Categories </h1>
    
        <div class="b-container">
    
            <div class="box">
                <a href="baked_goods.php">
                    <img src="IMAGES/bake.png" alt="">
                </a>
                <h3>Baked Goods</h3>
               
            </div>
    
            <div class="box">
                <a href="beverages.php">
                    <img src="IMAGES/beverages.png" alt="">
                </a>
                <h3>Beverages</h3>
               
            </div>
    
            <div class="box">
                <a href="dairy.php">
                    <img src="IMAGES/dairy.png" alt="">
                </a>
                <h3>Dairy products</h3>
                
            </div>
    
            <div class="box">
                <a href="meat.php">
                    <img src="IMAGES/meat.png" alt="">
                </a>
                <h3>Fresh Meats</h3>
                
            </div>

            <div class="box">
                <a href="fruits.php">
                    <img src="IMAGES/fruits.png" alt="">
                </a>
                <h3>Fresh Fruits</h3>
                
            </div>
    
            <div class="box">
                <a href="vegetables.php">
                    <img src="IMAGEs/Vegetables.png" alt="">
                </a>
                <h3>Fresh Vegetables</h3>
               
            </div>

            <div class="box">
                <a href="can.php">
                    <img src="IMAGES/can.png" alt="">
                </a>
                <h3>Imported Canned Goods</h3>
               
            </div>

            <div class="box">
                <a href="frozen.php">
                    <img src="IMAGES/frozen.png" alt="">
                </a>
                <h3>Frozen Goods</h3>
               
            </div>
        </div>
    
    </section>
        
    <!-- END OF CATEGORIES -->

    <!-- RI -->
    <section class="products" id="gcartoffers">

<h1 class="heading">latest products</h1>

<div class="b-container">

    <?php

        $select_products = mysqli_query($conn, "SELECT * FROM `products`");
        if(mysqli_num_rows($select_products) > 0){
        while($fetch_product = mysqli_fetch_assoc($select_products)){
    
        ?>

        <form action="" method="post">
            <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']?>" height="100" width="200" alt="">
            <h3><?php echo $fetch_product['name']?></h3>
            <div class="price">$<?php echo $fetch_product['price']?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']?>">
            <input type="hidden" name="action" value="insert" />
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>

        </form>


        <?php
            };
            };
        ?>
</div>

</section>

                <!-- <section class="products" id="gcartoffers">

                    <h1 class="heading">latest products</h1>
                    
                    <div class="b-container">

                        <?php
                    
                            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                            if(mysqli_num_rows($select_products) > 0){
                            while($fetch_product = mysqli_fetch_assoc($select_products)){
                        
                            ?>

                            <form action="" method="post">
                                <div class="box">
                                <img src="uploaded_img/<?php echo $fetch_product['image']?>" height="100" width="200" alt="">
                                <h3><?php echo $fetch_product['name']?></h3>
                                <div class="price">$<?php echo $fetch_product['price']?>/-</div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']?>">
                                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                                </div>

                            </form>


                            <?php
                                };
                                };
                            ?>
                    </div>

                </section> -->

    <!-- END RI -->

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