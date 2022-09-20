<?php
include('dashboard.php');
$edit_id=$_GET['editid'];
?>

<?php
$msg="";
if (isset($_POST['submit']))
{

	$title=$_POST['title'];
	$icon=$_POST['icon'];
  $description=$_POST['description'];
	$modified_on=$_POST['Modified_on'];


$query="UPDATE `service` SET title='$title',icon='$icon',description='$description',Modified_on='$modified_on' WHERE  id='$edit_id'";



 $result = mysqli_query($con,$query);
  if($result){

    $msg= "Service details updated successfully.";

  }else{
    $msg= "Sorry, Failed to update the data.";
    }

  
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Services</h1>
  </div>
	<div class="container my-5 form">

  <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">

 <?php if($msg!="")
  {
	  echo '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong>'.$msg.'
  </div>';

}
$edit_id=$_GET['editid'];
$ret=mysqli_query($con,"select * from  service where id='$edit_id'");
$row=mysqli_fetch_array($ret);
?>
<div class="form-group">
      <label for="title"><b>Title</b></label>
      <input type="text" class="form-control" id="title" name="title"   value="<?php echo $row['title'];?>" required>
    <div class="validation"></div>
	</div> 
 <div class="form-group">
      <label for="icon"><b>Icon</b></label>
      <input type="text"  class="form-control" id="icon" name="icon"   value="<?php  echo $row['icon'];?>" required>
    <div class="validation"></div>
	</div>
 <div class="form-group">
      <label for="about"><b> Description</b></label>
      <input id="description" class="form-control" name="description" value="<?php echo $row['description'];?>"   
       required>
      <div class="validation"></div>
    </div>
	
	<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-dark text-white " value="Submit"/>
</div> 
</form>
</div>
</main>


<?php
include('footer.php');
?>
