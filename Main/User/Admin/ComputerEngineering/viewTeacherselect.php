<?php
if (isset($_POST['emp_id'])) 
{
	
     $user ='root';
     $pass = '';
     $db = 'seminar';
              
    $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
	$output='';
	$query='SELECT * FROM teacher WHERE Teacher_Id="'.$_POST['emp_id'].'"';
	$result= mysqli_query($db,$query);
	
	$output .='
	<div class="table-responsive">
	  <table class="table table-responsive table-bordered" width="100%" cellspacing="0">';
	  while ($row=mysqli_fetch_array($result))
	   {
	  	$output .='
	  	<tr>
	  	    <td width="30%"><label style="color:blue">Image:</label></td>
	  	      <td width="70%" style="color:black"><img src="../Teacher/'.$row['Teacher_Image'].'" class="card-img-top rounded-circle z-depth-2" / style="height: 300px;"></td>
	  	 </tr>

	  	<tr>
	  	    <td width="30%"><label style="color:blue">Full Name:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Name'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Mother Name:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Mother'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Mobile Number:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Number'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Gender:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Gender'].'</td>
	  	 </tr>

	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Email Id:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Email'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Adhar Card:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Adhr'].'</td>
	  	 </tr>
	  	 <tr>
	  	    <td width="30%"><label style="color:blue">Date Of Birth:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Dob'].'</td>
	  	 </tr>
	  	 <tr>
	  	    <td width="30%"><label style="color:blue">Password:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Password'].'</td>
	  	 </tr>
	  	  <tr>
	  	    <td width="30%"><label style="color:blue">Address:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Teacher_Address'].'</td>
	  	 </tr>



	  	       ';
	  }
	  $output .='</table></div>';
	  echo $output;
}

?>