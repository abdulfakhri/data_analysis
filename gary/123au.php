<?
mysql_connect('localhost','u587940520_gray','!@#123qweasdZXC'); // MAMP defaults
mysql_select_db('u587940520_gary');
$files = glob('*.csv');
foreach($files as $file){
    mysql_query("LOAD DATA INFILE '".$file."' INTO TABLE files");
}