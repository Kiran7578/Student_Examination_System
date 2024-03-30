<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];
$query = "DELETE FROM teacher WHERE Teacher_Id=".$rollno."";
$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('Teacher Deleted Successfully...');
     window.location.href='viewTeacher.php';
    </script>";

}else
{
     echo "<script>
    alert('Invalid Check Teacher not Deleted Successfully...');
     window.location.href='viewTeacher.php';
    </script>";
}
?>













