<?php

$bid=$_POST['stu_id'];
$uid=$_POST['stu_name'];
$dol=$_POST['stu_year_of_enrollment'];
$dor=$_POST['stu_major'];
$status=$_POST['CGPA'];
$remark=$_POST['year_of_graduation'];
include("db_connection.php");

$sq3 = "INSERT INTO lending_tab (stu_id, stu_name, stu_year_of_enrollment, stu_major, CGPA, year_of_graduation)
		VALUES ( '$bid', '$uid', '$dol', '$dor', '$status', '$remark' )";
$result = $connect->query($sq3);

if($result == FALSE)
{
	include("error_page.php");
	
}

else{
	echo 'Added';
	include("admin_information.php");
	
}
?>