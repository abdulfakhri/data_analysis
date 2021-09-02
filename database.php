<?php 
$hostname     = "localhost";
$username     = "u587940520_gray";
$password     = "!@#123qweasdZXC"; 
$databasename = "u587940520_gary"; 
// Create connection 
$conn = new mysqli($hostname, $username, $password,$databasename);
 // Check connection 
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }
?>