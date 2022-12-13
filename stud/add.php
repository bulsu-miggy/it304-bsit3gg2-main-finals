<?php
//database connection
include('db.php');

//adding data to the database
if(isset($_POST['submit'])){
// $u_studnumber = $_POST['card_no'];
// $u_balance = $_POST['user_balance'];
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

//image upload
$msg = "";
$image = $_FILES['image']['name'];
$target = "upload_images/".basename($image);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	$msg = "Image uploaded successfully";
}else{
	$msg = "Failed to upload image";
}
// $insert_data = "INSERT INTO enrollees(u_studnumber, u_f_name, u_l_name, u_username, u_mobile, u_birthday, u_gender, u_email, u_phone, u_state, u_dist, u_village, u_scholarship, u_pincode, u_password, u_family, staff_id,image,uploaded) VALUES ('$u_studnumber','$u_f_name','$u_l_name','$u_username','$u_mobile','$u_birthday','$u_gender','$u_email','$u_phone','$u_state','$u_dist','$u_village','$u_scholarship','$u_pincode','$u_password','$u_family','$u_staff_id','$image',NOW())";
$insert_data = "INSERT INTO enrollees( u_f_name,  u_l_name, u_username, u_mobile, u_birthday, u_gender, u_email, u_state, u_scholarship, u_dist, u_pincode, u_password, staff_id,image,uploaded) 
							VALUES ('$u_f_name','$u_l_name','$u_username','$u_mobile','$u_birthday','$u_gender','$u_email','$u_state', '$u_scholarship' , '$u_dist','$u_pincode','$u_password','$u_staff_id','$image',NOW())";
$run_data = mysqli_query($con,$insert_data);

if($run_data){
	header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
}else{
	echo "Data not insert";
}

}

?>
