<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'u587940520_gray';
$dbPassword = '!@#123qweasdZXC';
$dbName = 'u587940520_gary';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}