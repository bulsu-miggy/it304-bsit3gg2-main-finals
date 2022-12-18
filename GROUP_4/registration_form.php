<?php

@include 'connect.php';

if(isset($_POST['submit'])){ 
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);
    $cpass = ($_POST['cpassword']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $tel = ($_POST['telephone']);
    $user_type = $_POST['user_type'];
    

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist!';
    }else{
        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO user_form(name, email, password, address, number, user_type) 
            VALUES('$name','$email','$pass','$address','$tel','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
            <input type="text" name="name" required placeholder="Name">
            <input type="email" name="email" required placeholder="E-mail">
            <input type="password" name="password" required placeholder="Password">
            <input type="password" name="cpassword" required placeholder="Confirm Password">
            <input type="text" name="address" required placeholder="Address">
            <input type="tel" name="telephone" required placeholder="Phone Number">
            <select name="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="login_form.php">login now</a></p>
        </form>
        </div>
    </div>
</body>
</html>