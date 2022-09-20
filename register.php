<?php
require('dbconnection.php');
if (isset($_POST['name'])){
	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$registration_date = date("Y-m-d H:i:s");   



	$query = "INSERT INTO `register`(name, uname, mobile, email, pwd, registration_date)
	VALUES ('$name','$uname','$mobile','$email','".md5($pwd)."','$registration_date')";
	//echo $query;
	$result = mysqli_query($con,$query);
	if($result){
		// echo "<div class =\"submitmsg\">
		// <h2>Your Registerd Successfully</h2></br>
		// <button><a href='adminlogin.php'>Login as Admin</button></a>
		// <button><a href='custlogin.php'>Login as Customer</button></a></div> ";

	  header('location:userlogin.php');   
	}


}else{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Boostrap links-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
	<!--Boostrap link close-->
	</head>
  <body>
<!--form section-->
	<div class="container"><center>
			<h2 class="text-light"><b>REGISTER HERE</b></h2>
			<h6 class="text-light">Welcome to Suvidya Education Consultancy</h6></center>.
			
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				<div class="form-group">
				<label for="name" class="text-light">Name :</label>
					<input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required>
				</div>
				<div class="form-group">
					<label for="uname" class="text-light">Username :</label>
					<input class="form-control" type="text" name="uname" id="uname" placeholder="Enter your Username" required>
				</div>
				<div class="form-group">
					<label for="mobile" class="text-light">Mobile number :</label>
					<input class="form-control" type="number" name="mobile" id="number" placeholder="Enter your mobile number" required>
				</div>
				<div class="form-group">
					<label for="email" class="text-light">Email :</label>
					<input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
				<div class="form-group">
					<label for="pwd" class="text-light">Password :</label>
					<input class="form-control" type="Password" name="pwd" id="pwd" placeholder="Enter your Password" required>
				</div>
				<div class="text-center">
					<input type="submit" class="btn btn-light text-dark font-weight-bold border" value="SIGNUP"><br>
				<p class="text-light font-weight-bold " style="padding: 10px 0px 30px 0px">Already have an account..?<a href="userlogin.php">SignIn</a></p>
 
				</div>
			</form>
			
		
	</div>
	<?php
}
	?>
	
	<!--form section ends-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>