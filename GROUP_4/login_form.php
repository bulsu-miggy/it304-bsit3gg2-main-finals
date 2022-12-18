<?php

@include 'connect.php';

session_start();

if(isset($_POST['submit'])){ 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        
        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:homepage.php');
        }
    }else{
        $error[] = 'incorrect email or password';
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login_registration.css">
</head>
<body>
    <div class="hero">
        <div class="form-container">
        <form action="" method="post">
            <img src="IMAGES/Glogo.png" alt="logo pic">
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="E-mail">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit" value="login" class="form-btn">
            <p>Don't have an account? <a href="registration_form.php">register now</a></p>
        </form>
        </div>
    </div>
</body>
</html>