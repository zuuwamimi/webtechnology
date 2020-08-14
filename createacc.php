<?php
session_start();
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
		?>

	<div align="center">
	<div class="container pt-3">
	<div class="row content">
		<div class="col-sm-8">
			<form  method="POST" action="createhandler.php"  align="center" style="border: 1px solid; margin-top: 10px; margin-left: 50px; margin-bottom: 5px;">
				<legend><b>Register Here</b></legend>
				<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">First Name:</label>
						<input type="text" name="first" class="form-control" id="name" style="margin-left: 8px;" required>
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Last Name:</label>
						<input type="text" name="last" class="form-control" id="lname" style="margin-left: 8px;" required>
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Phone Number:</label>
						<input type="text" name="pho_no" class="form-control" id="pho" style="margin-left: 8px;" required>
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Email:</label>
						<input type="text" name="email" class="form-control" id="email" style="margin-left: 8px;" require>
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Address:</label>
						<input type="text" name="address" class="form-control" id="address" style="margin-left: 8px;" required>
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Gender:</label>
						<input type="radio" name="gender" class="radio-inline" value="Male" id="" required>Male
						<input type="radio" name="gender" class="radio-inline" value="Female" id="" required>Female<br>
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Username:</label>
						<input type="text" name="username" class="form-control" id="usr" style="margin-left: 8px;" required>
					</div>
				</div>

			</div>
			<div class="row">	
				<div class="col-sm-10">
					<div class="form-group">
						<label for="usr" style="margin-left: -300px;">Password:</label>
						<input type="password" name="password" class="form-control" id="pwd" style="margin-left: 8px;" required>
					</div>
				</div>

			</div>
	<button type="submit" name="submit" class="btn btn-success" style="margin-top: 8px;" onclick="return validate()" id="btn">Create</button>
			

			</div>
		
	</div>
</div>
</div>
<<script>
	var b = document.querySelector('btn');
	var p=document.getElementById('pho')
	 var e=document.getElementById('email');
	// var s=document.getElementById('pho');
	// var e=document.getElementById('email');
	// var a=document.getElementById('address')
	// var u=document.getElementById('urs')
	// var p=document.getElementById('pwd');
		// var namereg= /^[a-z A-Z]$/;
		// var passreg= /^[a-zA-Z0-9]{6,15}$/;
		var phonereg= /^[0-9]{10}$/;
		 var emailreg =/^([\w]{5,15})\@([a-z0-9]{4,8})\.([a-z]{3,5})$/;
		function validate(){
			// if(namereg.test(n.value)==false){
			// 	alert('enter valid fgfgame');
			// 	a.focus();
			// 	return false;
			// }else if(namereg.test(l.value)==false){
			// 	alert('Enter valid last');
			// 	l.focus();
			// 	return false;
			}else if(phonereg.test(p.value)==false){
				alert('Enter valid phone');
				n.focus();
				return false;
			}else if(emailreg.test(e.value)==false){
				alert('enter correct email');
				e.focus();
				return false;
			// }else if(namereg.test(a.value)==false){
			// 	alert('enter valid address');
			// 	a.focus();
			// 	return false;

			// }else if(namereg.test(u.value)==false){
			// 	alert('enter valid uname');
			// 	u.focus();
			// 	return false;

			// }else if(passreg.test(p.value)==false){
			// 	alert('enter valid password');
			// 	p.focus();
			// 	return false;
			// }

		 };
 </script> -->

	<?php
	require_once "footer.php";
	?>
	</body>
</html>