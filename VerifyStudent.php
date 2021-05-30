<?php
include("configuration/config.php");
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "here";
    $studentroll = $_POST['roll'];
    echo $studentroll;
    $query3 = "UPDATE studentvalidate
    SET verified = 1
    WHERE roll_no = $studentroll ";
    if ($conn->query($query3) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
} 

$query2 = "SELECT * FROM studentvalidate WHERE verified=0 order by roll_no ";
$result2 = mysqli_query($conn,$query2);
$numrows2 = mysqli_num_rows($result2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Student</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="StyleIndex.css">
</head>
<body>
<div class="wrapper">
<div class="sidebar">
        <h2>Admin Profile</h2>
        <ul>
            <li><a href="NoticeBoard.php"><i class="fas fa-home"></i>Add Notice</a></li>
            <li><a href="CompanyRegister.php"><i class="fas fa-user"></i>Add Company</a></li>
            <li><a href="VerifyStudent.php"><i class="fas fa-user-check"></i>Verify Students</a></li>
            <li><a href="EligibleStudent.php"><i class="fas fa-address-card"></i>Eligible Students</a></li>
            <li><a href="EndYear.php"><i class="fas fa-calendar-times"></i>End Year</a></li>
            <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
        </ul> 
    </div>
<div class="main_content">
			  <div class="header">Verify Student</div>  
			<div class="info">

			

				<div>
                <table class = "table">
                		<tr>
		                    <th>Student Name</th>
		                    <th>Branch</th>
		                    <th>CGPA</th>
		                    <th>Roll No.</th>
                            <th>Verify Student</th>
                            <th>Reject Student</th>
                		</tr>

                <?php while($row = mysqli_fetch_array($result2)):?>
                    <form method="POST" action="VerifyStudent.php">
                <tr>
                    
                <input type="hidden" name="roll" value="<?php echo $row['roll_no'];?>">
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Branch'];?></td>
                    <td><?php echo $row['CGPA'];?></td>
                    <td><?php echo $row['roll_no'];?></td>
                    <td><button class="p-1 btn-success rounded" type="submit">Accept</button> 
                    </form>
                    </td>
                    <td>
                    <form method="POST" action="RejectStudent.php">
                    <button type="submit" class="p-1 rounded m-1 btn-danger">Reject</button>
                    <input type="hidden" name="roll" value="<?php echo $row['roll_no'];?>">
                    </form>
                </td>
                </tr>
                <?php endwhile;?>
            </table>
                
					
				</div>

</body>
</html>