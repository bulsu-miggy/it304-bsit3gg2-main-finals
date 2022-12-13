<?php
include('db.php');

$id = $_GET['id'];

//Fetching privious image to update
if(isset($_GET['id'])){
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM enrollees WHERE id = $edit_id";
    $edit_query_run = mysqli_query($con, $edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
      
        $e_image = $edit_row['image'];
     
    }
    else{
        // header('location: index.php');
        echo "Error1";
    }
}
else{
    // header("location: index.php");
    echo "Error2";
}

//Data Updating
if(isset($_POST['submit']))
{
	$u_studnumber = $_POST['card_no'];
	$u_balance = $_POST['user_balance'];
	$u_f_name = $_POST['user_first_name'];
	$u_l_name = $_POST['user_last_name'];
	$u_username = $_POST['user_username'];
	$u_mobile = $_POST['user_mobile'];
	$u_birthday = $_POST['user_dob'];
	$u_gender = $_POST['user_gender'];
	$u_email = $_POST['user_email'];
	// $u_phone = $_POST['user_phone'];
	$u_state = $_POST['state'];
	$u_dist = $_POST['dist'];
	// $u_village = $_POST['village'];
	$u_scholarship = $_POST['user_scholarship'];
	$u_pincode = $_POST['pincode'];
	$u_password = $_POST['user_password'];
	// $u_family = $_POST['family'];
	$u_staff_id = $_POST['staff_id'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	if(empty($image)){
	    $image = $e_image;
	}
	$target = "upload_images/".basename($image);


	$update = "UPDATE enrollees SET u_studnumber='$u_studnumber', u_balance='$u_balance', u_f_name = '$u_f_name', u_l_name = '$u_l_name', u_username = '$u_username', u_password = '$u_password', u_mobile = '$u_mobile', u_birthday = '$u_birthday', u_gender = '$u_gender', u_email = '$u_email', u_state = '$u_state',u_dist = '$u_dist',  u_scholarship = '$u_scholarship', u_pincode = '$u_pincode',  staff_id = '$u_staff_id', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
           move_uploaded_file($_FILES['image']['tmp_name'], $target);
           echo "<script>
            //alert('Success! Data has been successfully updated!');
			window.location.href='registrar.php';
            </script>";
	}else{
		echo "Data not update";
	}
}

?>
