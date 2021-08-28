

<?php
////////////////////////////////////////////////////////////////////////////////////////////
$connect = mysqli_connect("localhost","u587940520_garyl","!@#123qweasdZXC","u587940520_garyl" );
////////////////////////////////////////////////////////////////////////////////////////////
$output = '';
if(isset($_POST["import"])){

 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 
 if(in_array($extension, $allowed_extension)) {

 //check selected file extension is present in allowed extension array

  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  $file2=  $_FILES["name"];
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'><center><h2>Products Are Registered Successfully  in Inventory</h2></center></label><br /><table class='table table-bordered'>";

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){
   $highestRow = $worksheet->getHighestRow();
   for($row=3; $row<=$highestRow; $row++){
    $output .= "<tr>";
    $Date = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
    $Price = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
    $Open = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
    $High = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
    $Low = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
    $Vol = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
    $Change = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
  

     $query = "INSERT INTO cba_data(Date_f,High_f,Price_f,Open_f,Low_f,Vol_f,Change_f)
    VALUES('".$Date."','".$Price."','".$Open."','".$Bd."','". $High."','".$Low."','".$Vol."')"; 
    
    mysqli_query($connect, $query); 
    $output .= '<td>'.$Date.'</td>';
    $output .= '<td>'.$Price.'</td>';
    $output .= '<td>'.$Open.'</td>';
    $output .= '<td>'.$High.'</td>';
    $output .= '<td>'.$Low.'</td>';
    $output .= '<td>'.$Vol.'</td>';
    $output .= '<td>'.$Change.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Not Registered, There Is Problem in Purchase Bill</label>'; //if non excel file then
 }
}
?>
<div>
 <?PHP  include 'nav.php'; ?>
</div>
  <center>
  <div class="container">
   <h3 align="center">Automatically Register All the Products in 1 Second</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Purchase Bill Excel Format</label>
    <input type="file" name="excel" required/>
   <br>
    <input type="submit" name="import" class="btn btn-info" value="Register" required />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>
  </center>
<div>



</div>