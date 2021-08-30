<?php
include_once 'filenames.php';


$file = fopen("1ST.csv","r");

while(! feof($file)){

  print_r(fgetcsv($file));


}
fclose($file);




?>