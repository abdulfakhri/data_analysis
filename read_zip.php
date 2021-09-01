<?php
$zip = zip_open("newd.zip");

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
      $contents = zip_entry_read($zip_entry);
      echo "$contents<br>";
      zip_entry_close($zip_entry);
    }
  echo "</p>";
  }
zip_close($zipfile);
} 

readContents($zip);

readName($zip);

