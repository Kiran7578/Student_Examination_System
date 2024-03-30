<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];

  $sql="SELECT * FROM tquery WHERE TQuery_Id=".$rollno." ";
   $result=(mysqli_query($db,$sql));
      while($data=mysqli_fetch_assoc($result))
     {
                        
   $Query_Name=$data['TQuery_Name'];
   $Query_Number=$data['TQuery_Number'];
   $Query_Dept=$data['TQuery_Dept'];
   $Query_Sub=$data['TQuery_Sub'];
   $Query_Content=$data['TQuery_Content'];
}

   $msg="Your Query Has Been Sorted Check It....";
$query = "INSERT INTO replyteacher VALUES('','".$Query_Name."','".$Query_Number."','".$Query_Dept."','".$Query_Sub."','".$Query_Content."','".$msg."')";

$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('Resolve Query Message Send Successfully...');
     window.location.href='teacherqueries.php';
    </script>";

}else
{
     echo "<script>
    alert('Query Message not Successfully...');
     window.location.href='teacherqueries.php';
    </script>";
}
?>