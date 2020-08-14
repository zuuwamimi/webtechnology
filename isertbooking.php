<?php 
session_start();
include 'auth.php';

 ?>
<?php
include ('conn.php');
//session_start();
?>
<?php
if (isset($_POST["submit"])) {
	$booking_name=$_POST["book_name"];
	$date=$_POST["dateofbook"];
	$place=$_POST["place_book"];
	$rrr=$_POST["rrr"];
	
	$sql="INSERT INTO bookingg (book_name,dateofbook,place_book,rrr) VALUES(:book_name,:dateofbook,:place_book,:rrr)";
	$result=$con->prepare($sql);
	$result->execute(array(":book_name"=>$booking_name,":dateofbook"=>$date,":place_book"=>$place,":rrr"=>$rrr));
	
	echo"rrrrrrr";
	$_SESSION ['Success']="SUCCESSFULL SCHOOL ADDED";
	header("location:book.php");
}


?>