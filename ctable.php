<html>
   <head>
      <title>Creating MySQL Table</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'u587940520_garyl';
         $dbpass = '!@#123qweasdZXC';
         $dbname = 'u587940520_garyl';
       
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
   
         $sql = "CREATE TABLE tutorials_tbl( ".
            "id INT NOT NULL AUTO_INCREMENT, ".
            "DATE_and_Price VARCHAR(100) NOT NULL, ".
            "ASX:CBA VARCHAR(100) NOT NULL, ".
            "ASX:BHP VARCHAR(40) NOT NULL, ".
            "ASX:CSL DATE, ".
            "PRIMARY KEY ( id )); ";
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