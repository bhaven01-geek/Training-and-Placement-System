<?php
include("configuration/config1.php");
include("configuration/config.php");
?>

<?php
$query1 = "SELECT ID , CompanyName FROM companyinfo" ;
$result1 = mysqli_query($conn1,$query1);
$numrows1 = mysqli_num_rows($result1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eligible Student</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

	<link rel="stylesheet" href="StyleIndex.css">
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
			<!--   <div class="header"></div> -->  
			<div class="info">

				<a class="btn btn-info active">Branch</a>
				<a href="EligibleStudent.php" class="btn btn-info">All Students</a>
				<br>
				<br>
				<form method="POST" name = "filterLarge" action = "BranchDisplay.php" >

					<!-- <select class="form-control form-control-lg" name = "Domain">
						<option>Select</option>
						<option value ="branch" >Branch</option>
						<option value ="company">Company</option>
					</select>  -->
				<!-- <br>	 -->
					<select  class="form-control form-control-lg" name = 'department' id = "dept">
						<option>Select Branch</option>

						<option value ="Computer" >Computer</option>
						<option value ="IT">I.T</option>
						<option value ="Production">PRODUCTION</option>
						<option value ="Ecs">ECS</option>

					</select> 
					<br>


					<select class="form-control form-control-lg" name = "company_list_name" id ="datalist">
						<option>Select Company</option>
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
				<button class="btn btn-primary" id = "sort_data">GO</button>
				</form> 
			</div>
	</div>



</body>
</html>