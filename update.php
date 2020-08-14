<?php
require_once "conn.php";
	session_start();
	if ( isset($_POST['submit'])){

   
    $sql = "UPDATE customer SET first = :first, last=:last, pho_no =:pho_no,
            email = :email, address = :address
            WHERE cust_id = :cust_id";
    $stmt = $con->prepare($sql);
    $stmt->execute(array(
        ':first' => $_POST['first'],
        ':last' => $_POST['last'],
        ':pho_no' =>$_POST['pho_no'],
        ':email' => $_POST['email'],
        ':address' => $_POST['address'],
        ':cust_id' => $_POST['cust_id']));
    $_SESSION['success'] = 'Record updated';
    header( 'Location:manage.php' ) ;
   
}
?>