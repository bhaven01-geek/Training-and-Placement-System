 <?php

 session_start();

 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
 {
   header("location: login-page.php");
 }
 $un = $_SESSION['user'];
 $connect = mysqli_connect("localhost", "root", "", "user");
 $query = "SELECT * FROM studentvalidate WHERE username = '$un' ";
 $result = mysqli_query($connect,$query);
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Student page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
      <div class="header"></div>  
      <div class="info">
        <table>
          <?php
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <th>Name : &nbsp; </th>
              <td><?php  echo $row['Name']?></td>
            </tr>
            <tr>
              <th>Branch :&nbsp; </th>
              <td><?php  echo $row['Branch']?></td>
            </tr>
            <tr>
              <th>Div :&nbsp; </th>
              <td><?php  echo $row['divison']?></td>
            </tr>
            <tr>
              <th>Email :&nbsp;</th>
              <td><?php  echo $row['Email']?></td>
            </tr>
            <tr>
              <th>Roll no :&nbsp;</th>
              <td><?php  echo $row['roll_no']?></td>
            </tr>
            <tr>
              <th>CGPA :&nbsp;</th>
              <td><?php  echo $row['CGPA']?></td>
            </tr>
            <tr>
              <th>DOB :&nbsp;</th>
              <td><?php  echo $row['dob']?></td>
            </tr>
            <tr>
              <th>Phone :&nbsp;</th>
              <td><?php  echo $row['phone_no']?></td>
            </tr>
            <tr>
            <th>Status:&nbsp;</th>
              <td><?php 
              if($row['verified']==1)
                {
                  echo "Verified";
                }        
                else if($row['verified']==0)
              {
                echo "Pending";
              }
              else
              {
                echo "Rejected";
              }
              ?></td>
            </tr>
            <?php
          }
          ?> 
        </table>
      </div>
    </div>
  </div>
</body>
</html>