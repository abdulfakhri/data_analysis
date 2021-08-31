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
<th>Filename</th>
<th>Contents</th>
</tr>
<?php
$servername = "localhost";
$username = "u587940520_gray";
$password = "!@#123qweasdZXC";
$dbname = "u587940520_gary";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM alldata";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $n=count($row);
    while($row) {
       // echo "id: " . $row["ID"]. " - Name: " . $row["filename"]. " " . $row["file_contents"]. "<br>";
        //$ar = explode("<br>",$row["file_contents"]);
        //echo $ar[0]."<br>";
        $companyCodes=str_replace("garyData/","",$row["filename"]);
        $companyCodes=str_replace(".csv","",$companyCodes);
        //echo trim($companyCodes)."<br>";
        $companyCodes=trim($companyCodes);  

        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["filename"] . "</td><td>". $row["file_contents"]. "</td></tr>";





    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
</table>
</body>
</html>