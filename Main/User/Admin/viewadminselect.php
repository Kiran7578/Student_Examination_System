<?php
if (isset($_POST['emp_id'])) 
{
	
     $user ='root';
     $pass = '';
     $db = 'seminar';
              
    $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
	$output='';
	$query='SELECT * FROM admin WHERE Admin_Id="'.$_POST['emp_id'].'"';
	$result= mysqli_query($db,$query);
	
	$output .='
	<div class="table-responsive">
	  <table class="table table-responsive table-bordered" width="100%" cellspacing="0">';
	  while ($row=mysqli_fetch_array($result))
	   {
	  	$output .='
	  	<tr>
	  	    <td width="30%"><label style="color:blue">Full Name:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Admin_Name'].'</td>
	  	 </tr>
	  	 	<tr>
	  	    <td width="30%"><label style="color:blue">Mobile Number:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Admin_Number'].'</td>
	  	 </tr>

	  	 <tr>
	  	    <td width="30%"><label style="color:blue">Email Id:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Admin_Email'].'</td>
	  	 </tr>
	  	 <tr>
	  	    <td width="30%"><label style="color:blue">Password:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Admin_Password'].'</td>
	  	 </tr>
	  	  <tr>
	  	    <td width="30%"><label style="color:blue">Address:</label></td>
	  	    <td width="70%" style="color:black">'.$row['Admin_Address'].'</td>
	  	 </tr>



	  	       ';
	  }
	  $output .='</table></div>';
	  echo $output;
}

?>