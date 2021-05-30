<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('Db_SERVER', 'localhost');
define('Db_USERNAME', 'root');
define('Db_PASSWORD', '');
define('Db_NAME', 'user');
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(Db_SERVER, Db_USERNAME, Db_PASSWORD, Db_NAME);
 // $result = mysqli_query($conn);
 // $rows = mysqli_num_rows($result);
 // echo "THere Are" . $rows ." in";
// Check connection
if($conn == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>