<?php
include('db.php');

?>

<section class="home" id="home">
    <div class="home-text">
        
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p><br>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> 
       
    </p>
    

    </div>

    <div class="custom-shape-divider-bottom-1667999786">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" class="shape-fill"></path>
        </svg>
    </div>
</section>


<!-- updates -->
<section class="container" id="update"> 
<div class="box">
            <div class="requirements">
                <h4 class="updates">Updates</h4>
                <!-- <div class="location">
                    <h4>College</h4>
                </div> -->
            </div>
            <p style="font-weight: bold; text-align: center;">ISCP's Announcements:</p>
            <p style="font-weight: bold; margin: 1%;">Enrollment is ongoing</p>
            <p style="margin: 1% 1% 3% 1%;" >Kindly read the following:</p>
            <ul class="enrollment-requirements">
                <li>Enrollment Requirements</li>
                <li>Enrollment Procedures</li>
             
            </ul>
            <p><br></p>
            <!-- <p style="margin: 1%; font-weight: bold;">Payment Procedure:</p>
            <p style="margin: 1%;">Kindly Proceed to the Universities Cashier</p> -->
        </div>
</section>
<!--container--->
<section class="container" id="calendar">
    <div class="text">
        <h2 class ="calendars">ISCP's<br>Calendar</h2>
    </div>

    <div class="row-items">
        <div class="container-box">
            <div class="container-img">
                <img src="img/trip1.png">
            </div>
            <h4>December</h4>
            <p>Final Examinations</p>
        </div>

        <div class="container-box">
            <div class="container-img">
                <img src="img/trip2.png">
            </div>
            <h4>January</h4>
            <p>Enrollment for 2nd Semester</p>
        </div>

        <div class="container-box">
            <div class="container-img">
                <img src="img/trip3.png">
            </div>
            <h4>March</h4>
            <p>Midterm Examinations</p>
        </div>

        <div class="container-box">
            <div class="container-img">
                <img src="img/trip4.png">
            </div>
            <h4>June</h4>
            <p>Finals for 2nd semester</p>
        </div>
        
        
    </div>
    <div class="calendar">
        <a href="calendar.php" class="home-btn">Full Calendar</a>
    </div>

</section>

<!--Package section--->
<section class="package" id="package">

    <div class="title">
        <h2>Enrollment<br>Requirements</h2>
    </div>

    <div class="package-content">

        <div class="box">
            <div class="requirements">
                <h4>College</h4>
                <!-- <div class="location">
                    <h4>College</h4>
                </div> -->
            </div>
            <p style="font-weight: bold; text-align: center;">Requirements</p>
            <p style="font-weight: bold; margin: 1%;">Enrollment Procedure:</p>
            <p style="margin: 1% 1% 3% 1%;" >Kindly submit the following requirements at the University drop point (Main Gate):</p>
            <ul class="enrollment-requirements">
                <li>Photocopy of Birth Certificate</li>
                <li>Certificate of Good Moral</li>
                <li>Copy of Grades</li>
                <li>Two (2) Pieces of 2X2 Picture</li>
                <li>Letter of Application</li>
            </ul>
            <p><br></p>
            <!-- <p style="margin: 1%; font-weight: bold;">Payment Procedure:</p>
            <p style="margin: 1%;">Kindly Proceed to the Universities Cashier</p> -->
        </div>
        <div class="box">
            <div class="requirements">
                <h4>Senior High School</h4>
                <!-- <div class="location">
                    <h4>Senior High School</h4>
                </div> -->
            </div>
            <p style="font-weight: bold; text-align: center;">Requirements</p>
            <p style="font-weight: bold; margin: 1%;">Enrollment Procedure:</p>
            <p style="margin: 1% 1% 3% 1%;">Kindly submit the following requirements at the University drop point (Main Gate):</p>
            <ul class="enrollment-requirements">
                <li>Photocopy of Birth Certificate</li>
                <li>Certificate of Good Moral</li>
                <li>Copy of Grades</li>
                <li>Two (2) Pieces of 2X2 Picture</li>
                <li>Letter of Application</li>
            </ul>
            <p><br></p>
        </div>
    </div>
</section>
<section class="package" id="package">
        <div class="title">
            <h2>Payment<br>Procedures</h2>
        </div>
    <div class="package-content">
        <div class="box">
        <div class="requirements">
            <!-- <h4>Payment Procedure</h4>
            <div class="location">
                <h4>College</h4>
            </div>  -->
        </div>
        <p style="font-weight: bold; margin: 1% 1% 3% 1%;"> FOR BOTH COLLEGE AND SENIOR HIGH SCHOOL</p>
        <p style="margin: 1%;">Kindly proceed to the universities cashier</p>
        <p><br></p>
        </div>
    </div>
</section>

<!-- register Modal -->

<?php include('modal.php')?>


<!-- Delete Modal -->
<?php

$get_data = "SELECT * FROM enrollees";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
<div class='modal-dialog'>

<!-- Modal content-->
<div class='modal-content'>
	<div class='modal-header'>
	<button type='button' class='close' data-dismiss='modal'>&times;</button>
	<h4 class='modal-title text-center'>Are you want to sure??</h4>
	</div>
	<div class='modal-body'>
	<a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
	</div>
	
</div>

</div>
</div>


	";
	
}


?>