<?php
$connect = mysqli_connect("localhost","u587940520_garyl","!@#123qweasdZXC","u587940520_garyl" );
// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["submit_file"])){

 $file = $_FILES["file"]["tmp_name"];

 $file_open = fopen($file,"r");

 while(($csv = fgetcsv($file_open, 1000, ",")) !== false){

  $name = $csv[0];

  $age = $csv[1];

  $country = $csv[2];

  $query="INSERT INTO employee(name, age, country) VALUES('$name','$age','country')";

   $res=mysqli_query($connect, $query); 

if ($res) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);


 }

}
?>