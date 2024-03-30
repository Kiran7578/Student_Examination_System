<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];
$query = "DELETE FROM replyquery WHERE Reply_Id=".$rollno."";
$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('Student Sorted Query Deleted Successfully...');
     window.location.href='studentsortedqueries.php';
    </script>";

}else
{
     echo "<script>
    alert('Student Query not Deleted Successfully...');
     window.location.href='studentsortedqueries.php';
    </script>";
}
?>













