<?php include('dashboard.php');?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2 class="h2">Manage Services</h2>
</div>
<div class="container">
 <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Icon</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
     <tbody>
    <?php
$ret=mysqli_query($con,"select *from  service");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['icon'];?></td>
<td><?php echo $row['description'];?></td>

<td class="font-weight-bold"><a href="EditService.php?editid=<?php echo $row['id'];?>">Edit</a><br/>
<a href="DeleteService.php?deleted=<?php echo $row['id'];?>"onclick="return confirm('Are you sure want to detele this data..?')">Delete</a>
</td>
</tr>
  <?php 
$cnt=$cnt+1;
}?></tbody>
    </table>
  </div>
</div>
</main>


<?php include('footer.php');?>
