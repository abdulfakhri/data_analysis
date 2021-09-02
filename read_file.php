<!DOCTYPE html>
<html>
<head>
<title>ASX Data</title>
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
<th>Share Issues</th>
<th>Market Capt</th>
</tr>
<?php
include_once 'database.php';

$sql = "SELECT * FROM companydata LIMIT 20";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$cr=1;
$day=1;
while($row = $result->fetch_assoc()) {

$rowData=explode(",",$row["file_contents"]);  

$code=str_replace("newd/","",$row["filename"]);
$code=str_replace(".csv","",$code);
//$volume=explode(" ",$rowData[10]);

$vol=strchr($rowData[10]," ");
$volume=str_replace("$vol"," ",$rowData[10]);

$dateCr=date_create("$rowData[1]");
$date=date_format($dateCr,"d/m/y");

$volume = number_format($rowData[6]);
$priceClose =round($rowData[5],2);
$CompCode=$rowData[0];
/*
echo "<tr>";
echo "<td>".$cr++."</td>";
echo "<td>".$date."</td>";
echo "<td>".$priceClose."</td>";
echo "<td>".$volume."</td>";
echo "<td>".$CompCode."</td>";
echo "<td>"."N/A"."</td>";
echo "<td>"."N/A"."</td>";
echo "</tr>";
*/
echo "<tr><th>".$CompCode."</tr></th>";
echo "<tr>";
echo "<tr>".$cr++."</td>";
echo "<td>".$date."</td>";
echo "<td>".$priceClose."</td>";
echo "<td>".$volume."</td>";
echo "<td>"."N/A"."</td>";
echo "<td>"."N/A"."</td>";
echo "</tr>";

}

} else { 
    echo "0 results"; 
}
$conn->close();
?>
</table>
</body>
</html>