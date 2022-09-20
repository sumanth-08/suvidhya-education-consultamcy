<?php
include('dbconnection.php');
$deleted_id=$_GET['deleted'];
$query="DELETE FROM banner WHERE id='$deleted_id'";

$result = mysqli_query($con,$query);
           if($result){
            $msg= "banner Details deleted  successfully.";
      header('location:ManageBanner.php');
  
	 }
?>

<html>
<head>
	</head>
	<body>
		<script>
			confirm('are you sure want to delete');
		</script>
	</body>
		</html>


<?php
include('footer.php');

?>