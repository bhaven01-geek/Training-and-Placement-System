<?php
    $con=mysqli_connect("localhost","root","","user");
    if($con)
{
    echo "Connection success";
}
    if(isset($_POST["submit"]))
    {
        $source_file = $_FILES['pdfFile']['tmp_name'];
        $file_name=$_FILES['pdfFile']['name'];
        $dest_file = "configuration/".$_FILES['pdfFile']['name'];
        if (file_exists($dest_file)) {
			print "The file name already exists!!";
		}
        else{
            move_uploaded_file( $source_file, $dest_file )
            or die ("Error!!");
            if($_FILES['pdfFile']['error'] == 0) {
				print "Pdf file uploaded successfully!";
				print "<b><u>Details : </u></b><br/>";
				print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
				print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
				print "File location : configuration/".$_FILES['pdfFile']['name']."<br/>";
            }
        }
        $qry = "INSERT INTO studentvalidate (`upload_pdf`) WHERE username = 'bhaven'  VALUES ('$file_name') ";

        if ($con->query($qry) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $qry . "<br>" . $con->error;
        }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic1</title>
</head>
<body>
    <h1 class="head">Submit PDF</h1>
    <form method="POST" enctype="multipart/form-data" accept="application/pdf">
        
        <input type="file" name="pdfFile"/>
        <br><br>
        <input type="submit" name="submit"></input>
    </form>
</body>
</html>