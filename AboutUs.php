<?php include('dashboard.php');?>


<?php
$msg="";
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$description=$_POST['description'];
	// $banner_image=$_POST['banner_image'];

	$target_dir = "uploads/aboutus/";
	$target_file = $target_dir . basename($_FILES["banner_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	  
	$check = getimagesize($_FILES["banner_image"]["tmp_name"]);
	if($check !== false) {
    $msg= "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
	} else {
    $msg= "File is not an image.";
    $uploadOk = 0;
	}
  // Check if file already exists
	if (file_exists($target_file)) {
	$msg= "Sorry, file already exists.";
	$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["banner_image"]["size"] > 500000) {
	$msg= "Sorry, your file is too large.";
	$uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "jfif" ) {
	$msg= "Sorry, only JPG, JPEG, PNG, JFIF & GIF files are allowed.";
	$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	$msg= "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	if (move_uploaded_file($_FILES["banner_image"]["tmp_name"], $target_file)) {
    //echo "The file ". basename( $_FILES["banner_image"]["name"]). " has been uploaded.";
	$banner_image=$_FILES["banner_image"]["name"];
	} else {
    $msg= "Sorry, there was an error uploading your file.";
	}
	}
	
	$created_on=date("Y-m-d H:i:s");
	$modified_on=date("Y-m-d H:i:s");
	
	$query="INSERT into `about` (title, description, banner_image, created_on,  modified_on)
	VALUES ('$title', '$description', '$banner_image',  '$created_on', '$modified_on')";
	 // echo $query;
 		$result = mysqli_query($con,$query);
           if($result){
            $msg= "Banner Details added  successfully.";
     }

	
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2 class="h2">About-Us</h2>
</div>

<div class="container my-5 form">
<!--  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 -->
 <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">

 <?php if($msg!="")
  {
	  echo '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong>'.$msg.'
  </div>';
}
?>

	<div class="form-group">
      <label for="title"><b>Title</b></label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" required>
    <div class="validation"></div>
	</div> 
 	<div class="form-group">
      <label for="sub_title"><b>Description</b></label>
      <textarea type="text" class="form-control" id="description" placeholder="Enter Description" name="description" rows="4" required></textarea>
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="image"><b>Image</b></label>
      <input type="file" class="form-control" id="banner_image" placeholder="Enter Banner Image" name="banner_image" required>
    <div class="validation"></div>
	</div>	
	<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-dark text-light font-weight-bold " value="Submit"/>
</div> 
 </form>
</div>
</main>

<?php include('footer.php');?>
