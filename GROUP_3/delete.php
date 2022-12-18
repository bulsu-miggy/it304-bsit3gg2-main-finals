<?php

include('db.php');
$id = $_GET['id'];
$delete = "DELETE FROM enrollees WHERE id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:registrar.php');
}else{
	echo "Donot Delete";
}


?>