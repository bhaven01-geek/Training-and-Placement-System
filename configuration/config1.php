<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'companyuser');
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn1 == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>