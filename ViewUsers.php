<?php include('dashboard.php');?>

<style>
  table,tr,td{
    border: 2px solid #d9d9d9;
    width: 1000px;
    break-before: 1px solid black;
    text-align: center;
    height: 40px;
    padding: 5px;

  }
  
  
  .btn{
    background-color: white;
    border:3px solid black;
    font-weight: bold;
  }


</style>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">View Users</h1>
</div>

<form action="" method="POST">
<center>
<table>
  <tr>

    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>Mobile</b></td>
    <td><b>Message</b></td>
    <td><b>Registration date</b></td>
    <td><b>Action</b></td>
<?php
require('dbconnection.php');


if (isset($_POST['search'])){
  
  $query="SELECT * FROM `contactus`";
  $query_run = mysqli_query($con,$query);
  
   while ( $row = mysqli_fetch_array($query_run)) {

    ?>
    <tr>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['phone']?></td>
      <td><?php echo $row['message']?></td>
      <td><?php echo $row['created_on']?></td>
      <td><b><a href="#">Accept</a><br><a href="#">Reject</a></b></td>


  </tr>
  <input type="submit" class="btn" name="search" value="UPDATE">
  <br><br>
</form>



    </tr>

    <?php
   }


 } 
?>
</table>

</main>


<?php include('footer.php');?>
