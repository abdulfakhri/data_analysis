<?php

////////////////////////////////////////////////////////////////////////////////////////////
$connect = mysqli_connect("localhost", "abfa_rgu", "123qweasdzxc", "abfa_rgu");
////////////////////////////////////////////////////////////////////////////////////////////
$output = '';
if(isset($_POST["import"])){

 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) {
 //check selected file extension is present in allowed extension array

  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'><center><h2>All Users Are Registered Successfully  in The System</h2></center></label><br /><table class='table table-bordered'>";

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++){
    $output .= "<tr>";
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
    $password = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(17,$row)->getValue());
    $username = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(32,$row)->getValue());
    $CDate=date("Y-m-d");   
    $query = "INSERT INTO client(name,username,password) VALUES('".$name."','".$username."', '".$password."')"; 
    mysqli_query($connect, $query); 
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$password.'</td>';
    $output .= '<td>'.$username.'</td>';
    }
    $output .= '</tr>';
   }
  } $output .= '</table>';

 }else{
  $output = '<label class="text-danger">Not Registered, There Is Problem in Purchase Bill</label>'; //if non excel file then
 }

?>

  <div class="container">
   <h3 align="center">Automatically Register All the Products in 1 Second</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel Format Big Data</label>
    <input type="file" name="excel" />
    
    <input type="submit" name="import" class="btn btn-info" value="Register" />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>