<?php
/* php& mysqldb connection file
   file ni utk declare variable */
   
$user = "admin"; //mysqlusername
$pass = "admin"; //mysqlpassword
$host = "localhost"; //server name or ipaddress
$dbname= "phpweb"; //your db name

//continue next slide
// continue from previous slide

$dbconn= mysqli_connect($host, $user, $pass ,$dbname) or die (mysql_error($dbconn));

?>
