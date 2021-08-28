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
         $fls=array(
            "id INT NOT NULL AUTO_INCREMENT, ",
            "DATE_and_Price VARCHAR(100) NOT NULL, ",
            "ASXCBA VARCHAR(100) NOT NULL, ",
            "ASXBHP VARCHAR(40) NOT NULL, ", 
            "ASXCSL DATE, "
         );
         $sql = "CREATE TABLE tut_tbl( ".
            "id INT NOT NULL AUTO_INCREMENT, ".
            $fls.";
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