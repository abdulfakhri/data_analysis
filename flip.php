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

$records = array();

while(($row = mysql_fetch_assoc($result))) {

    $records[]=$row;

}
$conn->close();
?>
</table>
</body>
</html>