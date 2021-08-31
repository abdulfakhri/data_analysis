<?php
$zip = zip_open("test.zip");

if ($zip) {
  while ($zip_entry = zip_read($zip)) {
    echo "<p>Name: " . zip_entry_name($zip_entry) . "<br>";
    // Open directory entry for reading
    if (zip_entry_open($zip, $zip_entry)) {
      echo "File Contents:<br>";
      // Read open directory entry
      $contents = zip_entry_read($zip_entry);
      echo "$contents"."<br>";
      zip_entry_close($zip_entry);
    }
  echo "</p>";
  }
zip_close($zip);
}
?>