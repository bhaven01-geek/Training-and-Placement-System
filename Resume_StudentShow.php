<?php
include("configuration/config1.php");
include("configuration/config.php");
?>

<?php


// $query1 = "SELECT ID , CompanyName FROM companyinfo" ;
// $result1 = mysqli_query($conn1,$query1);
// $numrows1 = mysqli_num_rows($result1);
if(isset($_POST['company_list'])  ){
	$select3 = $_POST['company_list'];

	// $_SESSION['select_company']  = $select3;
	// FOR DISPLAYING COMAPNY WISE 
	$company_query = "SELECT MinCGPA FROM companyreq WHERE Company = '$select3' " ;
	$result3  = mysqli_query($conn1,$company_query);
	$row_array = mysqli_fetch_array($result3);
	$min       = $row_array['MinCGPA'];

	$query2 = "SELECT Name , CGPA , Branch  FROM studentvalidate WHERE CGPA >= $min ";
	$result2 = mysqli_query($conn , $query2);
	$numrows2 = mysqli_num_rows($result2);
}
?>

<!-- View Resume -->
<?php
if(isset($_POST['view_resume']))
{
	$view_name = $_POST[''];
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>resume show</title>
</head>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="StyleIndex.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<body>

	<div class="wrapper">
		<div class="sidebar">
			<h2>Admin Profile</h2>
			<ul>
				<li><a href="NoticeBoard.php"><i class="fas fa-home"></i>Notice Board</a></li>
				<li><a href="3"><i class="fas fa-user"></i>Placement Drives</a></li>
				<li><a href="EligibleStudent.php"><i class="fas fa-address-card"></i>Elgible Students</a></li>
				<li><a href="ResumeShow.php"><i class="fas fa-project-diagram"></i>Resumes</a></li>
		<!-- 		<li><a href="#"><i class="fas fa-blog"></i>Feedback</a></li> -->
		  <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
			</ul> 
		</div>
		<div class="main_content">
			<!-- <div class="header"></div>  -->
			<div class="info">
		




				<div class = "View">
					<table class ="table">
						<tr>
							<th>Student Name</th>
							<th>Branch</th>
							<th>CGPA</th>
						</tr>
					
						<!-- populate table from mysql database -->
						<?php while($row = mysqli_fetch_array($result2)):?>
							<tr>
								<td><?php echo $row['Name'];?></td>
								<td><?php echo $row['Branch'];?></td>
								<td><?php echo $row['CGPA'];?></td>
							<td>
							<!-- <a href="<?php echo $row[''];?>" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a> -->
							<a href="#>" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
						</td>
							</tr>
						<?php endwhile;?>
					</table>
					 
				
			</td>
<!-- 
<button type="button"  class="btn btn-success" name = "view_resume">View</button>
<a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a> -->
</div>

			</div>
		</div>
	</div>
</body>
</html>
