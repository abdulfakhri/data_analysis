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
include_once 'database.php';

$sql = "SELECT * FROM gdata LIMIT 3";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$cr=1;

while($row = $result->fetch_assoc()) {

$rowDatas=explode(",",$row["file_contents"]);  


foreach($rowDatas as $ros) {

echo $ros;

$sql = "INSERT INTO comps(file_contents) VALUES('$ros')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*
$dateCr=date_create("$ros[1]");
$date=date_format($dateCr,"Y-m-d");
echo "<tr>";
echo "<td>".$cr++."</td>";
echo "<td>".$date."</td>";
echo "<td>".$rowData[9]."</td>";
echo "<td>".$volume."</td>";
echo "<td>".$rowData[0]."</td>";
echo "<td>"."N/A"."</td>";
echo "<td>"."N/A"."</td>";
echo "</tr>";
*/

}

}

} else { 
    echo "0 results"; 
}
$conn->close();
?>
</table>
</body>
</html>