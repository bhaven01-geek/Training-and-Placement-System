<?php 
include "configuration/config.php";
    if(isset($_POST['end_year']))
    {
        $sql = "DELETE FROM studentvaldiate";

	        if(mysqli_query($conn,$sql))
  		        echo "Record deleted successfully";
            else
            echo "Error deleting record: " . mysqli_error($conn);

    }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="StyleIndex.css">
</head>
<style>
</style>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Profile</h2>
        <ul>
        <ul>
            <li><a href="NoticeBoard.php"><i class="fas fa-home"></i>Add Notice</a></li>
            <li><a href="CompanyRegister.php"><i class="fas fa-user"></i>Add Company</a></li>
            <li><a href="VerifyStudent.php"><i class="fas fa-user-check"></i>Verify Students</a></li>
            <li><a href="EligibleStudent.php"><i class="fas fa-address-card"></i>Eligible Students</a></li>
            <li><a href="EndYear.php"><i class="fas fa-calendar-times"></i>End Year</a></li>
            <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
        </ul> 
        </ul> 
    </div>
    <div class="main_content">
    <div class="info">
    <h2>End Current Academic Year</h2>
    <form method="POST" action="Endyear.php">
    <button name="end_year" class="btn btn-danger">End Year</button>
    </form>

    </div>
    </div>

</div>
	</body>
	</html>
