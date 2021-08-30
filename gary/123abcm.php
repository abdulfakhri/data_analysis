<?php
//getting file names from filesnames.php
include_once 'filenames.php';

//names are stored in the string we need to covert strings to array
$nms=explode(',',$names);
$n=count($nms);


//for($i=0;$i<5;$i++){

for($i=0;$i<$n;$i++){
  
  //echo trim($nms[$i])."<br/>";

$file = fopen((trim($nms[$i])),"r");

while(! feof($file)){
  
  //print_r(fgetcsv($file));
    $companyCodes=str_replace(".csv","",$nms[$i]);
    $data=fgetcsv($file);
    $k=count($data);
    /*
    print_r($nms[$i])."<br/>";
    print_r($data[0])."<br/>";
    print_r($data[1])."<br/>";
    print_r($data[2])."<br/>";
    print_r($data[3])."<br/>";
    print_r($data[4])."<br/>";
    print_r($data[5])."<br/>";
    */

  $time=$data[0];
  $open=$data[1];
  $high=$data[2];
  $low=$data[3];
  $Company=$nms[$i];
  $close=$data[4];
  $volume=$data[5];


  $sql = "INSERT INTO historydata (H_date,PriceOpen,PriceHigh,PriceLow,PriceClose,Volume)
  VALUES ('$time','$open','$high','$low','$close','$volume')";
  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

  
}
fclose($file);
}

?>