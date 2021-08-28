<?php
$servername = "localhost";
$username = "u587940520_garyl";
$password = "!@#123qweasdZXC";
$dbname = "u587940520_garyl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $name = $csv[0];
  $age = $csv[1];
  $country = $csv[2];
  mysql_query("INSERT INTO employee VALUES ('$name','$age','country')");
 }
}
?>