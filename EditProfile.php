<?php
include "configuration/config.php";
session_start();
 $roll = $_SESSION['roll'];

if(isset($_POST['edit_student']))
{
	$_fullname = $_POST['Fullname'];
	$_email = $_POST['Email'];
	$_branch = $_POST['Branch'];
	$_div = $_POST['Div'];
	$_birthdate = $_POST['Birthdate'];
	$_phone = $_POST['Phone'];
	$_rollno = $_POST['Rollno'];
  $CGPA = $_POST['cgpa'];
  $backlogs = $_POST['backlogs'];
	// $qry = "INSERT INTO studentvalidate (roll_no,Name, Email, Branch,divison,phone_no,dob,CGPA,backlogs) VALUES ('$_rollno','$_fullname', '$_email','$_branch','$_div','$_phone','$_birthdate','$CGPA','$backlogs')";
  $qry = "UPDATE studentvalidate set roll_no='$roll', Name='$_fullname', Branch='$_branch' , divison='$_div', phone_no='$_phone', dob='$_birthdate',CGPA='$CGPA',backlogs='$backlogs',verified=0 where roll_no = '$roll'";
	if ($conn->query($qry) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
}	
$sql = "SELECT * FROM studentvalidate WHERE roll_no = $roll";
$rec = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($rec);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="reigstrationpage.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="StyleIndex.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Registration</title>
  </head>

  <body>
  <div class="wrapper">
    <div class="sidebar">
      <h2>Student Profile</h2>
      <ul>
        <li><a href="StudentPage.php"><i class="fas fa-user"></i>Profile</a></li>
        <li><a href="EditProfile.php"><i class="fas fa-address-card"></i>Edit Profile</a></li>
        <li><a href="Resume.php"><i class="fas fa-project-diagram"></i>Uploads</a></li>
        <li><a href="newfeed.html"><i class="fas fa-blog"></i>Feedback</a></li>
        <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
      </ul> 

    </div>
    <section class="perdet_con">
      <div>
        <div class="perdethead">
          <center>
            <h3>EDIT PERSONAL DETAILS</h3>
          </center>
        </div>

        <form class="row g-3 needs-validation personaldets" method="POST" novalidate>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label label123"
              >Full name</label
            >
            <input
              type="text"
              class="form-control"
              id="validationCustom01"
              name="Fullname"
              value="<?php echo $res['Name']; ?>"
              required
            />
            <div class="invalid-feedback">Please provide a valid Name.</div>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label label123"
              >Email</label
            >
            <div class="input-group has-validation">
              <input
                type="email"
                name="Email"
                class="form-control"
                id="validationCustomUsername"
                value="<?php echo $res['Email']; ?>"
                aria-describedby="inputGroupPrepend"
                required
              />
              <div class="invalid-feedback">Please enter valid Email.</div>
            </div>
          </div>
          <!-- <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label label123"
              >Year</label
            >
            <div class="input-group has-validation">
              <input
                type="text"
                class="form-control"
                id="validationCustomUsername"
                aria-describedby="inputGroupPrepend"
                required
              />
              <div class="invalid-feedback">Please enter valid Year.</div>
            </div>
          </div> -->
          <div class="col-md-4">
            <label for="validationCustom03" class="form-label label123"
              >Branch</label
            >
            <input
              type="text"
              name="Branch"
              class="form-control"
              id="validationCustom03"
              value="<?php echo $res['Branch']; ?>"
              required
            />
            <div class="invalid-feedback">Please provide a valid Branch.</div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom03" class="form-label label123"
              >Div</label
            >
            <input
              type="text"
              name="Div"
              class="form-control"
              id="validationCustom03"
              value="<?php echo $res['divison']; ?>"
              required
            />
            <div class="invalid-feedback">Please provide a valid Div.</div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom03" class="form-label label123"
              >Roll No.</label
            >
            <input
              type="number"
              name="Rollno"
              class="form-control"
              id="validationCustom03"
              value="<?php echo $res['roll_no']; ?>"
              required
            />
            <div class="invalid-feedback">
              Please provide a valid Roll Number.
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label label123"
              >Phone Number</label
            >
            <input
              type="number"
              name="Phone"
              class="form-control"
              id="validationCustom01"
              value="<?php echo $res['phone_no']; ?>"
              required
            />
            <div class="invalid-feedback">
              Please provide a valid Phone Number.
            </div>
          </div>

         
          <div class="col-md-4 col-birthdate">
            <label for="birthday" name="birthday" class="form-label label123"
              >Birthday:</label
            >
            <input
              type="date"
              name="Birthdate"
              class="form-control"
              id="validationCustom01"
              value="<?php echo $res['dob']; ?>"
              required
            />
            <div class="invalid-feedback">Please provide a valid Date.</div>
          </div>

          <div class="col-md-4 col-birthdate">
            <label for="validationCustom03" class="form-label label123"
              >CGPA</label
            >
            <input
              type="text"
              name="cgpa"
              class="form-control"
              value="<?php echo $res['CGPA']; ?>"
              required
            />
            <div class="invalid-feedback">Please provide a valid Div.</div>
          </div>

          <div class="col-md-4 col-birthdate">
            <label for="validationCustom03" class="form-label label123"
              >Backlogs</label
            >
            <input
              type="number"
              class="form-control"
              id="validationCustom03"
              name="backlogs"
              value="<?php echo $res['backlogs']; ?>"
              required
            />
            <div class="invalid-feedback">Please provide a valid Div.</div>
          </div>

          <div class="col-12 btnsubmit1">
            <button class="btn btn-primary" name="edit_student" type="submit">Submit form</button>
          </div>
        </form>
      </div>
    </section>
  </div>
    <script src="userdets.js"></script>
  </body>
</html>
