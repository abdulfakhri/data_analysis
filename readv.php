<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>No</th>
<th>Date</th>
<th>Close</th>
<th>Volume</th>
<th>CompanyCode</th>
<th>Share Issues</th>
<th>Market Capt</th>
</tr>
<?php
include ('database.php');

$sql = "SELECT * FROM alldata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$cr=1;
while($row = $result->fetch_assoc()) {

$rowData=explode(",",$row["file_contents"]);  

$date=str_replace("Volume","",$rowData[5]);
$code=str_replace("garyData/","",$row["filename"]);
$code=str_replace(".csv","",$code);
//$volume=explode(" ",$rowData[10]);
$vol=strchr($rowData[10]," ");
$volume=str_replace("$vol"," ",$rowData[10]);

 $str_CSV = $row['file_contents'];

 $ro = str_getcsv($str_CSV, "\n");  
 $length = count($ro);   
 for($i=0;$i<$length;$i++) {  
  $val = str_getcsv($ro[$i], ",");  
  print_r($val);

/*
echo "<tr>";
echo "<td>".$cr++."</td>";
echo "<td>".$date."</td>";
echo "<td>".$rowData[9]."</td>";
echo "<td>".$volume."</td>";
echo "<td>".$code."</td>";
echo "<td>"."N/A"."</td>";
echo "<td>"."N/A"."</td>";
echo "</tr>";
*/

}

} else { 
    echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>