<?php
session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password']=$_POST['password'];
include 'auth.php';
include 'conn.php';
if (isset($_POST["submit"])){

  $username=$_POST["username"];
  $password=$_POST["password"];
  
  $sql="SELECT * FROM customer WHERE username= :username AND password= :password";
  $stmt=$con->prepare($sql);
  $stmt->execute(array("username"=>$username,"password"=>$password));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
      

  if ($stmt->rowCount()>0) {
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    
    header("location:home.php");
        }

    
    

  }else{$sql="SELECT * FROM admin WHERE username=:username AND password= :password";
  $stmt=$con->prepare($sql);
  $result=$stmt->execute(array("username"=>$username,"password"=>$password));
  $_SESSION['user']=$username;
  $_SESSION['pass']=$password;
  header("location:home2.php");
    
  
}
  ?>
