<?php
function getdb(){
$servername = "localhost";
$username = "u587940520_gray";
$password = "!@#123qweasdZXC";
$db = "u587940520_gary";

try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>