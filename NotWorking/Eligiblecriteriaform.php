<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="StyleIndex.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<h2>Admin Profile</h2>
			<ul>
				<li><a href="#"><i class="fas fa-home"></i>Notice Board</a></li>
				<li><a href="#"><i class="fas fa-user"></i>Placement Drives</a></li>
				<li><a href="eligible_student.php"><i class="fas fa-address-card"></i>Eligible Students</a></li>
				<li><a href="#"><i class="fas fa-project-diagram"></i>Resumes</a></li>
				<li><a href="#"><i class="fas fa-blog"></i>Feedback</a></li>
			</ul> 
		</div>

		<div class="main_content">
			<div class="header"></div>
			<div class="info">
			
				<form method = "POST">
					<div class="form-row">
						<div class="form-group">
							<label>Minimum CGPA</label>
							<input type="text" class="form-control" name ="minscore">
						</div>
						<div class="form-group">
							<label>Backlogs</label>
							<input type="password" class="form-control" name ="">
						</div>
						<div class="form-group">
							<label>Company name</label>
							<input type="text" class="form-control" placeholder="Type Name" name ="company_name">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" placeholder="Type Address" name ="address">
						</div>
						<button type="submit" class="btn btn-primary center" name ="insert" >Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</body>
	</html>