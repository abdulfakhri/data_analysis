<?php
include_once 'filenames.php';

$nms=explode(',',$names );
//echo $nms[3];
$var=$nms[3];
$var=trim($var);

$file = fopen($var,"r");
while(! feof($file)){
  print_r(fgetcsv($file));
}
fclose($file);




?>