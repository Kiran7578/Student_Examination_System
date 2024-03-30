<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];
$query = "DELETE FROM tquery WHERE TQuery_Id=".$rollno."";
$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('Query Deleted Successfully...');
     window.location.href='teacherqueries.php';
    </script>";

}else
{
     echo "<script>
    alert('Query not Deleted Successfully...');
     window.location.href='teacherqueries.php';
    </script>";
}
?>













