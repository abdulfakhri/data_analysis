<?php
$file = fopen("data.xlsx","r");
while(! feof($file))
  {
  print_r(fgetcsv($file));
  }
fclose($file);
?>