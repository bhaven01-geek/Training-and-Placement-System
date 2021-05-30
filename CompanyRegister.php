<?php
include("configuration/config1.php");
?>

<?php
if(isset($_POST['insert']))
{
	$_email = $_POST['email'];

	$_password = $_POST['create_Password'];
	$_companyname = $_POST['company_name'];
	$_address = $_POST['address'];
	$_telephone = $_POST['telephone'];

	$qry = "INSERT INTO companyinfo (`ID`,`CompanyName`, `Password`, `Email`, `Address`, `Telephone`) VALUES ('', '$_companyname', '$_password', '$_email','$_address','$_telephone')";

	$res = mysqli_query($conn1,$qry);
	echo $res;
// if($res){
// 	echo "<script>
// 	alert('Successfully Registered');
// 	location.replace('AdminPage.php')
// 	</script>";
// }
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
	<title>Company Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<style>
	body{
		background-color: #f1f3fa;
		background-color:#b0b1b9;
	}
	.container{
		background-color: #fff;
		margin: 20px auto 20px;
		padding:25px 25px 25px;
		box-shadow: 5px 15px 20px #888888;
	}
	input{
		padding-bottom: 1px;
	}
</style>
<body>
	<h2><center>Company Registration Form</center></h2>
	<div class="container">
		<form method = "POST" action="">

			<div class="form-column">
				<div class="form-group col-md-4">
					<label>Email</label>
					<input type="email" class="form-control" name ="email">
				</div>
				<div class="form-group col-md-3">
					<label>Create Password</label>
					<input type="password" class="form-control" name ="create_Password">
				</div>

				<div class="form-column">
					<div class="form-group col-md-4">
						<label>Company name</label>
						<input type="text" class="form-control" placeholder="Type Name" name ="company_name">
					</div>
					<div class="form-column">
						<div class="form-group col-md-4">
							<label>Address</label>
							<input type="text" class="form-control" placeholder="Type Address" name ="address">
						</div>
						<div class="form-column">
							<div class="form-group col-md-4">
								<label>Telephone Number</label>
								<input type="text" class="form-control" placeholder="Type Name" name ="telephone">
							</div>
						</div>
					</div> 
					<!-- <div class="form-group col-md-3">
						<label>City</label>
						<input type="text" class="form-control" id="inputCity">
					</div> -->
					<!-- <div class="form-group col-md-3">
						<label for="inputState">Branch</label>
						<select class="custom-select" multiple>
							<option disabled selected>Choose...</option>
							<option input type = "checkbox">IT</option>
							<option>MECHANICAL</option>
							<option>COMPUTER</option>
							<option>PRODUCTION</option>
							<option>IT</option>
						</select>
					</div>
				</div> -->
				<button type="submit" class="btn btn-primary center" name ="insert" >Submit</button>

			</form>
		</div>
	</body>
	</html>