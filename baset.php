<?php

$file = fopen("garyData/1AD.csv","r");
while(! feof($file))
  {
  //print_r(fgetcsv($file)."<br/>");
  $data=fgetcsv($file);

  $time=$data[0];

  echo $time."<br/>";
   //print_r($data);
/*
$keys = implode(', ', array_keys($data));
$values = "'" . implode("','", array_values($data)) . "'"."<br/>";

echo $values;
*/
  }
fclose($file);




?>