<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];
$query = "DELETE FROM student WHERE Student_Id=".$rollno."";
$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('Student Deleted Successfully...');
     window.location.href='studentviewing.php';
    </script>";

}else
{
     echo "<script>
    alert('Invalid Student not Deleted Successfully...');
     window.location.href='studentviewing.php';
    </script>";
}
?>













