<?php
$localhost = "four.crj5jnssjjr0.us-east-1.rds.amazonaws.com";
$username = "Four";
$password = "dtdmnhom4";
$db = "four";
$conn = new PDO("mysql:host=$localhost;dbname=$db,charset=utf8", $username, $password);

?>