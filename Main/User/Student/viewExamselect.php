<?php
if (isset($_POST['emp_id'])) 
{
	
     $user ='root';
     $pass = '';
     $db = 'seminar';
              
    $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
	$output='';
	$query='SELECT * FROM examlink WHERE Exam_Id="'.$_POST['emp_id'].'"';
	$result= mysqli_query($db,$query);
	
	$output .='
	<div class="table-responsive">
	  <table class="table table-responsive table-bordered" width="100%" cellspacing="0">';
	  while ($row=mysqli_fetch_array($result))
	   {
	  	$output .='
	  	<tr>
	  	   <a href="'.$row['Exam_Link'].'" target="_self">'.$row['Exam_Link'].'</a></td>
	  	 </tr>

	  	       ';
	  }
	  $output .='</table></div>';
	  echo $output;
}

?>