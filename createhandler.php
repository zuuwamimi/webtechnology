<?php
if (isset($_POST["submit"])) {
require_once "conn.php";
session_start();
	$first=$_POST["first"];
	$last=$_POST["last"];
	$pho_no=$_POST["pho_no"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	echo $first;
	$sql="INSERT INTO customer (first,last,pho_no,email,address,gender,username,password) VALUES(:first,:last,:pho_no,:email,:address,:gender,:username,:password)";
	$result=$con->prepare($sql);
	$result->execute(array(":first"=>$first,":last"=>$last,":pho_no"=>$pho_no,":email"=>$email,":address"=>$address, ":gender"=>$gender,":username"=>$username,":password"=>$password));

	$_SESSION ['Success']="added";
	header("location:new.php");
}


?>