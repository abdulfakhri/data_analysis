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

readName($zip);

