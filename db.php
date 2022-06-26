<?php

include 'database.php';
$con = MySQLi_connect(

   $servername, //Server host name.
   $username, //Database username.
   $password, //Database password.
   $dbname //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>

