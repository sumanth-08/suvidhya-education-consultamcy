<?php
session_start();
error_reporting(0);
include('dbconnection.php');
$msg="";

if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$pwd=($_POST['pwd']);
	
    $query="select * from  `admin` where  uname='$uname' && pwd='$pwd' ";	
    //print_r($query);
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);

if($row>0)
{
  $_SESSION['admin_id']=$row['aid'];
  $_SESSION['admin_name']=$row['uname'];
//   echo "<script> alert('Login Successfull');window.location='AdminDashboard.php'</script>";
// }
// else
//  {
// echo"<script> alert('Admin login failed..! Try again');</script>";

// }

  header('location:AdminDashboard.php');   
}
else{
  $msg='  <div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Invalid User</strong> 
  </div>';
}
}
?>

<!DOCTYPE html>
<html>
	<head>
	<!-- meta tag section-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- meta tag section end-->
	<title>login page</title>
	<!-- css styleing link-->
	<!--bootstrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  
      <link rel="stylesheet" href="assets/css/style.css">


   <!--<link rel="stylesheet" type="text/css" href="css/login.css">
 -->
<!-- 	<link rel="stylesheet" type="text/css" href="responsive.css">
 -->    <!-- css styleing link end-->
	</head>  
	<body style="background-image: linear-gradient(to top right,  orange, yellow); height: 47.5rem">
  

<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2" style="background-color: #001a33">
    <div class="container-fluid">
  
   <font size="5" color="white" style="padding-left: 20px"><b>SUVIDYA EDUCATION CONSULTANCY</b> <a class="fa fa-graduation-cap"></a> </font>

   <div class="col " style="padding: 5px 25px 0px 0px;text-align: right">
<a href="index.php"><font color="white" size="6"><i class="fa fa-home"></i></font></a>
</div>

     
    </div>
  </nav>
</section>
  
  <section class="container-fluid" style="margin-top: 12%" >
            <section class="row justify-content-center">        
            <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container" method="post" action="">
            <h3 class="text-center font-weight-bold text-dark">ADMIN LOGIN</h3>
 <?php if($msg!="")
  {
	  echo $msg;
}
 ?> 
    <div class="form-group">
      <label for="uname"><b>Username:</b></label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd"><b>Password:</b></label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="text-center">
    <input type="submit" class="btn btn-dark btn-block text-light font-weight-bold" id="login" name="login" value="SUBMIT"/>
    </div><center><br>
    <a href="user/index.php" class="text-dark font-weight-bold ">CLICK HERE TO GO HOME PAGE</a>
  </form>
    

</div>
</div>
</section>
</section>
</section>
<script>
	// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
		</script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     <script src="C:\xampp\htdocs\suvidya\js\custom.js"></script>
    <!-- script section end-->
	</body>
</html>