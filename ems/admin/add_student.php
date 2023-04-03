<?php 
include("Header.php") 
?>
<html> 
<head> 
<link rel="stylesheet" href="styles.css">
</head> 
<body style="background-color:#FFF8DC;">
<form method="POST" action="add_student_process.php">
<table>
<tr>
<td> Student id: </td>
<td> <input type = "text" name = "stu_id"></td><br>
</tr>
<td> Student Name: </td>
<td> <input type = "text" name = "stu_name"></td><br>
</tr>
<tr>
<td> Year of enrollment: </td>
<td> <input type="Year" name = "stu_year_of_enrollment"></td><br>
</tr>
<tr>
<td> Student Major: </td>
<td> <input type="text" name = "stu_major"></td><br>
</tr>
<tr>
<td> CGPA: </td>
<td> <input type = "text" name = "CGPA"></td><br>
</tr>
<tr>
<td> Year of graduation: </td>
<td> <input type = "Year" name = "year_of_graduation"></td><br>
</tr>

</table>
<br><br>
<input type="submit" value ="Add student"/> 

</form>
</center> 

</body>
</html>