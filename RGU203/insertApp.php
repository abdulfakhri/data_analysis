<?php
//$connect = mysqli_connect("localhost","u587940520_garyl","!@#123qweasdZXC","u587940520_garyl" );

// Create connection
$connect = mysqli_connect("localhost","u587940520_garyl","!@#123qweasdZXC","u587940520_garyl" );
// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

$output = '';

if(isset($_POST["import"])){

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 
 if(in_array($extension, $allowed_extension)) {

  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
 
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
 
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "
  <label class='text-success'>
  <center><h2>Sheets Are Reformed Successfully</h2>
  </center></label><br />
  <table class='table table-bordered'>";

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){

   $highestRow = $worksheet->getHighestRow();

   for($row=1; $row<=$highestRow; $row++){

    $output .= "<tr>";

    $Date = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
    $Price = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
    $Open = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
    $High = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
    $Low = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
    $Vol = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
    $Change = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
  
 //VALUES("'.$Date.'","'.$Price.'","'.$High.'","'.$Open.'","'.$Low.'","'.$Vol.'","'.$Change.'")"; 

     $query = "INSERT INTO cba_data(Date_f,Price_f,High_f,Open_f,Low_f,Vol_f,Change_f)
     VALUES('$Date','$Price','$High','$Open','$Low','$Vol','$Change')"; 
    
    $res=mysqli_query($connect, $query); 

if ($res) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);

 
 
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
   <h3 align="center">Automatically Reform All the sheets in 1 Second</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select CBA History Data</label>
    <input type="file" name="excel" required/>
   <br>
    <input type="submit" name="import" class="btn btn-info" value="Reform" required />
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