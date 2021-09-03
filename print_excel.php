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

  $header = array(" No ","        Date        " ,"   Close   ", " Volume ", " Company Code "," Share Issues "," Market Cap ");

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
$code=str_replace("newd/","",$rowData[0]);
$code=str_replace(".csv","",$code);

$vol=strchr($rowData[10]," ");
$volume=str_replace("$vol"," ",$rowData[10]);
$dateCr=date_create("$row[2]");
$date=date_format($dateCr,"d/m/y");
$volume = number_format($rowData[6]);
$priceClose =round($rowData[5],2);
$CompCode=$rowData[0];

   $data = array();
   $data[] = $i++;
   $data[] = $date;
   $data[] = $priceClose;
   $data[] = $volume;
   $data[] = $code;
   $data[] = "N/A";
   $data[] = "N/A";

   fputcsv($file, $data);
  }
  fclose($file);
  exit;
 }
}

$query = "SELECT * FROM company_data LIMIT 100 ";

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
      <div class="input-daterange">
       <div class="col-md-4">
     <input type="text" name="start_date" class="form-control" placeholder="Start Date"/>
        <?php echo $start_date_error; ?>
       </div>
       <div class="col-md-4"> 
        <input type="text" name="end_date" class="form-control" placeholder="End Date"/>
        <?php echo $end_date_error; ?>
       </div>
      </div>
      <div class="col-md-4">
       <input type="submit" name="export" value="Export" class="btn btn-info" />
      </div>
     </form>
    </div>
    <br />
    <table class="table table-bordered table-striped">
     
      <?php
      $cr=1;
      foreach($result as $row){
      //$ar=explode(",",$row["file_contents"]);

$rowData=explode(",",$row["file_contents"]);  
$code=str_replace("newd/","",$rowData[0]);
$code=str_replace(".csv","",$code);

$vol=strchr($rowData[10]," ");
$volume=str_replace("$vol"," ",$rowData[10]);
$dateCr=date_create("$rowData[1]");
$date=date_format($dateCr,"d/m/y");
$volume = number_format($rowData[6]);
$priceClose =round($rowData[5],2);
$CompCode=$rowData[0];
?>
<thead>
      <tr><?php echo $code; ?></tr>
       <th>No.</th>
        <th>Date</th>
       <th>Close</th>
       <th>Volume</th>
        <th>Company Code</th>
       <th>Share Issues</th>
       <th>Market Cap</th>
      </tr>
     </thead>
     <tbody>
<?php

echo "<tr>";
echo "<td>".$cr++."</td>";
echo "<td>".$date."</td>";
echo "<td>".$priceClose."</td>";
echo "<td>".$volume."</td>";
echo "<td>".$code."</td>";
echo "<td>"."N/A"."</td>";
echo "<td>"."N/A"."</td>";
echo "</tr>";


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

