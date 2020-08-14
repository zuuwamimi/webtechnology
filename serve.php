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
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      
        <img src="image/tt1.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Forest</p>
<a href="book.php"><button type="button" class="btn btn-success">Book Now</button></a>
        </div>
      
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      
        <img src="image/ne2.gif" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Hotels</p>
<a href="book.php"><button type="button" class="btn btn-success">Book Now</button></a>
        </div>
      
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
     
        <img src="image/ne.gif" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
<a href="book.php"><button type="button" class="btn btn-success">Book Now</button></a>
        </div>
      
    </div>
  </div>

<div class="col-md-4">
    <div class="thumbnail">
     
        <img src="image/tt3.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
          <a href="book.php"><button type="button" class="btn btn-success">Book Now</button></a>

        </div>
      
    </div>
  </div>
</div>



<?php



require_once "footer.php";
?>







</body>
</html>