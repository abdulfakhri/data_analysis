<?php
$zip = zip_open("test.zip");

if ($zip) {
  while ($zip_entry = zip_read($zip)) {
    echo "<p>Name: " . zip_entry_name($zip_entry) . "<br>";
    $names=zip_entry_name($zip_entry);
    // Open directory entry for reading
    if (zip_entry_open($zip, $zip_entry)) {
      echo "File Contents:<br>";
      // Read open directory entry
      $contents = zip_entry_read($zip_entry);
      
      //echo $contents."<br>";
     

fclose($file);

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
  $sql = "INSERT INTO all_data(filename,file_contents) VALUES('$names',' $contents')";
  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);


 zip_entry_close($zip_entry);

}
  echo "</p>";
}

zip_close($zip);

}
?>