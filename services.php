<?php include('dashboard.php');?>

<?php 
if(isset($_POST['submit']))
{
  $title=$_POST['title'];
  $icon=$_POST['icon'];
  $description=$_POST['description'];
  $created_on=date("Y-m-d H:i:s");
  $modified_on=date("Y-m-d H:i:s");
  

 $query="INSERT into service(title,icon,description,Created_on, Modified_on)
VALUES ('$title','$icon', '$description', '$created_on','$modified_on')";
    
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
<h2 class="h2">Add Services</h2>
</div>

  <div class="container my-5 form">
<!--  <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
 -->
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<?php 
	if($msg!=""){
    echo '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong>'.$msg.'
  </div>';
}
$ret=mysqli_query($con,"select * from  service");
$row=mysqli_fetch_array($ret);
$cnt=1;
/*while ($row=mysqli_fetch_array($ret)) {*/
?>
 
 <input type="hidden" name="page_id" id="page_id" value="<?php echo $row['id'];?>"/>
 	<div class="form-group">
      <label for="title"><b> Title</b></label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" required>
    <div class="validation"></div>
  </div> 
  <div class="form-group">
      <label for="icon"><b> Icon</b></label>
      <input type="text" class="form-control" id="icon" placeholder="Entersub icon" name="icon" required >
    <div class="validation"></div>
  </div> 
 <div class="form-group">
      <label for="about"><b> Description</b></label>
      <textarea id="description" class="form-control" name="description" placeholder="Please include the description" row="6" required></textarea>
      <div class="validation"></div>
    </div>
 <div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-dark text-white " value="Submit"/></div>

</form>
</div>
</main>

<?php include('footer.php');?>
