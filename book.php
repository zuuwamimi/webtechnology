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
	
		
	<div align="center">
	<div class="container pt-3">
	<div class="row">
		<div class="col-sm-6">
			
			<form action="isertbooking.php"  align="center" style="border: 1px solid; margin-top: 10px; margin-left: 50px;" method="POST">
					<legend style="text-align: center;"><h4 style="text-align: center; color: #0086b3">Make Booking now!!</h4></legend>
					

			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Booking Name:</label>
						<input type="text" name="book_name" class="form-control" id="usr" style="margin-left: 8px;">
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Date of Booking:</label>
						<input type="Date" name="dateofbook" class="form-control" id="usr" style="margin-left: 8px;">
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Place of Booking:</label>
						<input type="text" name="place_book" class="form-control" id="usr" style="margin-left: 8px;">
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">RRR:</label>
						<input type="text" name="rrr" class="form-control" id="usr" style="margin-left: 8px;">
						<input type="submit" name="submit" class="btn btn-success" style="margin-top: 10px;" value="Book Now">
					</div>
				</div>
			</div>
			
			
			
  
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>



	<?php
	require_once "footer.php";
	?>








</body>
</html>