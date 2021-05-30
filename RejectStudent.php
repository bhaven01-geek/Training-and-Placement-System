<?php
include("configuration/config.php");
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "here";
    $studentroll = $_POST['roll'];
    echo $studentroll;
    $query3 = "UPDATE studentvalidate
    SET verified = -1
    WHERE roll_no = $studentroll ";
    if ($conn->query($query3) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
} 
header('Location: VerifyStudent.php');
exit();


?>