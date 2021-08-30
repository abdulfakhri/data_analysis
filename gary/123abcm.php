<?php
include_once 'filenames.php';

$nms=explode(',',$names );

$n=count($nms);

for($i=0;$i<5;$i++){
//for($i=0;$i<$n;$i++){
  
  //echo trim($nms[$i])."<br/>";

 $file = fopen((trim($nms[$i])),"r");
while(! feof($file)){
  
  //print_r(fgetcsv($file));
  
    $data=fgetcsv($file);
    $k=count($data);

    print_r($data[0])."<br/>";
    print_r($data[1])."<br/>";
    print_r($data[2])."<br/>";
    print_r($data[3])."<br/>";
    print_r($data[4])."<br/>";
    print_r($data[5])."<br/>";


}
fclose($file);

}






?>