<?php
session_start();
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

</head>

<body class="bg-gradient-success">

    <div class="container" style="margin-top: 50px;">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 "><img src="../../Files/img/Student.jpg" style="width: 100%;height: 100%;"></div>
                            <div class="col-lg-6"><br>
                                <div class="p-5">
                                    <div class="text-center"><br>
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Student Login</h1>
                                    </div>
                                    <form class="user" action="StudentLogin.php" method="POST">
                                        <div class="form-group">
                                            <input type="number" name="number" class="form-control form-control-user"
                                                placeholder="Enter Mobile Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <button name="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="../../../index.php">Go To Main Page</a>&nbsp;||&nbsp;
                                        <a class="small" href="forgetstudent.php">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>
<?php
$user ='root';
$pass = '';
$db = 'seminar';

$db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(isset($_POST['submit']))
{
    $number=$_POST['number'];
    $password=$_POST['password'];

    $sql="SELECT * FROM student WHERE Student_Number='".$number."' AND Student_Password ='".$password."'";
    $result=(mysqli_query($db,$sql));

    if (mysqli_num_rows($result))
     {
        $_SESSION['Student_Number']= $number;
        $_SESSION['Student_Password']= $password;
      echo "<script>
          alert('Hi Student, Login Successfully...');
          window.location.href='StudentModule.php'
           </script>";
    }else
    {
        echo "<script>
          alert('Hi your Username and password is Invalid...');
           window.location.href='StudentLogin.php'
           </script>";
    }
}

?>

