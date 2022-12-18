<?php
include('db.php');

?>

<section class="home" id="home">
    <div class="home-text">
    <h1>ISCP AOE <br>Student<br> Login</h1>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
                <p>Don't have an account? <a href="register.php">Sign up now</a>
                 Not a student?<a href="logincashier.php">Click here for Admin Cashier </a>
                <a href="loginregistrar.php">Click here for Admin Registrar </a></p>
            </div>
            
        </form>
    </div>

    </div>

  
</section>




<section class="newsletter">
    <div class="news-text">
        <h2>Updates</h2>
        <h4>- Enrollment is now on-going! </h4>
    </div>

</section>


