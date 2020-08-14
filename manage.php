<?php 
session_start();
include 'auth.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>new page</title>

	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body style="background-color:;  ">
	
		
		<?php
	require_once "header.php";
	require_once "menu.php";
	?>

	<div class="container pt-3">
		<div class="row" style="margin-top: 10px;">
		<div class="col-sm-10">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Address</th>
					<th>Gender</th>
					<th>Edit</th>
					<th>Delete</th>
					
					
				</tr>
			</thead>
			<tbody>
				<?php
		include('conn.php');
		$result = $con->prepare("SELECT * FROM customer");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	$id=$row['cust_id'];
	$fname=$row['first'];
	$lname=$row['last'];
	$phone=$row['pho_no'];
	$email=$row['email'];
	$address=$row['address'];
	$gender=$row['gender'];
	echo "<tr>
		<td>$id </td>
		<td> $fname </td>
		<td> $lname</td>
		<td> $phone</td>
		<td> $email</td>
		<td> $address</td>
		<td> $gender</td>
		<td><a href ='edit.php?id=$id'>Edit</a></td>
		<td><a href ='delete.php?id=$id'>Delete</a></td>
		
	</tr>";
	
	
		}
	?>
			</tbody>

		</table>
		
	</div>
</div>
</div>

	<?php
	require_once "footer.php";
	?>








</body>
</html>