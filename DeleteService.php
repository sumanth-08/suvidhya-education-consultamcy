<?php
include('dbconnection.php');
$deleted_id=$_GET['deleted'];
$query="DELETE FROM service WHERE id='$deleted_id'";

$result = mysqli_query($con,$query);
	if($result){
    $msg= " Deleted  successfully.";
    header('location:ManageService.php');
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


