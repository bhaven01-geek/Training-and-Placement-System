<?php
include("configuration/config1.php");
include("configuration/config.php");
?>
<?php>

<?php

$query1 = "SELECT ID , CompanyName FROM companyinfo" ;
$result1 = mysqli_query($conn1,$query1);
$numrows1 = mysqli_num_rows($result1);

$query2 = "SELECT Name , CGPA , Branch  FROM studentvalidate WHERE CGPA >= 1.0 ";
$result2 = mysqli_query($conn , $query2);
$numrows2 = mysqli_num_rows($result2);

$query3 = 'SELECT Name , CGPA , Branch FROM studentvalidate WHERE       '



?>

<!-- View Resume -->
<?php
if(isset($_POST['view_resume']))
{
	$view_name = $_POST[''];
}

?>

<?php

if(isset($_GET['Domain']) && isset($_GET['Department']) && isset($_GET['company_list']) ){
	$select1 = $_GET['Domain'];
	$select2 = $_GET['Department'];
	$select3 = $_GET['company_list'];
	echo $select1;
	echo $select2;
	echo $select3;

	
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
				<li><a href="CompanyPage.php"><i class="fas fa-home"></i>Eligibity Form</a></li>
				<!-- <li><a href="#"><i class="fas fa-user"></i>Placement Drives</a></li> -->
				<li><a href="eligible_student.php"><i class="fas fa-address-card"></i>Eligible Students</a></li>
				<li><a href="ResumeShow.php"><i class="fas fa-project-diagram"></i>Resumes</a></li>
				<li><a href="#"><i class="fas fa-blog"></i>Feedback</a></li>
				<li id = "logout"><a href="Logout.php">Logout</a></li>
			</ul> 
		</div>
		<div class="main_content">
			<div class="header"></div> 
			<div class="info">
				<form method="GET" name = "filterLarge" >

					<select class="form-control form-control-lg" name = "Department">
						<option>Select</option>

						<option value ="branch" >Branch</option>
						<option value ="company">Company</option>
					</select> 
				<br>	

				



					<select  class="form-control form-control-lg" name = 'Domain'>
						<option>SELECT</option>

						<option value ="Computer" >Computer</option>
						<option value ="IT">I.T</option>
						<option value ="Production">PRODUCTION</option>
						<option value ="Ecs">ECS</option>

					</select> 

					<br>
					
					<select class="form-control form-control-lg" name = "dept_dom_list" id ="datalist">
					

					</select>
					<br>
				<button id = "sort_data">GO</button>
				</form> 

	


 <script>
$( "select[name='Department']" ).change(function () {
    var dept = $(this).val();


    if(dept === "Company" ) {


        $.ajax({
            url: "dependent_dropdown.php",
            dataType: 'Json',
            data: {'id':CID},
            success: function(data) {
                $('select[name="dept_dom_list"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="dept_dom_list"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else(){
    	$.ajax({
            url: "dependent_dropdown.php",
            dataType: 'Json',
            data: {'id':CID},
            success: function(data) {
                $('select[name="dept_dom_list"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="dept_dom_list"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });

    }
});
</script>





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
							<a href="<?php echo $row[''];?>" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
						</td>
							</tr>
						<?php endwhile;?>
					</table>
					 
				
			</td>

<button type="button"  class="btn btn-success" name = "view_resume">View</button>
<a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
</div>

			</div>
		</div>
	</div>
</body>
</html>
