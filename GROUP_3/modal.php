
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Registration</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
			
			<!-- This is test for New Card Activate Form  -->
			<!-- This is Address with email id  -->



<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">First Name</label>
<input type="text" class="form-control" name="user_first_name" placeholder="Enter First Name" required="true">
</div>
<div class="form-group col-md-6">
<label for="lastname">Last Name</label>
<input type="text" class="form-control" name="user_last_name" placeholder="Enter Last Name" required="true">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="username">Username</label>
<input type="text" class="form-control" name="user_username" placeholder="Enter username" required="true">
</div>
<div class="form-group col-md-6">
<label for="password">Password</label>
<input type="password" class="form-control" name="user_password" placeholder="Enter password" required="true">
</div>
</div>



<div class="form-row">
<div class="form-group col-md-6">
<label for="email">Email Address</label>
<input type="email" class="form-control" name="user_email" placeholder="Enter Email id" required="true">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Contact Number</label>
<input type="phone" class="form-control" name="user_mobile" maxlength="12" placeholder="Enter mobile number" required="true">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputState">Gender</label>
<select id="inputState" name="user_gender" class="form-control" required="true">
  <option selected>Choose...</option>
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Date of Birth</label>
<input type="date" class="form-control" name="user_dob" placeholder="Date of Birth" required="true"> 
</div>
</div>


<div class="form-group">
<!-- <label for="family">Full Address</label>
    <textarea class="form-control" name="family" rows="3"></textarea> -->
</div>



<div class="form-group">
<!-- <label for="inputAddress">Village</label>
<input type="text" class="form-control" name="village" placeholder="1234 Main St"> -->
</div>
<div class="form-group">
<!-- <label for="inputAddress2">Police Station</label>
<input type="text" class="form-control" name="police_station" placeholder="Enter police station"> -->
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity">Address</label>
<input type="text" class="form-control" name="dist" required="true">
</div>
<div class="form-group col-md-4">
<label for="inputState">Municipality</label>
<select name="state" class="form-control" required="true">
<option selected>Choose...</option>
<option value="Angat">Angat</option>
<option value="Balagtas">Balagtas</option>
<option value="Baliwag">Baliwag</option>
<option value="Bocaue">Bocaue</option>
<option value="Bulakan">Bulakan</option>
<option value="Bustos">Bustos</option>
<option value="Calumpit">Calumpit</option>
<option value="Dona Remedios Trinidad">Dona Remedios Trinidad</option>
<option value="Guiguinto">Guiguinto</option>
<option value="Hagonoy">Hagonoy</option>
<option value="Malolos">Malolos</option>
<option value="Marilao">Marilao</option>
<option value="Meycauyan">Meycauyan</option>
<option value="Norzagaray">Norzagaray</option>
<option value="Obando">Obando</option>
<option value="Pandi">Pandi</option>
<option value="Paombong">Paombong</option>
<option value="Plaridel">Plaridel</option>
<option value="Pulilan">Pulilan</option>
<option value="San Ildefonso">San Ildefonso</option>
<option value="San Jose Del Monte">San Jose Del Monte</option>
<option value="San Miguel">San Miguel</option>
<option value="San Rafael">San Rafael</option>
<option value="Santa Maria">Santa Maria</option>
</select>
</div>
<div class="form-group col-md-2">
<label for="inputZip">Zip Code</label>
<input type="text" class="form-control" name="pincode" required="true">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputState">Year Level</label>
<select id="inputState" name="user_yearlevel" class="form-control" required="true">
  <option selected>Choose...</option>
  <option>High School</option>
  <option>College</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputState">Scholarship</label>
<select id="inputState" name="user_scholarship" class="form-control" required="true" >
<option selected>Choose...</option>
  <option>Yes</option>
  <option>No</option>
</select>
</div>
</div>

<!-- <div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Username</label>
<input type="text" class="form-control" name="card_no" placeholder="Enter username" maxlength="12" required>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Balance</label>
<input type="phone" class="form-control" name="user_balance" placeholder="Enter password" maxlength="10" required>
</div>
</div> -->

<div class="form-group">
<label for="inputAddress">Strand/Degree Program</label>
<input type="text" class="form-control" name="staff_id" maxlength="120" placeholder="Enter desire course" required="true">
</div>
			


        	<div class="form-group">
			<hr>
        		<label>Passport size picture</label>
        		<input type="file" name="image" class="form-control" >
                <label>Form 138</label>
        		<input type="file" name="image" class="form-control" >
                <label>Birth Certificate</label>
        		<input type="file" name="image" class="form-control" >
                <label>Good Moral Certificate</label>
        		<input type="file" name="image" class="form-control" >
        	</div>

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>