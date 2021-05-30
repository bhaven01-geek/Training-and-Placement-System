<?php
    $name=$_POST['n-name'];
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, ndate,descr FROM notice WHERE title='$name'";
$result = $conn->query($sql);
    // output data of each row
    while ($row = $result->fetch_assoc()) {
  
      $title = $row['title'];
      $date = $row['ndate'];
      $desc = $row['descr'];
    }
  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Details</title>
    <link rel="stylesheet" type="text/css" href="./noticeDetail.css">
</head>
<body>
    <div class="container">
<h1><center>Notices:</center></h1>
<div class="incontainer">
    <h2><?php echo $title ?></h2>
    <h3><?php echo $date ?></h3>
    <p><?php echo $desc ?> </p></div>
</div>

  <script>
      var arr = <?php echo json_encode($datas) ?>;
      console.log(arr);
      </script>
</body>
</html>
