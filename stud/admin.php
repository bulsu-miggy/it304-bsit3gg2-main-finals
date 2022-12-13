<?php
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrative Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<!-- <img src="https://codingcush.com/uploads/logo/logo_61b79976c34f5.png" alt="" width="350px" ><br><br> -->
	
	<hr>
	<h1><br>Student Enrollment Administrative Page</h1>
	
	<hr>
	<a href="logout.php" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back</a>

	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
<i class="fa fa-plus"></i> Register Student
</button>

<!-- <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</a> -->
<hr>
		<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			<th class="text-center" scope="col">S.L</th>
				<th class="text-center" scope="col">Name</th>
				<th class="text-center" scope="col">Student ID</th>
				<th class="text-center" scope="col">Phone</th>
				<th class="text-center" scope="col">Course</th>
				<th class="text-center" scope="col">View</th>
				<th class="text-center" scope="col">Edit</th>
				<th class="text-center" scope="col">Delete</th>
			</tr>
		</thead>
			<?php

        $get_data = "SELECT * FROM enrollees order by 1 desc";
        $run_data = mysqli_query($con,$get_data);
		$i = 0;
        while($row = mysqli_fetch_array($run_data))
        {
				$sl = ++$i;
				$id = $row['id'];
				$u_studnumber = $row['u_studnumber'];
				$u_f_name = $row['u_f_name'];
				$u_l_name = $row['u_l_name'];
				$u_mobile = $row['u_mobile'];
				$u_family = $row['u_family'];
				$u_staff_id = $row['staff_id'];

        $image = $row['image'];

        echo "

				<tr>
				<td class='text-center'>$sl</td>
				<td class='text-left'>$u_f_name   $u_l_name</td>
				<td class='text-left'>$u_studnumber</td>
				<td class='text-left'>$u_mobile</td>
				<td class='text-center'>$u_staff_id</td>
			
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$id' title='Prfile'><i class='fa fa-address-card-o' aria-hidden='true'></i></a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>

					</span>
					
				</td>
				<td class='text-center'>
					<span>
					
						<a href='#' class='btn btn-danger deleteuser' title='Delete'>
						<i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
				</td>
			</tr>


        ";
        }

        ?>

			
			
		</table>
		<form method="post" action="export.php">
    <input type="submit" name="export" class="btn btn-success" value="Export Data" />
    </form>
	</div>


	<!---Add in modal---->

<!-- Modal -->

<?php include('modal.php')?>


<!------DELETE modal---->




<!-- Modal -->
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


<!-- View modal  -->
<?php 

// <!-- profile modal start -->
$get_data = "SELECT * FROM enrollees";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$card = $row['u_studnumber'];
	$name = $row['u_f_name'];
	$name2 = $row['u_l_name'];
	$username = $row['u_username'];
	$password = $row['u_password'];
	$gender = $row['u_gender'];
	$email = $row['u_email'];
	$mobile = $row['u_mobile'];
	$Bday = $row['u_birthday'];
	$family = $row['u_family'];
	// $phone = $row['u_phone'];
	$address = $row['u_state'];
	// $village = $row['u_village'];
	$scholarship = $row['u_scholarship'];
	$balance = $row['u_balance'];
	$dist = $row['u_dist'];
	$pincode = $row['u_pincode'];
	$state = $row['u_state'];
	$time = $row['uploaded'];
	
	$image = $row['image'];
	echo "

		<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
		<div class='modal-dialog'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Profile <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
			<div class='container' id='profile'> 
				<div class='row'>
					<div class='col-sm-4 col-md-2'>
						<img src='upload_images/$image' alt='' style='width: 150px; height: 150px;' ><br>
		
						<i class='fa fa-id-card' aria-hidden='true'></i> $card<br>
						<i class='fa fa-phone' aria-hidden='true'></i> $mobile  <br>
						Issue Date : $time
					</div>
					<div class='col-sm-3 col-md-6'>
						<h3 class='text-primary'>$name $name2</h3>
						<p class='text-secondary'>
						<strong>Username :</strong> $username <br>
						<strong>Password :</strong>$password <br>
						<strong>Scholarship :</strong>$scholarship <br>
						<strong>Balance :</strong>$balance <br>
						<strong>Mobile :</strong> $mobile <br>
						<i class='fa fa-venus-mars' aria-hidden='true'></i> $gender
						<br />
						<i class='fa fa-envelope-o' aria-hidden='true'></i> $email
						<br />
						
						
						<i class='fa fa-home' aria-hidden='true'> Address : </i>   <br> $dist, $state - $pincode
						<br />
						</p>
						<!-- Split button -->
					</div>
				</div>

			</div>   
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			</div>
			</form>
			</div>
		</div>
		</div> 


    ";
}


// <!-- profile modal end -->


?>





<!----edit Data--->

<?php

$get_data = "SELECT * FROM enrollees";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$balance = $row['u_balance'];
	$card = $row['u_studnumber'];
	$name = $row['u_f_name'];
	$name2 = $row['u_l_name'];
	$username = $row['u_username'];
	$password = $row['u_password'];
	$gender = $row['u_gender'];
	$email = $row['u_email'];
	$mobile = $row['u_mobile'];
	$Bday = $row['u_birthday'];
	$family = $row['u_family'];
	// $phone = $row['u_phone'];
	$address = $row['u_state'];
	// $village = $row['u_village'];
	$scholarship = $row['u_scholarship'];
	$dist = $row['u_dist'];
	$pincode = $row['u_pincode'];
	$state = $row['u_state'];
	$staffCard = $row['staff_id'];
	$time = $row['uploaded'];
	$image = $row['image'];
	echo "

