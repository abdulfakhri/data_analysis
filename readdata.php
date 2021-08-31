<!DOCTYPE html>
<html>
<body>

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
    while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["ID"]. " - Name: " . $row["filename"]. " " . $row["file_contents"]. "<br>";

        $ar = explode("<br>",$row["file_contents"]);
        echo $ar[0];

        
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>