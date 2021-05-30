<?php
include "configuration/config.php";
if(isset($_POST['submit']))
{
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];

    
    $sql = "SELECT * FROM studentvalidate WHERE username = '$user_name'";
    $rec = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($rec);
    if($num > 0)
    {
        $res = mysqli_fetch_assoc($rec);
        if($pass_word == $res['password'])
        {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user_name;
            $_SESSION['roll'] = $res['roll_no'];
            // $_SESSION['full_name'] = $res['full_name'];
            echo "<script>
                alert('Successfully Logged In');
                location.replace('StudentPage.php')
                </script>";
        }else
        {
            echo "<script>
                alert('Invalid Password');
                location.replace('login-page.php')
                </script>";
        }
    }else
    {
        echo "<script>
                alert('Invalid User Name or Password');
                location.replace('login-page.php')
                </script>";
    }
}


?>
<html>
<head>
<title>Login Page</title>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<!-- <script type="text/javascript" src="login-authenticate.js"></script> -->
	<link rel="stylesheet" type="text/css"
	href="login-page.css">
<div class="login-pg">
	<img src="iconfinder_Rounded-31_2024644.png" class = "avatar">
	<h1>Student Login</h1>
<form name="f1" method ="POST" >
	<div class="usnm">
		<p>Username</p>
	<input type="text" placeholder="Enter Username" name="username"> 
	</div>
	<div class="pd">
		<p>Password</p>
		<input type="password" placeholder="Enter Password" name="password" >
	</div>
	<div class="submit">
	<input type="Submit" name="submit" placeholder="Sign In">
</div>
</form>
</div>
</script>
</body>
</html>