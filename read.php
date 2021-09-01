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
$servername = "localhost";
$username = "u587940520_gray";
$password = "!@#123qweasdZXC";
$dbname = "u587940520_gary";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM alldata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$cr=1;
$day=1;
while($row = $result->fetch_assoc()) {

$rowData=explode(",",$row["file_contents"]);  

$date=str_replace("Volume","",$rowData[5]);
$code=str_replace("garyData/","",$row["filename"]);
$code=str_replace(".csv","",$code);
//$volume=explode(" ",$rowData[10]);
$vol=strchr($rowData[10]," ");
$volume=str_replace("$vol"," ",$rowData[10]);

$date=date_create();
date_date_set($date,2000,01,01);
$dt= date_format($date,"Y-m-d");
 $d=date('Y-m-d',strtotime( $dt . " +1 days"));

echo "<tr>";
echo "<td>".$cr++."</td>";
echo "<td>".$d."</td>";
echo "<td>".$rowData[9]."</td>";
echo "<td>".$volume."</td>";
echo "<td>".$code."</td>";
echo "<td>"."N/A"."</td>";
echo "<td>"."N/A"."</td>";
echo "</tr>";

}

} else { 
    echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>