<div id='edit$id' class='modal fade' role='dialog'>
<div class='modal-dialog'>

<!-- Modal content-->
<div class='modal-content'>
	<div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'>&times;</button>
			<h4 class='modal-title text-center'>Edit your Data</h4> 
	</div>

	<div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputEmail4'>Student Id.</label>
		<input type='text' class='form-control' name='card_no' placeholder='Enter 12-digit Student Id.' maxlength='12' value='$card' required>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>Balance</label>
		<input type='phone' class='form-control' name='user_balance' id='balance' placeholder='Enter 10' maxlength='10' value='8000' required>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='firstname'>First Name</label>
		<input type='text' class='form-control' name='user_first_name' placeholder='Enter First Name' value='$name'>
		</div>
		<div class='form-group col-md-6'>
		<label for='lastname'>Last Name</label>
		<input type='text' class='form-control' name='user_last_name' placeholder='Enter Last Name' value='$name2'>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='fathername'>Username</label>
		<input type='text' class='form-control' name='user_username' placeholder='Enter First Name' value='$username'>
		</div>
		<div class='form-group col-md-6'>
		<label for='mothername'>Password</label>
		<input type='text' class='form-control' name='user_password' placeholder='Enter Last Name' value='$password'>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='email'>Email Address</label>
		<input type='email' class='form-control' name='user_email' placeholder='Enter Email Address' value='$email'>
		</div>
		<div class='form-group col-md-6'>
		<label for='mobileno'>Mobile No.</label>
		<input type='text' class='form-control' name='user_mobile' maxlength='12' placeholder='Enter 12-digit Mobile no. ' value='$mobile'>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputState'>Gender</label>
		<select id='inputState' name='user_gender' class='form-control' value='$gender'>
		<option selected>$gender</option>
		<option>Male</option>
		<option>Female</option>
		<option>Other</option>
		</select>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>Date of Birth</label>
		<input type='date' class='form-control' name='user_dob' placeholder='Date of Birth' value='$Bday'>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputCity'>Address</label>
		<input type='text' class='form-control' name='dist' value='$dist'>
		</div>
		<div class='form-group col-md-4'>
		<label for='inputState'>State</label>
		<select name='state' class='form-control'>
		<option>$state</option>
			<option value='Angat'>Angat</option>
			<option value='Balagtas'>Balagtas</option>
			<option value='Bocaue'>Bocaue</option>
			<option value='Bulakan'>Bulakan</option>
			<option value='Bustos'>Bustos</option>
			<option value='Calumpit'>Calumpit</option>
			<option value='Dona Remedios Trinidad'>Dona Remedios Trinidad</option>
			<option value='Guiguinto'>Guiguinto</option>
			<option value='Hagonoy'>Hagonoy</option>
			<option value='Malolos'>Malolos</option>
			<option value='Marilao'>Marilao</option>
			<option value='Meycauyan'>Meycauyan</option>
			<option value='Norzagaray'>Norzagaray</option>
			<option value='Obando'>Obando</option>
			<option value='Pandi'>Pandi</option>
			<option value='Paombong'>Paombong</option>
			<option value='Plaridel'>Plaridel</option>
			<option value='Pulilan'>Pulilan</option>
			<option value='San Ildefonso'>San Ildefonso</option>
			<option value='San Jose Del Monte'>San Jose Del Monte</option>
			<option value='San Miguel'>San Miguel</option>
			<option value='San Rafael'>San Rafael</option>
			<option value='Santa Maria'>Santa Maria</option>
		</select>
		</div>
		<div class='form-group col-md-2'>
		<label for='inputZip'>Zip Code</label>
		<input type='text' class='form-control' name='pincode' value='$pincode'>
		</div>
		</div>
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputState'>Year Level</label>
		<select id='inputState' name='user_yearlevel' class='form-control'>
		  <option>High School</option>
		  <option>College</option>
		</select>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputState'>Scholarship</label>
		<select id='inputState' name='user_scholarship' class='form-control' value='$scholarship'>
		  <option>Yes</option>
		  <option>No</option>
		</select>
		</div>
		</div>
		


		
		<div class='form-group'>
		<label for='inputAddress'>Strand/Degree Program</label>
		<input type='text' class='form-control' name='staff_id'  placeholder='Enter 12-digit Staff Id' value='$staffCard'>
		</div>

        <div class='form-group'>
        <label>Image</label>
        <input type='file' name='image' class='form-control'>
        <img src = 'upload_images/$image' style='width:50px; height:50px'>
		<input type='file' name='image' class='form-control'>
        <img src = 'upload_images/$image' style='width:50px; height:50px'>
		<input type='file' name='image' class='form-control'>
        <img src = 'upload_images/$image' style='width:50px; height:50px'>
		<input type='file' name='image' class='form-control'>
        <img src = 'upload_images/$image' style='width:50px; height:50px'>
        </div>

        
        
			<div class='modal-footer'>
			<input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
			<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		</div>
        </form>
    </div>
    </div>
</div>
</div>
	";
}

?>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#myTable').DataTable();

    });
</script>

</body>
</html>
