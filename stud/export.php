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
                         <th>S.L</th>  
                         <th>Student number</th>  
                         <th>Name</th>  
                         <th>Username</th>  
                         <th>Password</th>  
                         <th>Mobile No.</th>
                         <th>Gender</th>  
                         <th>Birthday</th>
                         <th>Email Id:</th>  
                         <th>Scholarship</th>  
                         <th>Address</th>
                         <th>Strand/Course</th>  
                         <th>Issue Date:</th>

                    </tr>
';
$i = 0;
while($row = mysqli_fetch_array($result))
{
$sl = ++$i;
$output .= '
<tr>  
                    <td > '.$sl.' </td>
                    <td>'.$row["u_studnumber"].'</td>  
                    <td>'.$row["u_f_name"]  .$row["u_l_name"].'</td>  
                    <td>'.$row["u_username"].'</td>  
                    <td>'.$row["u_password"].'</td>  
                    <td>'.$row["u_mobile"].'</td>  
                    <td>'.$row["u_gender"].'</td> 
                    <td>'.$row["u_birthday"].'</td>  
                    <td>'.$row["u_email"].'</td>  
                    <td>'.$row["u_scholarship"].'</td>  
                    <td>'.$row["u_dist"] .$row["u_state"] .$row["u_pincode"].'</td>  
                    <td>'.$row["staff_id"].'</td>  
                    <td>'.$row["uploaded"].'</td>
               </tr>
';
}
$output .= '</table>';
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=Student_Enrollment_Details.xls');
echo $output;
}
}
?>