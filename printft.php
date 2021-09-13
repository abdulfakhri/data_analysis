<?php

//$connect = new PDO("mysql:host=localhost;dbname=gar", "root", "root");
$connect = new PDO("mysql:host=localhost;dbname=u587940520_gary", "u587940520_gray", "!@#123qweasdZXC");

$start_date_error = '';
$end_date_error = '';

if(isset($_POST["export"])){

 if(empty($_POST["start_date"])){

  $start_date_error = '<label class="text-danger">Start Date is required</label>';

 }else if(empty($_POST["end_date"])){

  $end_date_error = '<label class="text-danger">End Date is required</label>';

 }else{

  $file_name = 'ASX Data.csv';
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$file_name");
  header("Content-Type: application/csv;");

  $file = fopen('php://output', 'w');

  //$header = array(" No ","        Date        " ,"   Close   ", " Volume ", " Company Code "," Share Issues "," Market Cap ");

  $header = array(" No ","   Date    " ,"   Close   ", "  Open  ", "   High  ","  Low  ","  Volume  ");

  fputcsv($file, $header);

  
    
 $query = "
  SELECT * FROM company_data 
  WHERE hdate >= '".$_POST["start_date"]."' 
  AND hdate <= '".$_POST["end_date"]."' 
  ORDER BY hdate ASC
  ";
  
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $i=1;


foreach($result as $row){

$rowData=explode(",",$row["file_contents"]);  
//14D,20180912,0.25,0.25,0.205,0.225,3768536,0
//Date	Price	Open	High	Low	Vol.	Change %

$company_code=$rowData[0];
$date=$row["hdate"];
$priceClose=$rowData[2];
$open=$rowData[3];
$high=$rowData[4];
$low=$rowData[5];
$volume=$rowData[6];

$priceClose=round($priceClose,2);
$open=round($open,2);
$high=round($high,2);
$low=round($low,2);
$volume=round($volume,2);

   $data = array();
   
   $data[] = $i++;
   $data[] = $date;
   $data[] = $priceClose;
   $data[] = $open;
   $data[] = $high;
   $data[] = $low;
   $data[] = $volume;

   fputcsv($file, $data);


  }
  fclose($file);
  exit;



 }
}

$query = "SELECT * FROM company_data LIMIT 1000 ";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>

<html>
 <head>
  <title>ASX</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
 </head>
 <body>
  <div class="container box">
   <h1 align="center">ASX</h1>
   <br />
   <div class="table-responsive">
    <br />
    <div class="row">
     <form method="post">
      <div class="">
       <div class="col-md-4">
     <input type="text" name="start_date" class="form-control" placeholder="Start Date"/>
        <?php //echo $start_date_error; ?>
       </div>
       <div class="col-md-4"> 
        <input type="text" name="end_date" class="form-control" placeholder="End Date"/>
        <?php //echo $end_date_error; ?>
       </div>
      </div>
      <div class="col-md-4">
       <input type="submit" name="export" value="Export" class="btn btn-info" />
      </div>
     </form>
    </div>
    <br />
    <table class="table table-bordered table-striped">
     
     <tbody>
      <?php
      $cr=1;
      foreach($result as $row){

 $rowData=explode(",",$row["file_contents"]);  
//14D,20180912,0.25,0.25,0.205,0.225,3768536,0
//Date	Price	Open	High	Low	Vol.	Change %

$company_code=$rowData[0];
$date=$rowData[1];
$priceClose=$rowData[2];
$open=$rowData[3];
$high=$rowData[4];
$low=$rowData[5];
$volume=$rowData[6];
echo "<th>".$company_code;
echo "<table>";
echo '<thead>
      <tr>
       <th>No.</th>
       <th>Close</th>
       <th>Open</th>
       <th>High</th>
       <th>Low</th>
       <th>Volume</th>
      </tr>
     </thead>';
echo "<tr>";
echo "<td>".$cr++."</td>";
echo "<td>".$priceClose."</td>";
echo "<td>".$open."</td>";
echo "<td>".$high."</td>";
echo "<td>".$low."</td>";
echo "<td>".$volume."</td>";
echo "</tr>";
echo "</table>";
echo "</th>";

      }
      ?>
     </tbody>
    </table>
    <br />
    <br />
   </div>
  </div>
 </body>
</html>

<script>

$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });
});

</script>

