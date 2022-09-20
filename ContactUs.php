<?php include('dashboard.php');?>

<?php 
if(isset($_POST['submit']))
{
  $title=$_POST['title'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $facebook=$_POST['facebook'];
  $twitter=$_POST['twitter'];
  $instagram=$_POST['instagram'];
  $gmail=$_POST['gmail'];
  $linkedin=$_POST['linkedin'];
  $created_on=date("Y-m-d H:i:s");
  $modified_on=date("Y-m-d H:i:s");
  
  $query= "INSERT INTO contact(title,email,mobile,facebook,twitter,instagram,gmail,linkedin,created_on,modified_on) 
  VALUES('$title','$email','$mobile','$facebook','$twitter','$instagram','$gmail','$linkedin','$created_on','$modified_on')";

 $result = mysqli_query($con,$query);
    if($result){
     $msg= "You are registered successfully.";
    }else{
     $msg= "Failed to upload data.";
    }
  
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2 class="h2">Contact-Us</h2>
</div>


 <div class="container my-5 form">
<!--  <form class="needs-validation" method="post" novalidate enctype="multipart/form-data">
 -->
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
 <?php if($msg!="")
  {
	  echo '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong>'.$msg.'
  </div>';
}
$ret=mysqli_query($con,"SELECT * from contact");
$row=mysqli_fetch_array($ret);
$cnt=1;
/*while ($row=mysqli_fetch_array($ret)) {*/

	
 ?>
 <input type="hidden" name="page_id" id="page_id" value="<?php echo $row['id'];?>"/>
 	<div class="form-group">
      <label for="title"><b>Site Title</b></label>
      <input type="text" class="form-control" id="title" placeholder="Enter Site Title" name="title" required >
    <div class="validation"></div>
	</div> 
 	<div class="form-group">
      <label for="email"><b>Email</b></label>
      <input type="text" class="form-control" id="email" placeholder="Enter Site Email" name="email" required >
    <div class="validation"></div>
	</div> 
 	<div class="form-group">
      <label for="mobile"><b>Mobile</b></label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter Site Mobile Number" name="mobile" required>
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="facebook"><b>Facebook Link</b></label>
      <input type="text" class="form-control" id="facebook" placeholder="Enter Site facebook link" name="facebook" required>
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="twitter"><b>Twitter Link</b></label>
      <input type="text" class="form-control" id="twitter" placeholder="Enter Site twitter link" name="twitter" required>
    <div class="validation"></div>
	</div>	
	<div class="form-group">
      <label for="instagram"><b>Instagram Link</b></label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter Site instagarm link" name="instagram" required  >
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="gmail"><b>G-mai Link</b></label>
      <input type="text" class="form-control" id="gmail" placeholder="Enter Site G-mail link" name="gmail" required  >
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="linkedin"><b>LinkedIn Link</b></label>
      <input type="text" class="form-control" id="linkedin" placeholder="Enter Site LinkedIn link" name="linkedin" required  >
    <div class="validation"></div>
	</div>
	<!-- <div class="form-group">
      <label for="map">Map</label>
	  <textarea id="map"  class="form-control" name="map" placeholder="Please include the map address" row="4" data-rule="required" data-msg="Please include valid map address"></textarea>
    <div class="validation"></div>
	</div> -->
	<div class="text-center">
	<input type="submit" name="submit" id="submit" class="btn btn-dark text-white " value="Submit"/>
    </div> 
</form>
</div>

</main>

<?php include('footer.php');?>
