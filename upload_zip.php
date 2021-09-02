<?php
$zip = zip_open("newd.zip");

if ($zip) {

  while ($zip_entry = zip_read($zip)) {
    echo "<p>Name: " . zip_entry_name($zip_entry) . "<br>";
    $names=zip_entry_name($zip_entry);
    // Open directory entry for reading
    if (zip_entry_open($zip, $zip_entry)) {
      
      // Read open directory entry
     $contents = zip_entry_read($zip_entry,100000);
      
$sql = "INSERT INTO gdata(filename,file_contents) VALUES('$names','$contents')";
  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
 zip_entry_close($zip_entry);

}
  echo "</p>";
}

zip_close($zip);

}

?>