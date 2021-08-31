<?php
//getting file names from filesnames.php
include_once 'filenames.php';

//names are stored in the string we need to covert strings to array
$nms=explode(',',$names);
$n=count($nms);
//echo $n;
//print all file names
//for($i=2000;$i<$n;$i++){
for($i=0;$i<$n;$i++){
  $companyCodes=str_replace(".csv","",$nms[$i]);
  
  $fnames=explode(",",$companyCodes);

  for($j=0;$j<count($fnames);$j++) {

$servername = "localhost";
$username = "u587940520_gray";
$password = "!@#123qweasdZXC";
$dbname = "u587940520_gary";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  $sql = "INSERT INTO CompanyCodes(CompanyCode) VALUES('$fnames[$j]')";
  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

  }

}

?>