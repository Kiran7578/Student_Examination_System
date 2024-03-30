<?php
$user ='root';
  $pass = '';
   $db = 'seminar';

  $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $rollno = $_GET['rn'];

  $sql="SELECT * FROM query WHERE Query_Id=".$rollno." ";
   $result=(mysqli_query($db,$sql));
      while($data=mysqli_fetch_assoc($result))
     {
        echo $data['Query_Name'];
                        
   $Query_Name=$data['Query_Name'];
   $Query_Number=$data['Query_Number'];
   $Query_Email=$data['Query_Email'];
   $Query_SName=$data['Query_SName'];
   $Query_Description=$data['Query_Description'];
   $Query_Year=$data['Query_Year'];
   $Query_Class=$data['Query_Class'];
   $Query_HeldName=$data['Query_HeldName'];
   $Query_Dept=$data['Query_Dept'];
}

   $msg="Your Query Has Been Sorted Check It....";
$query = "INSERT INTO replyquery VALUES('','".$Query_Name."','".$Query_Number."','".$Query_Email."','".$Query_SName."','".$Query_Description."','".$Query_Year."','".$Query_Class."','".$Query_HeldName."','".$Query_Dept."','".$msg."')";

$result=(mysqli_query($db,$query));
if ($result =true)
{
    echo "<script>
    alert('Query Message Send Successfully...');
     window.location.href='studentqueries.php';
    </script>";

}else
{
     echo "<script>
    alert('Query Message not Successfully...');
     window.location.href='studentqueries.php';
    </script>";
}
?>