<?php
if (isset($_POST['emp_id'])) 
{
	
     $user ='root';
     $pass = '';
     $db = 'seminar';
              
    $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
	$output='';
	$query='SELECT * FROM student WHERE Student_Id="'.$_POST['emp_id'].'"';
	$result= mysqli_query($db,$query);
	
	$output .='
	<div class="table-responsive">
	  <table class="table table-responsive table-bordered" width="100%" cellspacing="0">';
	  while ($row=mysqli_fetch_array($result))
	   {
	  	$output .='
	  	<tr>
	  	    <td width="30%"><label style="color:blue">Image:</label></td>
	  	      <td width="70%" style="color:black"><img src="../../Teacher/student/'.$row['Student_Image'].'" class="card-img-top rounded-circle z-depth-2" / style="height: 300px;"></td>
	  	 </tr>

	  	<tr>
	  	    <td width="30%"><label style="color:blue">Full Name:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Name'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Mobile Number:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Number'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Gender:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Gender'].'</td>
	  	 </tr>

	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Email Id:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Email'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Current Year:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Class'].'</td>
	  	 </tr>
	  	 <tr>
	  	    <td width="30%"><label style="color:blue">Current Semester:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Semester'].'</td>
	  	 </tr>
	  	 <tr>
	  	    <td width="30%"><label style="color:blue">Date Of Birth:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Dob'].'</td>
	  	 </tr>
	  	 <tr>
	  	    <td width="30%"><label style="color:blue">Password:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Password'].'</td>
	  	 </tr>
	  	  <tr>
	  	    <td width="30%"><label style="color:blue">Address:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Student_Address'].'</td>
	  	 </tr>



	  	       ';
	  }
	  $output .='</table></div>';
	  echo $output;
}

?>