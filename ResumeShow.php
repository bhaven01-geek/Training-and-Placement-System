<?php
include("configuration/config1.php");
include("configuration/config.php");
?>

<?php


$query1 = "SELECT ID , CompanyName FROM companyinfo" ;
$result1 = mysqli_query($conn1,$query1);
$numrows1 = mysqli_num_rows($result1);


?>

<!-- View Resume -->
<?php
if(isset($_POST['view_resume']))
{
	$view_name = $_POST[''];
}

?>

<!-- <?php

if(isset($_GET['Domain']) && isset($_GET['Department']) && isset($_GET['company_list']) ){
	$select1 = $_GET['Domain'];
	$select2 = $_GET['Department'];
	$select3 = $_GET['company_list'];
	echo $select1;
	echo $select2;
	echo $select3;

	
}

?> -->

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
				<!-- <li><a href="#"><i class="fas fa-blog"></i>Feedback</a></li> -->
				  <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
			</ul> 
		</div>
		<div class="main_content">
			<!-- <div class="header"></div>  -->
			<div class="info">
				<form method="POST" name = "filterLarge" action = "Resume_StudentShow.php">
<!-- 
					<select class="form-control form-control-lg" name = "Domain">
						<option>Select</option>

						<option value ="branch" >Branch</option>
						<option value ="company">Company</option>
					</select> 
				<br>	

				



					<select  class="form-control form-control-lg" name = 'Department'>
						<option>SELECT</option>

						<option value ="Computer" >Computer</option>
						<option value ="IT">I.T</option>
						<option value ="Production">PRODUCTION</option>
						<option value ="Ecs">ECS</option>

					</select> 

					<br> -->
					
					<select class="form-control form-control-lg" name = "company_list" id ="datalist">
						<option>Select</option>
						<?php
						if($numrows1>0){

							while($res = mysqli_fetch_assoc($result1))

							{
								?>
								<option value = '<?php echo $res['CompanyName'];?>'><?php echo $res['CompanyName'];?></option>

								<?php
							}

						}
						?>

					</select>
					<br>
				<button id = "sort_data">GO</button>
				</form>
	
		</div>
	</div>
</body>
</html>
