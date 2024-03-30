<?php
   session_start();
   $number=$_SESSION['Teacher_Number'];
      $password=$_SESSION['Teacher_Password'];

      if ($_SESSION['Teacher_Number'] AND $_SESSION['Teacher_Password'] ) 
      {
      
      $user ='root';
     $pass = '';
      $db = 'seminar';
   
     $db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
     $sql="SELECT * FROM teacher WHERE Teacher_Number='".$number."' AND Teacher_Password ='".$password."'";
     $result=(mysqli_query($db,$sql));
     $data=mysqli_fetch_assoc($result);
     }else
     {
        header("location:TeacherLogin.php");
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

    <title>Teacher</title>

    <!-- Custom fonts for this template-->
    <link href="../../Files/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Files/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">VDF  <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Teacher.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item">
                <a class="nav-link" href="TeacherProfile.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Your Details</span></a>
            </li>

             <!-- Nav Item - News Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>News</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="addnews.php">Adding News</a>
                        <a class="collapse-item" href="addexamlink.php">Adding Exam Link</a>
                        <a class="collapse-item" href="viewnews.php">Viewing News</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Student</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="AddStudent.php">Add Student</a>
                        <a class="collapse-item" href="ViewStudent.php">View Student</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Exam</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="AddTest.php">Add Test</a>
                        <a class="collapse-item" href="ViewTest.php">Edit Viewing Test</a>
                        <a class="collapse-item" href="testdetails.php">Viewing Record</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="uploadqueries.php">
                   <i class="fas fa-address-card"></i>
                    <span>Generate Query</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="Replyquery.php">
                   <i class="fas fa-eye"></i>
                    <span>Viewing Query</span></a>
            </li>
            
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsequeries"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-question-circle"></i>
                    <span> Student Queries</span>
                </a>
                <div id="collapsequeries" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="studentqueries.php">Edit Viewing Query</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $data['Teacher_Name'];?></span>
                                <?php echo '<img class="img-profile rounded-circle"
                                    src="../Admin/Teacher/'.$data['Teacher_Image'].'"/>'?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                         <div class="container-fluid">

      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                                     <h1 class="h4 text-blue-900 mb-4" style="color: deeppink; text-align: center;">!! Adding of Student Data Per Year !!</h1>
                            <hr>
                            <form class="user" action="AddStudent.php" method="POST" enctype="multipart/form-data">
            
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                         <label class="form-check-label" for="materialChecked">Full Name:</label>
                                        <input type="text" name="fullname" class="form-control form-control-user" id="exampleFirstName" required>
                                    </div>
                                    <div class="col-sm-3">
                                         <label class="form-check-label" for="materialChecked">Email Id:</label>
                                        <input type="text" name="email" class="form-control form-control-user" id="exampleLastName" required>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                         <label class="form-check-label" for="materialChecked">Mobile Number:</label>
                                        <input type="text" name="number" class="form-control form-control-user" id="exampleFirstName" required>
                                    </div>
                                     <div class="col-sm-3">
                                         <label class="form-check-label" for="materialChecked">Password:</label>
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleLastName" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                          <div class="form-group">
                                        <label for="sel1">Class:</label>
                                       <select class="form-control input-group input-group-lg" name="class" id="class1"  style="border-radius: 100px;" required onchange="populate(this.id,'Semester1')">
                                       <option value="" selected="selected">Select Class</option>
                                        <option value="FirstYear">First Year</option>
                                       <option value="SecondYear">Second Year</option>
                                       <option value="ThirdYear">Third Year</option>
                                       <option value="FinalYear">Final Year</option>
                                     </select>
                                     </div>
                                   </div>

                                   <div class="col-sm-3 mb-3 mb-sm-0">
                                          <div class="form-group">
                                     <label for="sel1">Semester:</label>
                                     <select class="form-control input-group input-group-lg" name="Semester" id="Semester1" style="border-radius: 100px;" required>
                                         <option value="" selected="selected">Select Semester</option>
                                     </select>
                                     </div>
                                   </div>

                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                          <div class="form-group">
                                     <label for="sel1">Gender:</label>
                                     <select class="form-control input-group input-group-lg" name="Gender" id="exampleLastName" style="border-radius: 100px;" required>
                                       <option value="">Select any..</option>
                                       <option value="Male">Male</option>
                                       <option value="FeMale">FeMale</option>
                                       <option value="Other">Other</option>
                                     </select>
                                   </div>
                                        
                                   </div>
                                   <div class="col-sm-3 mb-3 mb-sm-0">
                                         <label class="form-check-label" for="materialChecked">Date of Birth:</label>
                                        <input type="date" name="date" class="form-control form-control-user" id="exampleFirstName" required>
                                    </div>
                                  </div>

                                <div class="form-group row">
                                  <div class="col-sm-3">
                                    <label for="formFile" class="form-label">Upload Image:</label>
                                    <input class="form-control" type="file" id="formFile" name="image" required>
                                   </div>
                                    <div class="col-sm-9 mb-3 mb-sm-0">
                                         <label class="form-check-label" for="materialChecked">Permanent Address:</label>
                                        <input type="text" name="address" class="form-control form-control-user" id="exampleFirstName" required>
                                    </div>
                                </div>

                                <hr>
                                <button name="upload" class="btn btn-danger btn-user btn-block">
                                    Add student
                             </button>
                                
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white" >
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
                    <a class="btn btn-primary" href="Teacherlogout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript">
           function populate(class1,Semester1)
           {
           var s1=document.getElementById('class1');
           var s2=document.getElementById('Semester1');

           s2.innerHTML="";
           if (s1.value =="FirstYear")
            {
             var optionArray = ['1|1','2|2'];
            }
            else if (s1.value== "SecondYear") 
            {
              var optionArray = ['3|3','4|4']; 
            }else if (s1.value== "ThirdYear") 
            {
              var optionArray = ['5|5','6|6']; 
            }else if (s1.value== "FinalYear") 
            {
              var optionArray = ['7|7','8|8']; 
            }
            for(var option in optionArray)
            {
                var pair= optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML=pair[1];
                s2.options.add(newoption);
            }

           }
       </script>


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

<?php
$user ='root';
$pass = '';
$db = 'seminar';

$db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(isset($_POST['upload']))
{

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $class=$_POST['class'];
    $Semester=$_POST['Semester'];
     $Gender=$_POST['Gender'];
    $date=$_POST['date'];
    $address=$_POST['address'];
    $Department=$data['Teacher_Dept'];
    $Name=$data['Teacher_Name'];

    $target = "Student/".basename($_FILES['image']['name']);

      $image= $_FILES['image']['name'];
     if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
       $sql='INSERT INTO student VALUES("","'.$fullname.'","'.$email.'","'.$number.'","'.$password.'","'.$class.'","'.$Semester.'","'.$Gender.'","'.$date.'","'.$image.'","'.$address.'","'.$Department.'","'.$Name.'")';

    if (mysqli_query($db,$sql))
     {
      echo "<script>
          alert('Hi Teacher , Student Added Successfully...');
           window.location.href='AddStudent.php'
           </script>";
    }else
    {
        echo "<script>
          alert('Hi Admin, Kindely checK some issue');
           window.location.href='AddStudent.php'
           </script>";
    }
}
}
?>

