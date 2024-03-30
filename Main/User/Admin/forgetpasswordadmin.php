<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="../../Files/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Files/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-2 d-none d-lg-block"></div>
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your number below
                                            and we'll send you a your passowrd of your Login.</p>
                                    </div>
                                    <form class="user" action="forgetpasswordadmin.php" method="POST">
                                        <div class="form-group">
                                            <input type="number" name="number" class="form-control form-control-user"
                                                placeholder="Enter Mobile Number...">
                                        </div>
                                         <button name="submit" class="btn btn-primary btn-user btn-block">
                                            Send Password
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="AdminLogin.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 d-none d-lg-block"></div>
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
error_reporting();
$user ='root';
$pass = '';
$db = 'seminar';

$db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(isset($_POST['submit']))
{
    $number=$_POST['number'];

    $sql="SELECT * FROM admin WHERE Admin_Number='".$number."'";
    $result=(mysqli_query($db,$sql));
    $data=mysqli_fetch_assoc($result);


    if (mysqli_num_rows($result))
     {
          $name=$data['Admin_Name'];
          $number=$data['Admin_Number'];
          $pass=$data['Admin_Password'];

             $fields = array(
                 "message" => "Hi ".$name.". Your Account Username :".$number." & Password ".$pass.". Be Alert!! Never send to anyone.. ",
                 "language" => "english",
                 "route" => "q",
                 "numbers" => "".$number."",
             );
             
             $curl = curl_init();
             
             curl_setopt_array($curl, array(
               CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING => "",
               CURLOPT_MAXREDIRS => 10,
               CURLOPT_TIMEOUT => 30,
               CURLOPT_SSL_VERIFYHOST => 0,
               CURLOPT_SSL_VERIFYPEER => 0,
               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST => "POST",
               CURLOPT_POSTFIELDS => json_encode($fields),
               CURLOPT_HTTPHEADER => array(
                 "authorization: GernEum96IDwtqzHcTJ2U8WysXShQVNxjP7gYAaMpLRdBf4ivKAcBOrh9D5K3RmUk6YMwaiJNfl4Luys",
                 "accept: */*",
                 "cache-control: no-cache",
                 "content-type: application/json"
               ),
               ));
               
               $response = curl_exec($curl);
               $err = curl_error($curl);
               
               curl_close($curl);
               
          echo "<script>
          alert('Thank you, Your Password has been sent to mobile number.');
           window.location.href='AdminLogin.php'
           </script>";
        }else
        {
            echo "<script>
          alert('Mobile Number is not valid, Kindely check Number');
           window.location.href='forgetpasswordadmin.php'
           </script>";
        }
    }

?>