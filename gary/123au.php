<?php

ini_set('display_errors',1);
echo '### Begin Importation<br>';

$mysqli  =  new mysqli(
"localhost",
"u587940520_gray",
"!@#123qweasdZXC",
"u587940520_gary",
3306
);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$files = glob('*.csv');

foreach($files as $file){

    //clean names if needed
    $filename = explode('\\',$file);
    $filename2clean = str_replace('.csv','', $filename);
//because my file is under 5 folders on my PC
    $n = strtolower(str_replace('fileprefix_','', filename2clean));

    echo '<br>Create table <b>'.$n.'</b><hr>';

    $sql = "CREATE TABLE IF NOT EXISTS `u587940520_gary`.`".$n."` 
(`email` varchar(60), `lastname` varchar(60), `firstname` varchar(60), 
`country` varchar(19)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";

    if (!($stmt = $mysqli->query($sql))) {
        echo "\nQuery execute failed: ERRNO: (" . $mysqli->errno . ") " 
. $mysqli->error;
    };

    echo '<br>Import data from <b>'.$n.'</b><hr>';

    $sql = "LOAD DATA INFILE '".basename($file)."' INTO TABLE `mydatabase`.`".$n."`  
        FIELDS TERMINATED BY ';'
        LINES TERMINATED BY '\r'  
        IGNORE 1 LINES";

    if (!($stmt = $mysqli->query($sql))) {
        echo "\nQuery execute failed: ERRNO: (" . $mysqli->errno . ") " 
. $mysqli->error;
    };

}

echo '### Import finished !<br>';

?>