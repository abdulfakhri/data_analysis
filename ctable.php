<html>
   <head>
      <title>Creating MySQL Table</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         //$dbuser = 'u587940520_garyl';
         //$dbpass = '!@#123qweasdZXC';
         //$dbname = 'u587940520_garyl';

         $dbuser = 'root';
         $dbpass = 'root';
         $dbname = 'garyl';

         include_once 'cols.php';

         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
          
         // $sql = "CREATE TABLE `mytctab`(".prepareD().");";

           $sql = "ALTER TABLE `cban` ADD"'.prepareD($col)).";
           

         if ($mysqli->query($sql)) {
            printf("Table tutorials_tbl created successfully.<br />");
         }
         if ($mysqli->errno) {
            printf("Could not create table: %s<br />", $mysqli->error);
         }

         $mysqli->close();
      ?>
   </body>
</html>