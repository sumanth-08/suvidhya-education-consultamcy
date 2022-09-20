<?php 
include('dashboard.php');
$edit_id=$_GET['editid'];
?>

<?php
$msg="";
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$sub_title=$_POST['sub_title'];
	// $banner_image=$_POST['banner_image'];
	
	$target_dir = "uploads/banner/";
	$target_file = $target_dir . basename($_FILES["banner_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	  
if( $_FILES["banner_image"]["name"])
	{


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
	&& $imageFileType != "gif" ) {
	$msg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
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
	}
	else{

	$banner_image=	$_POST['old_banner_value'];
	}
	
	$modified_on=date("Y-m-d H:i:s");

	
	  $query="UPDATE banner SET title='$title',sub_title='$sub_title',banner_image='$banner_image',modified_on='$modified_on' WHERE  id='$edit_id'";
	  echo $query;
		$result = mysqli_query($con,$query);
           if($result){
            $msg= "Banner Details added  successfully.";
     }

	
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2 class="h2">Edit Banner</h2>
</div>



<div class="container my-5 form">
	<form action="" class="need-validation" method="post" novalidate enctype="multipart/form-data">
	<?php if($msg!="")
  {
	  echo '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong>'.$msg.'
  </div>';

}
$edit_id=$_GET['editid'];
$ret=mysqli_query($con, "SELECT *  FROM banner WHERE id='$edit_id'");
$row=mysqli_fetch_array($ret);
?>

<div class="form-group">
	<label for="title"><b>Title</b></label>
	<input type="text" name="title" class="form-control" id="title" value="<?php echo $row['title'];?>" required>
</div>
<div class="form-group">
	<label for="title"><b>Sub Title</b></label>
	<input type="text" name="sub_title" class="form-control" id="sub_title" value="<?php echo $row['sub_title'];?>" required>
</div>
<div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="banner_image" >
    <div class="validation"></div>
	</div>	
	<?php
if($row['banner_image'])
{
	?>
<!-- 	<img src="<?php echo 'uploads/addbanner/'.$row['banner_image']; ?>" alt="No image found" width="200" height="150"/>
 -->	<input type="hidden" name="old_banner_value" id="old_banner_value" value="<?php echo $row['banner_image'];?>">
<?php
}
?>
<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-dark font-weight-bold text-white " value="Submit"/>
</div>

		
	</form>
	
</div>



</main>
<?php include('footer.php');?>
