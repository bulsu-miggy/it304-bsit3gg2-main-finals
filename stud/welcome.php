<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <?php include('header.php')?> 
</head>
<body>

<!--Navigation--->
<?php include('welcomenav.php')?>

<!--Home section--->
<?php include('welcomecontent.php')?>

<!-- Footer --->
<?php include('footer.php')?> 

</body>
</html>