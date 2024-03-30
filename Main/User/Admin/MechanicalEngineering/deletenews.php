<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];
$query = "DELETE FROM adminnews WHERE ANews_Id=".$rollno."";
$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('News Deleted Successfully...');
     window.location.href='viewnews.php';
    </script>";

}else
{
     echo "<script>
    alert('News not Deleted Successfully...');
     window.location.href='viewnews.php';
    </script>";
}
?>













