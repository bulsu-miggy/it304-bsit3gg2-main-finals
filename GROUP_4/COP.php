<?php

    @include 'config.php';

    if(isset($_GET['delete'])){
        $delete_item = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM `cart` WHERE Id = $delete_item");
        if ($delete_query){           
        }
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

    <!-- HTML Logo and Title -->
    <link rel="icon" href="images/Glogo.png" type="image/icon type">
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
             <a href="homepage.php">HOME</a>
             <a href="homepage.php">CATEGORIES</a>
             <a href="homepage.php">VIEW PRODUCTS</a>
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
                
                $select_items = mysqli_query($conn, "SELECT * FROM `cart`");
                
                if(mysqli_num_rows($select_items) > 0){
                    while($fetch_item = mysqli_fetch_assoc($select_items)){
                ?>
    
                <div class="itemsbox">
                    <img src="IMAGES/<?php echo $fetch_item['image']; ?>" height="150" width="200" alt="no image">
                    <div class="contentdesc">
                        <p class="description"><?php echo $fetch_item['name']; ?></p>
                        <p class="price"> $ <?php echo $fetch_item['price']; ?></p>
                        <p class="unit"> Quantity: 
                            <button type="button" name="update-items" id="plus">
                                <a href="COP.php?update=<?php echo $fetch_item['id']; ?>"><i class="fa-solid fa-plus"></i></a>
                            </button>
                            <input type="hidden" name="quantity-id" value="<?php echo $fetch_item['id']; ?>">
                            <input name="quantity" type="number" min="1" value="<?php echo $fetch_item['quantity']; ?>" id="input"> 
                            <button type="button" name="update-items" id="minus">
                                <a href="COP.php?update-minus=<?php echo $fetch_item['id']; ?>"><i class="fa-solid fa-minus"></i></a>
                            </button>
                        </p>
                        
                        <button class="btn-area" type="button">     
                            <i class="fa fa-trash"></i>
                            <a href="COP.php?delete=<?php echo $fetch_item['id']; ?>" class="rbtn" style="color: #fff;" 
                            onclick="return confirm('Are you sure you want to delete this item?');" > &nbsp;Remove</a>
                        </button>

                        <input type="hidden" name="product_name" value="<?php echo $fetch_item['name']; ?>" >
                        <input type="hidden" name="product_price" value="<?php echo $fetch_item['price']; ?>" >
                        <input type="hidden" class="product_quantity" value="<?php echo $fetch_item['quantity']; ?>" >
                        <input type="hidden" name="product_image" value="<?php echo $fetch_item['image']; ?>" >
                    </div>
                </div>
                
                <?php
                    };
                }; 
                ?>
            </div>
            

            <!-- Subtotal Section -->

            <div class="right-bar">

                <?php
                
                $select_items = mysqli_query($conn, "SELECT * FROM `cart`");
                $sub_total = 0;
                if(mysqli_num_rows($select_items) > 0){
                    while($fetch_item = mysqli_fetch_assoc($select_items)){
                        $sub_total_price = $fetch_item['price'] * $fetch_item['quantity'];
                        $sub_total += $sub_total_price;
                        $tax = $sub_total * 0.05;
                        $fee = 15;
                        $grand_total = $sub_total + $tax + $fee;
                    };
                    
                ?>
     
                <p><span> Subtotal </span> <span class="Subtotal-price"> $ <?php echo $sub_total; ?></span></p>
                <hr>
                <p><span> Tax (5%) </span> <span class="Tax"> $ <?php echo $tax; ?> </span></p>
                <hr>
                <p><span> Shipping fee </span> <span class="Shipping-fee"> $ <?php echo $fee; ?> </span></p>
                <hr>
                <p style="font-weight: bold;"><span > Total </span> <span class="Total-price"> $ <?php echo $grand_total; ?> </span></p>

                <a href="Checkout.php" name="check_Out" ><i class="fa fa-shopping-cart fa-xl"></i> Check Out </a>

                <?php 
                };
                ?>
            </div>

            <!-- End Subtotal Section -->

        </div>

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
        
        <div class="credit"> Copyright @ <a href="index.html"><span> GCART GALORE </span></a> | all rights reserved 2022</div>


    </section>
    <!-- END OF FOOTER -->







    <!-- JAVA -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="homepage_java.js" async></script>
</body>
</html>