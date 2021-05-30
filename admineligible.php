<?php
// include("configuration/config1.php");
include("configuration/config.php");
?>
<?php
session_start();

// $query1 = "SELECT ID,CompanyName FROM companyinfo" ;
// $result1 = mysqli_query($conn,$query1);
// $numrows1 = mysqli_num_rows($result1);
if($_SESSION['formfilled'] == true)
{
	$min = $_SESSION['min_cg'] ;
	$blg = $_SESSION['bk'] ;
$query2 = "SELECT Name , Branch , CGPA , current_backlogs FROM studentvalidate WHERE  CGPA >= $min AND current_backlogs <= $blg  ";
$result2 = mysqli_query($conn,$query2);
$numrows2 = mysqli_num_rows($result2);
}
else
{
	echo "<script>
	location.replace('CompanyPage.php');
	alert('Please Fill the Eligibilty Criteria Form First');
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eligible Student</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
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
				<li><a href="#"><i class="fas fa-home"></i>Notice Board</a></li>
				<li><a href="#"><i class="fas fa-user"></i>Placement Drives</a></li>
				<li><a href="home-page.php"><i class="fas fa-address-card"></i>Elgible Students</a></li>
				<li><a href="Resume.php"><i class="fas fa-project-diagram"></i>Resumes</a></li>
				<li><a href="#"><i class="fas fa-blog"></i>Feedback</a></li>
			
			<li id = "logout"><a href="Logout.php">Logout</a></li>
			</ul> 
</div>


		<div class="main_content">
			  <div class="header">List of Eligible Student</div>  
			<div class="info">

			

				<div>
					<table class = "table">
                		<tr>
		                    <th>Student Name</th>
		                    <th>Branch</th>
		                    <th>CGPA</th>
		                    <th>Backlogs</th>
                		</tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($result2)):?>
                <tr>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Branch'];?></td>
                    <td><?php echo $row['CGPA'];?></td>
                    <td><?php echo $row['current_backlogs'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
				</div>




			</body>
			</html>