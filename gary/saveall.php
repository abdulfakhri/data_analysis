<?php
//getting file names from filesnames.php
include_once 'filenames.php';

//names are stored in the string we need to covert strings to array
$nms=explode(',',$names);
$n=count($nms);


for($i=0;$i<5;$i++){

//echo $nms[$i];

while($nms[$i] !=null){
$file = fopen("$nms[$i]","r");
print_r(fgetcsv($file));
fclose($file);
}



}

?>