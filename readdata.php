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
<th>Id</th>
<th>File name</th>
<th>Contents</th>
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
$sql = "SELECT * FROM alldata LIMIT 3";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

//echo "<tr><td>".$row["ID"]."</td><td>".$row["filename"]."</td><td>".$row["file_contents"]."</td></tr>";

$rowData=explode(",",$row["file_contents"]);


//for($i=0; $i<count($rowData); $i++) {

echo "<tr><td>".$rowData[6]."</td>/tr>";
/*
echo "<td>".$rowData[0]."</td>";
echo "<td>".$rowData[1]."</td>";
echo "<td>".$rowData[2]."</td>";
echo "<td>".$rowData[3]."</td>";
echo "<td>".$rowData[4]."</td>";
echo "<td>".$rowData[5]."</td>";

echo "<td>".$row[]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo 
*/


//}

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>