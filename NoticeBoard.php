<?php
include("configuration/config1.php");
include("configuration/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="./StyleIndex.css">
	 <link rel="stylesheet" href="./notice.css">
</head>
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
			<!--   <div class="header"></div> -->  

			<div class="info">
<div class="be-comment-block">
	<h1 class="comments-title">Add a new Notice</h1>
	<form class="form-block" method="POST" action="Insert_notice.php">

		<div class="col">
			<div class="col-xs-12 col-sm-6 ">
				<div class="form-group ">
					
					<input name="title" class="form-input" type="text" placeholder="Title">
				</div>
			</div>
			<div class="col-xs-12">									
				<div class="form-group">
					<textarea name="story" class="form-input" required="" placeholder="Message"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Add Notice</button>
		</div>
		
	</form>
</div>
				
	</div>
</div>
</div>
</body>
</html>

