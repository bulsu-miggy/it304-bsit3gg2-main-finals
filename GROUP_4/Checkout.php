<?php 

    @include 'config.php';

    $select_items = mysqli_query($conn, "SELECT * FROM `user_form`");
        if(mysqli_num_rows($select_items) > 0){
            $fetch_item = mysqli_fetch_assoc($select_items);
        };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Logo and Title -->
    <link rel="icon" href="images/Glogo.png" type="image/icon type">
    
    <title> GCart Galore | Check Out </title>
 
    <!-- slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="CheckoutStyle.css">
</head>
<body>

    <!-- HEADER -->
   
    <header class="header">
    <div class="logo">
        <a href="index.html">
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


    <!-- SHIPPING OPTION -->

    <div class="shipOption" >

        <p class="heading" style="text-align: left;"> Check Out </p>
        <p class="sub-heading" style="text-align: left;"> 
            <i class="fa-solid fa-truck-fast"></i>
            Shipping Option 
        </p>
        <hr>

        <style>
            @media print{
                body * {
                    visibility: hidden;
                }

                .print-container, .print-container * {
                    visibility: visible;
                }
            }
        </style>

        <section class="ShippingOpt">

            <div class="Options">

                <!-- In-Store Pickup Option -->

                <div id="pickUp">

                    <p id="togglePU">In-Store Pickup  <i class="fa-solid fa-shop"></i></p>

                </div>

                <!-- In-Store Pickup Option END -->

                <!-- Delivery Option -->

                <div class="DM" id="delivery">

                    <p id="toggleD"> Delivery  <i class="fa-solid fa-truck-fast"></i></p>

                </div> 
                
                <!-- Delivery Option END -->
            </div>

            <!-- HIDDEN DIV for when pickup is selected -->
            
            <div class="PUInfo print-container" id="PUInfo">

                <?php 
                
                    $select_items = mysqli_query($conn, "SELECT * FROM `user_form`");
                    if(mysqli_num_rows($select_items) > 0){
                        $fetch_item = mysqli_fetch_assoc($select_items);
                        if ($fetch_item["user_type"] == 'User'){
                            $name = $fetch_item["name"];
                            $phone_number = $fetch_item["number"];
                            $store_add = $fetch_item["store_address"];
                            $store_num = $fetch_item["store_number"];
                        }

                    
                ?>

                <!-- Pick Up Address -->

                <div class="PUAddress">

                    <p><i class="fa-solid fa-location-dot"></i>&nbsp; &nbsp; Pickup Address</p>
                    <p style="font-size: small; margin-top: 5px;">Quezon City, Metro Manila</p>
                    <p style="font-size: small; margin-top: 5px;">+(63) 912 345 6788</p>

                </div>

                <!-- Pick Up Person -->

                <div class="PUCustomerInfo">

                    <p><i class="fa-solid fa-person-walking"></i>&nbsp; &nbsp; Pickup Person</p>
                    <p><input class="name" type="text" value="<?php echo $fetch_item["name"]; ?> "></p>
                    <p><input class="number" type="text" value="<?php echo $fetch_item["number"]; ?> "></p>

                </div>

                <!-- Pick Up Date and Time -->

                <div class="PUDandT">

                    <p><i class="fa-solid fa-calendar-day"></i>&nbsp; &nbsp; Pickup Date and Time</p>
                    <p style="font-size: small; margin-top: 5px;"> Monday - Friday </p>
                    <p style="font-size: small; margin-top: 5px;"> 9:00 am - 8:00 pm </p>

                </div>

                <?php
                    };
                ?>

            </div>


            <!-- HIDDEN DIV for when delivery is selected -->

            <div class="DInfo" id="DInfo">
                <?php 
                
                    $select_items = mysqli_query($conn, "SELECT * FROM `user_form`");
                    if(mysqli_num_rows($select_items) > 0){
                        $fetch_item = mysqli_fetch_assoc($select_items);
                        if ($fetch_item["user_type"] == 'User'){
                            $address  = $fetch_item["address"];
                            $emailadd = $fetch_item["email"];
                            $name = $fetch_item["name"];
                            $phone_number = $fetch_item["number"];
                        }

                    
                ?>

                <!-- Delivery Address -->

                <div class="DAddress">

                    <p><i class="fa-solid fa-location-dot"></i>&nbsp; &nbsp; Delivery Address</p>
                    <p><input class="name" type="text" value="<?php echo $fetch_item["address"]; ?> "></p>
                    <p><input class="email" type="text" value="<?php echo $fetch_item["email"]; ?> "></p>
                    <p><input class="number" type="text" value="<?php echo $fetch_item["number"]; ?> "></p>

                </div>

                <!-- Delivery Date and Time -->

                <div class="DDandT">

                    <p><i class="fa-solid fa-calendar-day"></i>&nbsp; &nbsp; Delivery Date and Time</p>

                    <p id="delivery-date" style="font-size: small; margin-top: 10px;"> </p>
                    <p id="delivery-time" style="font-size: small; margin-top: 5px;"> </p>

                </div>

                <?php
                    };
                ?>

            </div>

            <!-- Hidden divs's JS and Date & Time JS -->

            <script>

                const targetDivPU = document.getElementById("PUInfo");
                const p = document.getElementById("togglePU");
                    p.onclick = function () {
                    if (targetDivPU.style.display == "none") {
                        targetDivPU.style.display = "flex";
                    } else {
                        targetDivPU.style.display = "none";
                    }
                };

                const targetDivD = document.getElementById("DInfo");
                const de = document.getElementById("toggleD");
                    de.onclick = function () {
                    if (targetDivD.style.display == "none") {
                        targetDivD.style.display = "flex";
                    } else {
                        targetDivD.style.display = "none";
                    }
                };

                // Get Todays date
                    $date = new Date();

                // Set the number of days to be added
                    $numberOfDays = 5;

                // Add this to the current date
                    $date.setDate($date.getDate() + $numberOfDays);

                // Optional: Pretty print the date
                    function formatDate($date) {
                    var d = new Date($date),
                        month = '' + (d.getMonth() + 1),
                        day = '' + d.getDate(),
                        year = d.getFullYear()
                        hours = d.getHours();
                        minutes = d.getMinutes();

                    if (month.length < 2) month = '0' + month;
                    if (day.length < 2) day = '0' + day;

                    // Check whether AM or PM
                        var newformat = hours >= 12 ? 'PM' : 'AM'; 
                
                    // Find current hour in AM-PM Format
                        hours = hours % 12; 
            
                    // To display "0" as "12"
                        hours = hours ? hours : 12; 
                        minutes = minutes < 10 ? '0' + minutes : minutes;

                        time = hours + ':' + minutes + ' ' + newformat;

                    return [year, month, day].join('-');
                    }
                    $date = formatDate($date);

                    // Display the delivery date
                        document.getElementById("delivery-date").innerHTML = $date;
                        document.getElementById("delivery-time").innerHTML = time;
            </script>
            
        </section>

        <p class="storeName print-container" ><i class="fa-solid fa-store"></i>&nbsp; &nbsp; GCart Galore</p>

    </div>

    <!-- SHIPPING OPTION END -->


    <!-- CHECK OUT ITEMS -->

    <div class="container print-container">

        <section class="checkout-form">

            <table>

                <thead>

                    <th>Image</th>
                    <th>Item Description</th>
                    <th>QTY</th>
                    <th>Unit Price</th>
                    <th>Price</th>

                </thead>

                <tbody>

                    <?php 

                        $select_items = mysqli_query($conn, "SELECT * FROM `cart`");
                        $sub_total = 0;
                        if(mysqli_num_rows($select_items) > 0){
                        while($fetch_item = mysqli_fetch_assoc($select_items)){
                            $sub_total_price = $fetch_item['price'] * $fetch_item['quantity'];
                            ;

                    ?>

                    <tr>
                        <td><img src="IMAGES/<?php echo $fetch_item['image']; ?>" height="100" ></td>
                        <td><?php echo $fetch_item['name']; ?></td>
                        <td><?php echo $fetch_item['quantity']; ?></td>
                        <td>$ <?php echo $fetch_item['price']; ?></td>
                        <td>$ <?php echo $sub_total_price; ?></td>
                    </tr>

                    <?php
                            }; 
                        };
                    ?>

                </tbody>

            </table>

            <!-- Discount Coupon -->

            <div class="couponCon">
                <div class="coupon">
                    <label for="selCoupon"><i class="fa-solid fa-tags"></i> &nbsp;Available Coupons: </label>
                    <select name="selCoupon" id="selCoupon">
                        <option value="0">--Choose Coupon--</option>
                        <option value="0.15"> Coupon 15% Off </option>
                        <option value="0.25"> Coupon 25% Off </option>
                        <option value="0.45"> Coupon 45% Off </option>
                    </select>
                    <button onclick="getOption()"> Apply </button>
                </div>
            </div>

            <div class="messsage">
                <div class="msgBox">
                    <input type="text" value=" Message: " size="100">
                </div>
            </div>
            <hr>

            <div class="totalLine">

                <?php 

                    $select_items = mysqli_query($conn, "SELECT * FROM `cart`");
                    $sub_total = 0;
                    if(mysqli_num_rows($select_items) > 0){
                        while($fetch_item = mysqli_fetch_assoc($select_items)){
                            $sub_total_price = $fetch_item['price'] * $fetch_item['quantity'];
                            $sub_total += $sub_total_price;
                            $tax = $sub_total * 0.05;
                            $fee = 10;
                            $grand_total = $sub_total + $tax + $fee;
                            
                        };
                    
                ?>

                <div class="tl">
                    <p>Order Totals ( <span> <?php echo $row_count;?> </span> Items) :  </p>
                </div>
                <div class="t_l"><p><span class="total"> $ <?php echo round($grand_total , 2);?> </span></p></div>
                <?php 
                    };
                ?>
            </div>

            <div class="PO">

                <p class="POLine"><i class="fa-solid fa-cash-register"></i>&nbsp; &nbsp;Payment Options</p>

                <div class="PaymentOpts">

                    <div class="COD">
                        <p><i class="fa-solid fa-money-bills"></i>&nbsp; &nbsp;Cash on Delivery</p>
                    </div>

                    <div class="e-wallet">
                        <p><i class="fa-brands fa-cc-paypal"></i>&nbsp; &nbsp; Payment Center / E-Wallet</p>
                    </div>

                    <div class="Credit-Card">
                        <p><i class="fa-regular fa-credit-card"></i>&nbsp; &nbsp; Credit / Debit Card</p>
                    </div>

                </div>

            </div>

            <div class="PD">

                <p class="PDLine"><i class="fa-solid fa-file-invoice"></i>&nbsp; &nbsp;Payment Details</p>

                <div class="PaymentDets">

                    <div class="totalCon">

                        <?php 

                        $select_items = mysqli_query($conn, "SELECT * FROM `cart`");
                        $sub_total = 0;
                        if(mysqli_num_rows($select_items) > 0){
                            while($fetch_item = mysqli_fetch_assoc($select_items)){
                                $sub_total_price = $fetch_item['price'] * $fetch_item['quantity'];
                                $sub_total += $sub_total_price;
                                $tax = $sub_total * 0.05;
                                $fee = 10;
                                $grand_total = $sub_total + $tax + $fee;
                                        
                            };
                                
                        ?>

                        <div class="total-sec" >
                            <div class="tsDets">
                                <p> <span> Discount: </span>   </p>
                                <p> <span> Subtotal: </span> </p>
                                <p> <span> Tax (5%): </span> </p>
                                <p> <span> Shipping fee: </span>   </p>
                                <p style="font-weight: bold;"> <span> Total: </span>   </p>
                            </div>

                            <div class="tsTotal">
                                <p><span class="disc" > &nbsp; $ </span></p>
                                <p><span> &nbsp; $ </span> <span class="subTotal"><?php echo $sub_total; ?></span></p>
                                <p><span> &nbsp; $ </span>  <span class="tax"><?php echo round($tax,2); ?></span></p>
                                <p><span> &nbsp; $ <?php echo $fee; ?> </span></p>
                                <p style="font-weight: bold;"><span> &nbsp; $ </span><span class="totalP"> <?php echo round($grand_total,2); ?> </span></p>
                            </div>
                            
                        </div>

                        <?php 
                                    
                            };
                        ?>

                    </div>

                    <script type="text/javascript" >

                        function getOption() {
                            selectElement = document.querySelector('#selCoupon');
                            output = selectElement.value;
                            coupDisc = (<?php echo $sub_total; ?> * output);
                            coup_Disc = coupDisc.toFixed(2);
                            checkSub = (<?php echo $sub_total; ?> - coup_Disc);
                            tax = (checkSub * 0.05);
                            t_ax = tax.toFixed(2);
                            total = checkSub + tax + 10;
                            total = total.toFixed(2);
                            document.querySelector('.disc').textContent = "-$ " +  coup_Disc;
                            document.querySelector('.subTotal').textContent = checkSub;
                            document.querySelector('.tax').textContent = t_ax;
                            document.querySelector('.totalP').textContent = total;
                            document.querySelector('.total').textContent = " $ " +total;

                        }


                    </script>

                </div>

            </div>
            
        </section>

        <div class="PlaceOrder">
            <div class="PlaceOrd">
                <button type="button" onclick="window.print();" ><a href="#"><p class="OrdLine"> Place Order</p></a></button>
            </div>
        </div>

    </div>

    <!-- CHECK OUT END -->

    <!-- HTML FORM Receipt Print -->

    
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
    
    <script src="homepage_java.js"></script>
</body>
</html>
