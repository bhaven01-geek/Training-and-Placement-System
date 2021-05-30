
	<!-- <?php

// session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
// {
//     header("location: login.php");
// }


?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.Contact-Box{
		border: 1px solid grey;
		margin: 20px 100px 20px;
		padding: 20px 30px !important;
		box-shadow: 5px 10px 18px #888888;
		height:400px;
	}
	.fa{
		margin-right: 15px;
	}
	b{
		text-decoration: underline;
	}
	.query-form{
		border: 1px solid grey;
		margin: 20px 100px 20px;
		padding: 20px 30px !important;
		box-shadow: 5px 10px 18px #888888;
		height:400px;
	}
</style>
<body>
	<?php
include_once("NavBar.html");
	?>
	<div class="Contact-Box">
<h4>CONTACT INFO</h4>
<b>Fr. Conceicao Rodrigues College of Engineering</b>
<br>
<p>Fr. Agnel Ashram, Bandstand, Bandra (W), Mumbai 400050. MH, IN</p>

<i class="fa fa-phone-square" aria-hidden="true"></i>+91 22 67114000
<br>
<i class="fa fa-phone-square" aria-hidden="true"></i>+91 22 67114100
<br>
 <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:crce@frcrce.ac.in">crce@frcrce.ac.in</a>
 </div>
 <div class ="query-form">
 	<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type here Name">
    <label for="exampleFormControlInput1">Email-Address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Query Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" name="querysubmit" value="Submit Query">
</div>
</form>
 </div>

</body>
 <?php
include_once("footer.html");
?>
</html>