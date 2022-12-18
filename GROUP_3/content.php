<?php
include('db.php');

?>

<section class="home" id="home">
    <div class="home-text">
        <h1>International State<br> <span>College of the Philippines Accessible Online Enrollment</span></h1>
        <p>Student Enrollment System <br>Home Page</p>
   

        <!-- <a href="registration.html" class="home-btn">Enroll Now</a> -->
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
  		<i class="fa fa-plus"></i>Enroll Now!
  	</button>

    </div>

</section>

<!--container--->
<section class="container">
    <div class="text">
        <h2>ISCP's<br>Calendar</h2>
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

<section class="newsletter">
    <div class="news-text">
        <h2>Updates</h2>
    </div>

    <div class="send">
        <form>
            <input type="email" placeholder="Write Your Email" required>
            <input type="submit" value="Submit">
        </form>
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