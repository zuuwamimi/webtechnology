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
					<th>Booking Name</th>
					<th>Date of booking</th>
					<th>Place</th>
					<th>RRR</th>
					<th>Delete</th>
					
					
				</tr>
			</thead>
			<tbody>
				<?php
		include('conn.php');
		$result = $con->prepare("SELECT * FROM bookingg");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	$book_name=$row['book_name'];
	$dateofbook=$row['dateofbook'];
	$place_book=$row['place_book'];
	$rrr=$row['rrr'];
	echo "<tr>
		<td>$book_name </td>
		<td> $dateofbook </td>
		<td> $place_book</td>
		<td> $rrr</td>
		<td><a href =''>Delete</a></td>
		
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