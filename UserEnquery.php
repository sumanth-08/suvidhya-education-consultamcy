<?php include('UserHeader.php');?>


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
    margin: 1px;
  }
</style>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Enquiries</h1>
</div>

<form action="" method="POST">
<center>
<table>
	
  <tr>

    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>Mobile</b></td>
    <td><b>Message</b></td>
    <td><b>Result</b></td>


  </tr>
    <input type="text" class="btn" name="email" placeholder="Email">
	<input type="submit" class="btn" name="search" value="View">
  <br><br>
</form>

<?php
require('dbconnection.php');


if (isset($_POST['search'])){

	$email=$_POST['email'];
  
  $query="SELECT * FROM `contactus` WHERE email='$email'";
  $query_run = mysqli_query($con,$query);
  
   while ( $row = mysqli_fetch_array($query_run)) {

    ?>
    <tr>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['phone']?></td>
      <td><?php echo $row['message']?></td>
 <!--<td><b><a href="#">Accept</a><br><a href="#">Reject</a></b></td>
 -->




 
    </tr>

    <?php
   }


 } 
?>
</center>
</table>
 <button style="padding: 10px; margin: 20px;" class="btn"><a href="user/contact.php">RESUBMIT</a></button>

</main>
<?php include('footer.php');?>
