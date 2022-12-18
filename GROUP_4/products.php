<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php 

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" 
      onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'admin_header.php'; ?>

<div class="container">

<section class="products">

    <h1 class="heading">latest products</h1>

    <div class="box-container">

        <?php
        
        $select_products = mysqli_query($conn, "SELECT * FROM `products`");
        if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
        ?>

        <form action="" method="post">
            <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image'];?>"height="100" width="200" alt="">
            <h3><?php echo $fetch_product['name'];?></h3>
            <div class="price">$<?php echo $fetch_product['price'];?>/-</div>
            </div>
        </form>

        <?php
            };
        };
        ?>

    </div>

</section>

</div>

<script src="js/script.js"></script>
    
</body>
</html>