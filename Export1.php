<?php
include("configuration/config1.php");
include("configuration/config.php");
?>
<?php
session_start();

    $com_opt = $_SESSION['select_company'] ;
    $company_query = "SELECT MinCGPA FROM companyreq WHERE Company = '$com_opt' " ;
    $result3  = mysqli_query($conn1,$company_query);
    $row_array = mysqli_fetch_array($result3);
    $min       = $row_array['MinCGPA'];

    $query2 = "SELECT Name , CGPA , Branch  FROM studentvalidate WHERE CGPA >= $min ";
    $result2 = mysqli_query($conn , $query2);
    $numrows2 = mysqli_num_rows($result2);




    $filename = "List_Student_export_".date('Ymd') . ".xls";            
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");  

//Set variable to false for heading
$heading = false;

//Add the MySQL table data to excel file
if(!empty($result2)) {
foreach($result2 as $item) {
if(!$heading) {
echo implode("\t", array_keys($item)) . "\n";
$heading = true;
}
echo implode("\t", array_values($item)) . "\n";
}
}
exit();


?>







