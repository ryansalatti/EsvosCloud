<?php

 // avoids mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );

 define('DBHOST', 'localhost');
 define('DBUSER', 'admin');
 define('DBPASS', 'admin');
 define('DBNAME', 'database_name');

 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }

?>
