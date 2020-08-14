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
	<div class="col-sm-10">
	<img class="w3-animate-fading" style="	width: 100%;
	margin-top: 10px;
	margin-left: 50px;
	
	height: 500px;" src="image/ttt.gif"  <p style="margin-top: 20px; margin-left: 50px;"><h4 style="margin-left: 50px;"><b><i>ZANZIBAR IS THE PIECE OF LAND</i></b></h4>
Zanzibar is home to people from across the world, and it is this diversity that makes it such a unique travel destination.<br> This cultural convergence can be seen in the diversity of the region’s food, in the polyglot nature of the Swahili language that was born here<br>
				</p>

	</div>
</div>
<?php



require_once "footer.php";
?>







</body>
</html>