<?php
$user='root';
$pass='';
 $db='seminar';

 $db = new mysqli('localhost',$user,$pass,$db) or die("die");
    if(isset($_GET['rn']))
    {
        $rn=$_GET['rn'];
        $sql=mysqli_query($db,"select * from testquestion where Test_Id='$rn'");
        while($row=mysqli_fetch_array($sql))
        {
            $qid=$row['Test_Teacher'];
            $a=mysqli_query($db,"delete from history where Test_Teacher='$qid'");
            $a=mysqli_query($db,"delete from testquestion where Test_Teacher='$qid'");
        }
         echo '<script>alert("Record deleted Successfully !");
          document.location.href="testdetails.php";
          </script>';
    }
 
?>