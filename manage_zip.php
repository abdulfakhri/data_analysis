<?php
include ('database.php');

$zipfile = zip_open("newd.zip");

function readName($zipfile){

if ($zipfile) {
  while ($zip_entry = zip_read($zipfile)) {
    // Get name of directory entry
    echo "Name: " . zip_entry_name($zip_entry) . "<br>";
  }
  zip_close($zipfile);
}


}

function readContents($zipfile){

if ($zipfile) {
  while ($zip_entry = zip_read($zipfile)) {
    echo "<p>Name: " . zip_entry_name($zip_entry) . "<br>";
    // Open directory entry for reading
    if (zip_entry_open($zipfile, $zip_entry)) {
      echo "File Contents:<br>";
      // Read open directory entry
      $contents = zip_entry_read($zip_entry,100000);
      echo "$contents<br>";
      zip_entry_close($zip_entry);
    }
  echo "</p>";
  }
zip_close($zipfile);
} 

}

//function uploadZip($zipfile){
if ($zipfile) {
  while ($zip_entry = zip_read($zipfile)) {
    echo "<p>Name: " . zip_entry_name($zip_entry) . "<br>";
    $names=zip_entry_name($zip_entry);
    // Open directory entry for reading
    if (zip_entry_open($zip, $zip_entry)) {
      echo "File Contents:<br>";
      // Read open directory entry
      $contents = zip_entry_read($zip_entry,100000);
      echo $contents."<br>";
    fclose($zipfile);
  $sql = "INSERT INTO gdata(filename,file_contents) VALUES('$names',' $contents')";
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
zip_close($zipfile);
}

//}
//echo "--------------------------------------------------------------------------------------------------------";

//readContents($zip);

//readName($zip);

//uploadZip($zip);