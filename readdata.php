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
$sql = "SELECT * FROM alldata LIMIT 10";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

//echo "<tr><td>".$row["ID"]."</td><td>".$row["filename"]."</td><td>".$row["file_contents"]."</td></tr>";

$data=explode(",",$row["file_contents"]);


 $time=$data[0];
  $open=$data[1];
  $high=$data[2];
  $low=$data[3];
  $Company=$row["filename"];
  $close=$data[4];
  $volume=$data[5];
//for ($i=0; $i<$n; $i++){
  $sql = "INSERT INTO historydata (H_date,PriceOpen,PriceHigh,PriceLow,PriceClose,Volume,CompanyCode)
  VALUES ('$time','$open','$high','$low','$close','$volume','$Company')";
  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  
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