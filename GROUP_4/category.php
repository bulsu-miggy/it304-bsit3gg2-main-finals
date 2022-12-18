<?php

@include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="homepage_style.css">
</head>
<body>
    
    <?php include 'baked_goods.php';?>
    
    <section class="category">

   <h1 class="title">products categories</h1>

    <div class="box-container">

     <?php
        $category_name = $_GET['categoru'];
        $select_products = $conn->prepare("SELECT * FROM `products` WHERE category = ?");
        $select_products->execute([$category_name]);
            if($select_products->rowCount() > 0){
       }          while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ }
    ?>
        

    </div>


    </section>
</body>
</html>