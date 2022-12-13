<!DOCTYPE html>
<html>
<head>
<title>Enrollment System</title>

<?php include('header.php')?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/form.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	

	 <div class="form">
		<div class="cont">

			<?php include('cashtable.php')?>
		</div>

	</div> 
	<style>
		.form{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		body{
        background-image: url("./img/bg.jpg");
    }
		.cont{
			background-color: #ffffff;
			padding: 20px;
			border-radius: 20px;
		}
	</style>
	

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
					<li><a href="aboutus.php">About us</a></li>
                    <li><a href="aboutus.php">Help</a></li>
                    <li><a href="aboutus.php">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
					<li><a href="https://www.bing.com/maps?q=caloocan+city&FORM=HDRSC6">Sun and Moon, City of Caloocan, Manila</a></li>
						<li><a href="mailto:officeofthepresident@iscp.edu.ph">officeofthepresident@iscp.edu.ph</a></li>
						<li><a href="tel:919-7800">919-7800</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
					<a href="https://www.facebook.com/ISCPhilippines/"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.facebook.com/ISCPhilippines/"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="https://twitter.com/ISCP_Official"><i class='bx bxl-twitter' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p> </p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>