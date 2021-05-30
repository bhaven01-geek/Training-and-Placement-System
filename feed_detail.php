<?php
    $name=$_POST['fname'];
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username,title,fdate,story FROM feedback WHERE title='$name'";
$result = $conn->query($sql);
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $username = $row['username'];
      $title = $row['title'];
      $date = $row['fdate'];
      $story = $row['story'];
    }
  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Feedback.css">
    <title>Notice Details</title>
</head>
<body>
<!-- <?php
  // include('NavBar.html');
  ?> -->
  <div class="feedcont">
  <h1 class="feed_head">Student Feedback</h1>
  <h2 class="ftitle"><?php echo $title ?></h2>
  <div class="feedsec">
  <div class="fdate">Published On: <?php echo $date ?></div>
  <div class="fname">By: <?php echo $username ?> </div>
  <hr>
    <p class="fstory"><?php echo nl2br($story)  ?> </p>
  </div>
  
    </div>
  

  <script>
      var arr = <?php echo json_encode($datas) ?>;
      console.log(arr);
      </script>
</body>
</html>
<!-- <?php
// include_once("footer.html");
?> -->