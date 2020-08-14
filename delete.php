<?php
include("conn.php");
//session_start();

if (isset($_GET['id'])){
    $cust_id=$_GET['id'];
   // $sql = "DELETE FROM customer WHERE cust_id = :cust_id";


    $stmt = $con->prepare("DELETE FROM customer WHERE cust_id = :cust_id");
    $stmt->bindValue(':cust_id',$cust_id);
    $stmt->execute();

    //$_SESSION['success'] = 'Successful delete';
    //header("location:manage.php" ) ;
    echo "<script>alert('deleted')</script>";
     echo "<script>window.open('manage.php')</script>";
}
?>