<?php
$user='root';
$pass='';
 $db='seminar';

 $db = new mysqli('localhost',$user,$pass,$db) or die("die");
    if(isset($_GET['eid']))
    {
        $eid=$_GET['eid'];
        $sql=mysqli_query($db,"select * from testquestion where Test_Id='$eid'");
        while($row=mysqli_fetch_array($sql))
        {
            $qid=$row['Test_Id'];
            $a=mysqli_query($db,"delete from options where eid='$qid'");
            $b=mysqli_query($db,"delete from answer where eid='$qid'");
        }
        $d=mysqli_query($db,"delete from quizquestion where eid='$eid'");
        $e=mysqli_query($db,"delete from testquestion where Test_Id='$eid'");
         echo '<script>alert("Test delete successfully !")
          document.location.href="ViewTest.php";
          </script>';
    }
 
?>