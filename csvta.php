<?php 
$filename = 'asx.csv';

// The nested array to hold all the arrays
$the_big_array = []; 

// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $the_big_array[] = $data;	
    //echo $the_big_array[0][0][0];	
   if ($data!==null){
for($row = 0; $row < 17; $row++) {
  echo "<table>";
  
  for ($col = 0; $col < 6; $col++) {
       
    echo "<th>".$the_big_array[$row][$col]."</th>";
  }
   echo "</table>";
 
}
   }
   
  

  }


  // Close the file
  fclose($h);
}

// Display the code in a readable format
echo "<pre>";
//var_dump($the_big_array);

echo "</pre>";
?>