<?php
include("configuration/config1.php");
include("configuration/config.php");
	$query1 = "SELECT ID , CompanyName FROM companyinfo" ;
   	$result = mysqli_query($query1);
   	$json = [];
   	while($row = mysqli_fetch_assoc($result)){
        $json[$row['Id']] = $row['CompanyName'];
   	}
   echo json_encode($json);
?>