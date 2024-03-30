<?php
   session_start();
   $number=$_SESSION['Student_Number'];
      $password=$_SESSION['Student_Password'];

      if ($_SESSION['Student_Number'] AND $_SESSION['Student_Password'] ) 
      {
      
      $user ='root';
     $pass = '';
      $db = 'seminar';
   
     $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
     $sql="SELECT * FROM student WHERE Student_Number='".$number."' AND Student_Password ='".$password."'";
     $result=(mysqli_query($db,$sql));
     $data=mysqli_fetch_assoc($result);
     }else
     {
        header("location:StudentLogin.php");
     }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student</title>

    <!-- Custom fonts for this template-->
    <link href="../../Files/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Files/css/sb-admin-2.min.css" rel="stylesheet">
<script type="text/javascript">
        function back(){ window.history.forward();}
        setTimeout("back()",0);
        window.onunload = function () { null};
    </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
       
                 <div class="container">
       
                    <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                      <div class="col-lg-12">
                          <div class="p-5">
                            <h2 class="h5 text-blue-900 mb-2" style="color: deeppink; text-align: center;">Be Donot Copy. Lets Start Exam & Crack It..</h2>
                            <hr>
                            <?php
                       $user='root';
                      $pass='';
                      $db='seminar';

                       $db = new mysqli('localhost',$user,$pass,$db) or die("die");

                      if($_GET['q']=='quizquestion.php')
                      {   
                    $eid=$_REQUEST['eid'];
                    $testteacher=$_REQUEST['teacher'];
                    $sql=mysqli_query($db,"select * from quizquestion where eid='$eid'");
                    $c=1;
                     while($row=mysqli_fetch_array($sql))
                     {
                       $qns=$row['qns'];
                       $qid=$row['id'];
                       $total=$_REQUEST['total'];
                       $_SESSION['total']=$total;
                       echo' <form action="TestResult.php?qid='.$qid.'&eid='.$eid.'&testteacher='.$testteacher.'" method="POST">';
                      echo '<div class="card">
                          <div class="card-header">
                              <h4>'.$c++. ' '.$qns.'</h4>
                              </div>
                              <div class="card-body">';
                       $sq=mysqli_query($db,"select * from options where id='$qid'");
                        while($row1=mysqli_fetch_array($sq))
                        {
                          $option=$row1['options'];
                          $qid1=$row1['id'];
                          $optionid=$row1['optionid'];
                    echo ' <input type="radio" name="uid['.$c.']" value="'.$optionid.'">'.$option.'<br><br>';
                    }
                   
                   echo'</div>
                       </div>';
                       }
                       echo' </br><button type="submit" function="back()" name="result" class="btn btn-primary m-auto d-block">submit Exam</button>
                     </form> ';
                       
                  }
                  ?>                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="StudentLogout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../Files/vendor/jquery/jquery.min.js"></script>
    <script src="../../Files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../Files/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../Files/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../Files/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../Files/js/demo/chart-area-demo.js"></script>
    <script src="../../Files/js/demo/chart-pie-demo.js"></script>

</body>

</html>