<?php
include("configuration/config.php");
?>

<?php
if(isset($_POST['register_student']))
{
	$_cpassword = $_POST['CreatePassword'];
	$_password = $_POST['Password'];
	$_fullname = $_POST['Fullname'];
	$_email = $_POST['Email'];
	$_branch = $_POST['Branch'];
	$_div = $_POST['Div'];
	$_birthdate = $_POST['Birthdate'];
	$_phone = $_POST['Phone'];
	$_rollno = $_POST['Rollno'];
	$_username = $_POST['Username'];

	if($_password != $_cpassword){
        echo "<script>
                alert('Password Do not Match');
                </script>";
    }
    else{
	$qry = "INSERT INTO studentvalidate (roll_no,username,Name, password, Email, Branch,divison,phone_no,dob) VALUES ('$_rollno','$_username','$_fullname', '$_password', '$_email','$_branch','$_div','$_phone','$_birthdate')";

	if ($conn->query($qry) === TRUE) {
        echo "Record updated successfully";
		header('Location: login-page.php');
		exit();
      } else {
        echo "Error updating record: " . $conn->error;
		header('Location: register.php');
		exit();
      }
}	
}

?>