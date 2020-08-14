<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 3;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<div align="center">
  <div class="container pt-3">
  <div class="row content">
    <h1 style="color:#0066cc;">Tourism Navigator System</h1>
<h2 style="color:#0066cc">Login Form</h2>

<form action="handlerl.php" method="POST">

  <div class="imgcontainer" style="background-color:#e6f9ff ">
    <img src="image/logo1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
        
    <button type="submit" name="submit" onclick="return validate()" id="del">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div align="center">
            <p><a href="createacc.php" class="text"> Create a new account</a></p>
        </div>


</form>
</div>
</div>
</div>
<script>
    var n=document.queryElementByid('username');
    var del = document.querySelector('del');
    var p=document.getElementById('password');
    var namereg= /^[a-z A-Z]{30,}$/;
    var passreg= /^[a-zA-Z0-9]{6,15}$/;
    function validate(){
      if(namereg.test(n.value)==false){
        alert('enter valid name');
        a.focus();
        return false;
      }else if(passreg.test(p.value)==false){
        alert('Enter valid password');
        p.focus();
        return false;
      }

     };
 </script>

</body>
</html>
