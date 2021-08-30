<?php
include_once 'filenames.php';

$nms=explode(',',$names );

$n=count($nms);

for($i=0;$i<$n;$i++){
  
  //echo trim($nms[$i])."<br/>";

 $file = fopen((trim($nms[$i])),"r");
while(! feof($file)){
  print_r(fgetcsv($file));
}
fclose($file);

}






?>