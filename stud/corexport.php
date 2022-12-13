
<!DOCTYPE html>
<html>
<head>
	<title>Certificate of Registration</title>
	<?php include('header.php')?> 
</head>
<body>

<button class="btn btn-success" onclick="window.print()">COR</button>

</body>
</html>


<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export"]))
{
$query = "SELECT * FROM enrollees order by 1 desc";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
$output .= '
<table class="table" bordered="1">  
                    
<tr>
<th>International State College by the Philippines Accessible Online Enrollment <br> Certificate of Registration</th> 
</tr> 
<tr>  
                         <th>Student number</th>  
                         <th>Name</th>  
                         <th>Mobile No.</th>
                         <th>Gender</th>  
                         <th>Birthday</th>
                         <th>Email Id:</th>  
                         <th>Scholarship</th>  
                         <th>Address</th>
                         <th>Strand/Course</th>  
                  

                    </tr>
';
$i = 0;
while($row = mysqli_fetch_array($result))
{
$sl = ++$i;
$output .= '
     

<tr>  
                    
                    <td>'.$row["u_studnumber"].'</td>  
                    <td>'.$row["u_f_name"]  .$row["u_l_name"].'</td>  
                    <td>'.$row["u_mobile"].'</td>  
                    <td>'.$row["u_gender"].'</td> 
                    <td>'.$row["u_birthday"].'</td>  
                    <td>'.$row["u_email"].'</td>  
                    <td>'.$row["u_scholarship"].'</td>  
                    <td>'.$row["u_dist"] .$row["u_state"] .$row["u_pincode"].'</td>  
                    <td>'.$row["staff_id"].'</td>  
            
               </tr>

                <tr>          
                    <td>|</td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> 
               </tr>

               <tr>  
                         <th>SUBJECT TITLE</th>  
                         <th>---</th>  
                         <th>---</th>
                         <th>---</th>  
                         <th>SECTION</th>
                         <th>SCHEDULE</th>  
                         <th>---</th>  
                         <th>Professor</th>
                         <th>---</th>  
                  

                    </tr>


               <tr>          
                    
                    <td>Subject 1</td> <td>-</td> <td>-</td> <td>-</td> <td>SECTION 1.1</td> <td>M  10:00AM - 12:00PM</td> <td>-</td> <td>Professor 1</td> <td></td> 
               
               </tr>

               <tr>          
              
               <td>Subject 2</td> <td>-</td> <td>-</td> <td>-</td> <td>SECTION 1.1</td> <td>T 11:00AM - 2:00PM</td> <td>-</td> <td>Professor 2</td> <td></td> 
               </tr>

               <tr>          
                    <td>Subject 3</td> <td>-</td> <td>-</td> <td>-</td> <td>SECTION 1.1</td> <td>M  5:00PM - 8:00PM</td> <td>-</td> <td>Professor 3</td> <td></td> 
               </tr>
               <tr>          
               <td>Subject 4</td> <td>-</td> <td>-</td> <td>-</td> <td>SECTION 1.1</td> <td>S  7:00AM - 12:00PM</td> <td>-</td> <td>Professor 4</td> <td></td> 
               </tr>
               <tr>          
               <td>Subject 5</td> <td>-</td> <td>-</td> <td>-</td> <td>SECTION 1.1</td> <td>M  7:00AM - 10:00PM</td> <td>-</td> <td>Professor 5</td> <td></td> 
               </tr>
               <tr>          
               <td>Subject 6</td> <td>-</td> <td>-</td> <td>-</td> <td>SECTION 1.1</td> <td>T  8:00AM - 10:00PM</td> <td>-</td> <td>Professor 6</td> <td></td>  
               </tr>

               <tr>  
                    
                    <td>--</td>  
                    <td><br><br><br><br><br> ________________<br>Student Signature</td>  
                    <td>--</td>
                    <td>--</td> 
                    <td>--</td> 
                    <td>--</td>  
                    <td>--</td>
                    <td><br><br><br><br><br>  ________________<br>Parent Signature</td>  
                    <td>--</td>
            
               </tr>

               
';
break;
}
$output .= '</table>';

header("window.print()");
header("window.print()");
// header('Content-Type: application/pdf');
// header('Content-Disposition:attachment;filename=downloaded.pdf');
echo $output;
}
}

