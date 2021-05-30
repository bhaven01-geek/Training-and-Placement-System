<?php
// session_start();

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="logindb";


$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}


$title=$_POST['title'];
$story=$_POST['story'];


$qry = "INSERT INTO notice (title, descr) VALUES ('$title','$story')";

if ($conn->query($qry) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $qry . "<br>" . $conn->error;
}

$conn->close();
header('location:Home-page.php');

?>
