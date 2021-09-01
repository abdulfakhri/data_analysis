<?php
$file = fopen("alldata.csv","r");
while(! feof($file))
  {
  print_r(fgetcsv($file));
  }
fclose($file);
?>