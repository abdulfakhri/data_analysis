<?php
/*
include_once "filenames.php";
$ar=explode(",",$names);
$n=count($ar);
for($i=0;$i<$n;$i++){
//echo $ar[$i];
$fn=$ar[$i]."<br/>";
$co=count($fn);
*/

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garyl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$file = fopen("1AG.csv","r");

while(! feof($file)){

  //print_r(fgetcsv($file)."<br/>");
  $data=fgetcsv($file);

  for ($i=0; $i<$n; $i++){
//echo $data[$i];
    $ar=explode(" ",$data[$i]);
 



  }

/*
$time=$data[0];
  $open=$data[1];
  $high=$data[2];
  $low=$data[3];
  $Company=2;
  $close=$data[4];
  $volume=$data[5];
for ($i=0; $i<$n; $i++){
$sql = "INSERT INTO historydata (H_date,PriceOpen,PriceHigh,PriceLow,PriceClose,Volume,CompanyID)
VALUES ('$time','$open','$high','$low','$close','$volume','$Company')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
  */
//echo $time."   ".$open." ".$high." ".$low." ".$close;

}

?>