<?php
$con = new PDO("mysql:host=localhost;port=3306;dbname=tour",'root','');
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>