<?php
// session_start();

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tpo";


$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}

$username=$_POST['username'];
$title=$_POST['title'];
$story=$_POST['story'];


$qry = "INSERT INTO feedback (username,title,story) VALUES ('$username','$title','$story')";

if ($conn->query($qry) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $qry . "<br>" . $conn->error;
}

$conn->close();
header('location:Feedback.php');

?>