<?php 
include "configuration/config.php";
session_start();
 $roll = $_SESSION['roll'];
if(isset($_POST["submit"]))
{
  $allow = array('pdf');
  $temp = explode(".",$_FILES['pdf_file']['name']);
  $extension = end($temp);
  $upload_file= $_FILES['pdf_file']['name'];
  move_uploaded_file($_FILES['pdf_file']['tmp_name'],"Resumes/".$_FILES['pdf_file']['name']);
  $qry = mysqli_query($conn,"UPDATE studentvalidate
  SET Upload_pdf = '$upload_file'
  WHERE roll_no = $roll ");
  if($qry)
  {
    echo "File Uploaded";
  }
  else
  {
    echo "Not Uploaded";
  }
}
$sql = "SELECT * FROM studentvalidate WHERE roll_no = $roll";
$rec = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($rec);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="StyleIndex.css">
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
	<div class="main_content">
        <div class="info">
        <form method ="Post" enctype="multipart/form-data">
		Select File : <br> <input name="pdf_file" type="file" name="Resumefile" accept="application/pdf"> <br>
    <br>
    <button name="submit" class="btn-info p-1 rounded" type="submit">UPLOAD</button>
    <br>
    <br>
    </form>
    <h4>Uploaded file : <?php echo $res['Upload_pdf']?></h4>
		VIEW RESUME <a class="btn-danger p-2 rounded" href="Resumes/<?php echo $res['Upload_pdf']?>" target="_blank">View </a>
      </div>
    </div>
</div>
</body>
</html>