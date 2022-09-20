<?php include('dashboard.php');?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2 class="h2">Manage Banner</h2>
</div>

<div class="container">
 <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>title</th>
          <th>subtitle</th>
          <th>image</th>
          <th>action</th>
        </tr>
      </thead>
     <tbody>
    <?php
$ret=mysqli_query($con,"select *from  banner");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['sub_title'];?></td>
<td><img src="<?php echo 'uploads/addbanner/'.$row['banner_image']; ?>" alt="No image found" width="200" height="150"/></td>
<td><a href="EditBanner.php?editid=<?php echo $row['id'];?>"><b>Edit</b></a><br/>
<a href="DeleteBanner.php?deleted=<?php echo $row['id'];?>"onclick="return confirm('Are you sure want to delete the data..?')"><b>Delete</b></a></td>
</tr>
  <?php 
$cnt=$cnt+1;
}?></tbody>
    </table>
  </div>


</main>
<?php include('footer.php');?>
