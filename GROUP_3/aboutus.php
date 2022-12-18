<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('header.php')
    ?>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./About BulSU _ International State College by the Philippines_files/bootstrap-paper.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ International State College by the Philippines_files/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./About BulSU _ International State College by the Philippines_files/header.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ International State College by the Philippines_files/links.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ International State College by the Philippines_files/main.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ International State College by the Philippines_files/about.css">
</head>
<style>
    /* .main-content{
        height: 100vh;
        width: 100%;
        background-color: beige;
       display: grid;

    } */
    .box {
        position: relative;
        background-color: aliceblue;
        height: fit-content;
        width: 125%;
        border-radius: 20px;
        margin: 10px;
    }

    
    body{
        background-image: url("./img/bg.jpg");
    }
</style>

<body>
    <?php
    include('nav.php')
    ?>


    <?php
    include('db.php');

    ?>

    <!--Package section--->
    <section class="package" id="package">
        <div class="title">
            <h2>About Us</h2>
        </div>
        <div class="package-content">
            <div class="box">
                <div class="requirements">
                    <!-- <h4>Payment Procedure</h4>
            <div class="location">
                <h4>College</h4>
            </div>  -->
                </div>
                <div class="page-contents">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="text-justify" id="bulsu-about">
                                    <p><b>International State College by the Philippines (ISCP)</b> is the premiere state-operated institution of higher learning in the Cenral Luzon region. It originated as a secondary school run by the Americans in 1904, and has now progressed into one of the biggest educational institutions in Region III. <b>ISCP</b> was converted from a college into a University in 1993 by virtue of Republic Act 7665. Since then, <b>ISCP</b> has grown by leaps and bounds, in terms of program offerings, faculty qualification, and student enrolment. It is the vision of the University to be a knowledge-generating institution globally recognized for excellent instruction, pioneering research, and responsive community engagement. The University has also maintained the existence of four external campuses within the province namely Meneses Campus, Hagonoy Campus, Sarmiento Campus, and Bustos Campus</p>
                                    <p>The University has been consistently producing highly professional, ethical, and service-oriented individuals who perform well in board examinations with impressive results consistently exceeding the National Passing Rate and become potent driving force in the industries in the region and beyond. <b>ISCP</b> has recently received its <b>ISO 9001:2015 Certification</b>, passed the Level II Institutional Accreditation while 50 academic programs of the different Colleges are already accredited by the Accrediting Agency of Chartered Colleges and Universities (AACCUP), Inc. This was made possible through the persistent hardwork and resolute service of its <b>1,138 faculty members and 476 non-teaching personnel</b> who relentlessly cater and furnish the needs of our <b>35,958 students.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-contents">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h3 class="text-strong text-red">Vision and Mission</h3>
                                <hr>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-lg-6">
                                <h4 class="text-strong text-red">Vision</h4>
                                <p class="text-justify">
                                    International State College by the Philippines is a progressive knowledge-generating institution globally recognized for excellent instruction, pioneering research, and responsive community engagements </p>
                            </div>


                            <div class="col-md-6 col-lg-6">
                                <h4 class="text-strong text-red">Mission</h4>
                                <p class="text-justify">
                                    International State College by the Philippines exists to produce highly competent, ethical and service-oriented professionals that contribute to the sustainable socio-economic growth and development of the nation </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p><br></p>
            </div>
        </div>
    </section>

    <!-- <section class="newsletter">
        <div class="news-text">
            <h2>Updates</h2>
        </div>

        <div class="send">
            <form>
                <input type="email" placeholder="Write Your Email" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section> -->


    <!-- register Modal -->

    <?php include('modal.php') ?>


    <!-- Delete Modal -->
    <?php

    $get_data = "SELECT * FROM enrollees";
    $run_data = mysqli_query($con, $get_data);

    while ($row = mysqli_fetch_array($run_data)) {
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

    <?php
    include('footer.php')
    ?>

</body>

</html>