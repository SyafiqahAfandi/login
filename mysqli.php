<?php
$dbserver = "localhost";
$username = "root";
$password = "";
$dbname = "Login Form";
$mysqli = new mysqli($dbserver, $username, $password, $dbname);
if ($mysqli->connect_errno) {
 echo "Failed to connect to MySQL: " . $mysqli->connect_error;
 exit();
}