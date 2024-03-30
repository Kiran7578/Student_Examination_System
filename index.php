<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SES</title>
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: poppins;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: relative;
  bottom: 0;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

</style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="Main/Files/video/video.mp4" type="video/mp4">
</video>

<div class="content">
	<div class="row">
		<div class="col-md-12" style="margin-top: 240px;text-align: center;;font-family: cursive;">
			<h2 style="font-size: 80px;"><i><b>Student Examination System</b></i></h2>
			<a href="Main/User/Student/StudentLogin.php"><button class="btn btn-lg btn-warning" style="opacity: 58%">Student Login</button></a>&nbsp;&nbsp;&nbsp;
			<a href="Main/User/Teacher/TeacherLogin.php"><button class="btn btn-lg btn-warning" style="opacity: 58%">Teacher Login</button></a>&nbsp;&nbsp;&nbsp;
			<a href="Main/User/Admin/AdminLogin.php"><button class="btn btn-lg btn-warning" style="opacity: 58%">Admin Login</button></a>
		</div>	
	</div>
<section class="team text-center py-5" style="margin-top:200px">
   <div class="container">
     <div class="header my-5">
       <h1>Meet our Team </h1>
       <p class="text-muted">Meet and Greet our Team Members</p>
     </div>
     <div class="row">
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="yash.jpeg" class="img-fluid  img-thumbnail rounded-circle" alt="image1"  style="height: 310px;width: 310px;">
           <div class="content mt-2">
             <h4>Awad Deepak</h4>
             <p class="text-muted">Web Developer<br> Database Developer</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3 ">
         <div class="img-block mb-5">
           <img src="kiran.jpeg" class="img-fluid  img-thumbnail rounded-circle" alt="image1" style="height: 310px;width: 310px;">
           <div class="content mt-2">
             <h4>Kiran Datir</h4>
             <p class="text-muted">Logic & API Developer</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="vaishnavi.jpeg" class="img-fluid  img-thumbnail rounded-circle" alt="image1" style="height: 310px;width: 310px;">
           <div class="content mt-2">
             <h4>Vaishnavi Deshmukh</h4>
             <p class="text-muted">Frontend Develoepr</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="pradip.jpeg" class="img-fluid  img-thumbnail rounded-circle" alt="image1"  style="height: 310px;width: 310px;">
           <div class="content mt-2">
             <h4>Waghmare Pradip</h4>
             <p class="text-muted"> Database Developer</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 
 
 <!-- credits: https://bootstrapcrew.com/snippets/team-members/ -->
</div>

</body>
</html>