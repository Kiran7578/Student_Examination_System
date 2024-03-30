<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];
$query = "DELETE FROM replyteacher WHERE Reply_Id1=".$rollno."";
$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert(' Teacher Sorted Query Deleted Successfully...');
     window.location.href='teachersortedqueries.php';
    </script>";

}else
{
     echo "<script>
    alert('Teacher Query not Deleted Successfully...');
     window.location.href='teachersortedqueries.php';
    </script>";
}
?>













