<?php
$zip = zip_open("test.zip");

if ($zip) {
  while ($zip_entry = zip_read($zip)) {
   
   $zipfiles= zip_entry_name($zip_entry);

   $zipfiles = str_replace("garyData/","",$zipfiles);
   echo $zipfiles.",<br/>";


  }
  zip_close($zip);
}
?>