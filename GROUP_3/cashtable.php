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
	<h1>Cashier Page</h1>
	
	<hr>
	<a href="logout.php" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back</a>

	<!-- <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
<i class="fa fa-plus"></i> Register Student
</button> -->

<!-- <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</a> -->
<hr>
		<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			

<th class="text-center" scope="col">S.L</th>
				<th class="text-center" scope="col">Name</th>
				<th class="text-center" scope="col">Student ID</th>
				<th class="text-center" scope="col">Scholarship</th>
				<th class="text-center" scope="col">Balance</th>
				<th class="text-center" scope="col">Course</th>
				<!-- <th class="text-center" scope="col">View</th> -->
				<th class="text-center" scope="col">Edit</th>
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
				$u_scholarship = $row['u_scholarship'];
				$u_balance = $row['u_balance'];
				$u_staff_id = $row['staff_id'];
        		// $image = $row['image'];

        echo "

				<tr>
				<td class='text-center'>$sl</td>
				<td class='text-left'>$u_f_name   $u_l_name</td>
				<td class='text-left'>$u_studnumber</td>
				<td class='text-left'>$u_scholarship</td>
				<td class='text-left'>$u_balance</td>
				<td class='text-center'>$u_staff_id</td>
			
				
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>
					</span>
					
				</td>
			</tr>


        ";
        }

        ?>

			
			
		</table>
		<form method="post" action="cashierexport.php">
    <input type="submit" name="export" class="btn btn-success" value="Export Data" />
    </form>
	</div>


<!----edit Data--->

<?php

$get_data = "SELECT * FROM enrollees";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$balance = $row['u_balance'];
	$scholarship = $row['u_scholarship'];
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
        <form action='cashEdit.php?id=$id' method='post' enctype='multipart/form-data'>

		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputState'>Scholarship</label>
		<select id='inputState' name='user_scholarship' class='form-control' value='$scholarship'>
		  <option>Yes</option>
		  <option>No</option>
		</select>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>Balance</label>
		<input type='phone' class='form-control' name='user_balance' id='balance' placeholder='Enter 10' maxlength='10' value='8000' required>
		</div>
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
