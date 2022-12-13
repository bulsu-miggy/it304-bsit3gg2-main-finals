<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('header.php')
    ?>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./About BulSU _ Bulacan State University_files/bootstrap-paper.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ Bulacan State University_files/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./About BulSU _ Bulacan State University_files/header.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ Bulacan State University_files/links.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ Bulacan State University_files/main.css">
    <link rel="stylesheet" type="text/css" href="./About BulSU _ Bulacan State University_files/about.css">
    <script type="text/javascript" src="js/script.js"></script>
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
        width: 100%;
        border-radius: 20px;
        margin: 10px;
        padding: 10%;
    }

    body{
        background-image: url("./img/bg.jpg");
        background-attachment: fixed;
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
            <h2>School Calendar</h2>
        </div>
        <div class="package-content">
            <div class="box"> 
                <div class="col-md-9 col-lg-9">
                    <table class="table table-responsive table-hover" id="events-tbl">
                        <tbody>
                            <tr>
                                <td class="event-month">August</td>
                                <td class="event-day">1 to 7</td>
                                <td class="event-title">Enrollment Period for New Students</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">8 to 14</td>
                                <td class="event-title">Enrollment Period for Old Student Without Mid-Year Classes</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">15 to 21</td>
                                <td class="event-title">Enrollment Period for Old Regular/Irregular Students With Mid-Year Classes</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">15</td>
                                <td class="event-title">Bulacan Day</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">21</td>
                                <td class="event-title">Ninoy Aquino's Day</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">22</td>
                                <td class="event-title">Start of Classes (1st Semester A.Y. 2022 - 2023)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">24 to 26</td>
                                <td class="event-title">Adding / Changing / Dropping of Subjects</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">29</td>
                                <td class="event-title">National Heroes Day</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">30</td>
                                <td class="event-title">Marcelo H. Del Pilar Day</td>
                            </tr>
                            <tr>
                                <td class="event-month">September</td>
                                <td class="event-day">15</td>
                                <td class="event-title">Malolos Congress</td>
                            </tr>
                            <tr>
                                <td class="event-month">October</td>
                                <td class="event-day">17</td>
                                <td class="event-title">Application for Admission (College Level)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">17 to 22</td>
                                <td class="event-title">Mid-Term Examination (College)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">24 to 26</td>
                                <td class="event-title">Health Break</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">26</td>
                                <td class="event-title">BulSU Faculty Appreciation Day</td>
                            </tr>
                            <tr>
                                <td class="event-month">November</td>
                                <td class="event-day">1</td>
                                <td class="event-title">All Saint's Day</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">7</td>
                                <td class="event-title">Dropping with Evaluation / Start of Application of LOA (Leave of Absence)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">30</td>
                                <td class="event-title">Bonifacio Day</td>
                            </tr>
                            <tr>
                                <td class="event-month">December</td>
                                <td class="event-day">1 to 3</td>
                                <td class="event-title">Final Examination (Graduating Students)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">5 to 9</td>
                                <td class="event-title">University Foundation Week</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">5 to 7</td>
                                <td class="event-title">Integration Period / Consultation of Grades</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">7</td>
                                <td class="event-title">Search for Outstanding Alumni (BulSU Graduates)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">8</td>
                                <td class="event-title">Feast of the Immaculate Conception of Mary</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">8 to 10</td>
                                <td class="event-title">Posting of Grades (Graduating Students)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">16 to 21</td>
                                <td class="event-title">Final Examination (Non-Graduating Students)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">21</td>
                                <td class="event-title">End of Classes (1st Semester A.Y. 2022 - 2023)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">22</td>
                                <td class="event-title">University-wide Christmas Party</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">23 to Jan 6</td>
                                <td class="event-title">Christmas Break</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">25</td>
                                <td class="event-title">Christmas Day</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">26 to Jan 7</td>
                                <td class="event-title">Posting of Grades (Non-Graduating Students)</td>
                            </tr>
                            <tr>
                                <td class="event-month"></td>
                                <td class="event-day">30</td>
                                <td class="event-title">Rizal Day</td>
                            </tr>
                        </tbody>
                    </table>
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