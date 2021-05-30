<?php


include("configuration/config1.php");
?>
<?php
if(isset($_POST['insert']))
{
	$mincgpa = $_POST['mincgpa'];

	$bklog = $_POST['bklog'];
	$company = $_POST['company_name'];

	$qry = "INSERT INTO companyreq (`MinCGPA`,`backlogs`, `Company`) VALUES ('$mincgpa', '$bklog', '$company')";

	$res = mysqli_query($conn1,$qry);
if($res){
	echo "<script>
	alert('Details Submitted');
	location.replace('Home-page.php')
	</script>";
}
// else{
// 	echo "<script>
// 	alert('Fields Are Empty');
// 	location.replace('CompanyRegister.php')
// 	</script>";
// }
}
?>














<!DOCTYPE html>
<html>
<head>
	<title>Company Page</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="StyleIndex.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>
</style>
<body>
	<div class="wrapper">
	<div class="sidebar">
        <h2>Admin Profile</h2>
        <ul>
            <li><a href="NoticeBoard.php"><i class="fas fa-home"></i>Add Notice</a></li>
            <li><a href="CompanyPage.php"><i class="fas fa-user"></i>Add Company</a></li>
            <li><a href="VerifyStudent.php"><i class="fas fa-user-check"></i>Verify Students</a></li>
            <li><a href="EligibleStudent.php"><i class="fas fa-address-card"></i>Eligible Students</a></li>
            <li><a href="EndYear.php"><i class="fas fa-calendar-times"></i>End Year</a></li>
            <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
        </ul> 
    </div>

		<div class="main_content">
			<div class="header"></div>
			<div class="info">

				<form method = "POST" name = "insert">
					<div class="form-row">
						<div class="form-group">
							<label>Minimum CGPA</label>
							<input type="text" class="form-control" name ="mincgpa" required>
						</div>
						<div class="form-group">
							<label>Backlogs</label>
							<input type="number" class="form-control" name ="bklog" required>
						</div>
						<div class="form-group">
							<label>Company name</label>
							<input type="text" class="form-control" placeholder="Type Name" name ="company_name" required>
						</div>
						<button type="submit" class="btn btn-primary center" name ="insert" >Submit</button>
					</div>
				</form>
			</div>
		</div>


	</div>
</body>
</html>
