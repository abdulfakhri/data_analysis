<?php
include_once 'database.php';

$sql = "SELECT * FROM gdata";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

// output data of each row
while($row = $result->fetch_assoc()) {

$rowDatas=explode(",",$row["file_contents"]);  

echo $rowDatas."<br>";



}

} else { 
    echo "0 results"; 
}
$conn->close();
?>
