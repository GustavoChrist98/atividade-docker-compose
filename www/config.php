<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define("DB_SERVER", "db");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "dev");
define("DB_NAME", "dev");
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die(mysqli_connect_error());
}
?>
