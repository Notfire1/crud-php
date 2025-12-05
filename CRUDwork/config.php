<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql209.infinityfree.com');
define('DB_USERNAME', 'if0_40582669');
define('DB_PASSWORD', '1eCI6JwCl5');
define('DB_NAME', 'if0_40582669_crud_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>