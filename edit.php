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
	<?php
	require_once "conn.php";
if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql="SELECT * FROM customer where cust_id='$id' ";
		$stmt=$con->query($sql);
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
	}
	?>
	

	<div align="center">
	<div class="container pt-3">
	<div class="row">
		<div class="col-sm-6">
			<p>Edit Customer</p>
<form method="POST" action="update.php" style="border: 1px solid;">
	<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
<p>FirsName:
<input type="text" name="first" value="<?php  echo $row['first']; ?>"></p>
</div>
</div>
</div>
<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
<p>LastName:
<input type="text" name="last" value="<?php echo$row['last']; ?>"></p>
</div>
</div>
</div>
<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
<p>Phone_Number:
<input type="text" name="pho_no" value="<?php  echo$row['pho_no']; ?>"></p>
</div>
</div>
</div>
<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
<p>Email:
<input type="text" name="email" value="<?php  echo$row['email']; ?>"></p>
</div>
</div>
</div>
<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
<p>Address:
<input type="text" name="address" value="<?php echo$row['address']; ?>"></p>
</div>
</div>
</div>

<input type="hidden" name="cust_id" value="<?= $id ?>">
<p><input type="submit" name="submit" value="Update"/>
<a href="manage.php">Cancel</a></p>
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