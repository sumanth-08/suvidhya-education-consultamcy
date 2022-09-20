<?php include('UserHeader.php');
$edit_id=$_GET['editid'];
?>

<?php
$msg="";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];

	$query= "UPDATE`register` SET name='$name',uname='$uname',mobile='$mobile',email='$email' WHERE id='$edit_id'";

	// $query = "UPDATE register SET name='$name', uname='$uname, mobile='$mobile',email='$email'"
	// echo $query;

	$result = mysqli_query($con,$query);
	if($result){
		$msg="Profile details updated successfully.";
	}else{
		$msg="Sorry, Failed to update.";
	}
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit You'r Profile</h1>
  </div>

  <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">

  	<?php if($msg!="")
  {
	  echo '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong>'.$msg.'
  </div>';

}
$edit_id=$_GET['editid'];
$ret=mysqli_query($con,"select * from  register where id='$edit_id'");
$row=mysqli_fetch_array($ret);
?>

  	<div class="form-group">
  		<label for="name"><b>Name</b></label>
  		<input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']?>" required>
  		 <div class="validation"></div>

  	</div>
  	<div class="form-group">
  		<label for="uname"><b>Username</b></label>
  		<input type="text" class="form-control" name="uname" id="uname" value="<?php echo $row['uname']?>" required>
  		<div class="validation"></div>

  	</div>
  	<div class="form-group">
  		<label for="mobile"><b>Mobile</b></label>
  		<input type="number" class="form-control" name="mobile" id="mobile" value="<?php echo $row['mobile']?>" required>
  	    <div class="validation"></div>
	
  	</div>
  	<div class="form-group">
  		<label for="email"><b>Email</b></label>
  		<input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email']?>" required>
  		<div class="validation"></div>

  	</div>

<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-dark text-white " value="Submit"/>
</div> 
</form>

</main>


<?php include('footer.php');?>
