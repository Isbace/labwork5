<?php

include("db_connection.php");
$user=($_SESSION['userid']);
$sql="SELECT * FROM student_tab WHERE stu_id='$user'";
$result=$connect->query($sql);
$row = $result->fetch_assoc();
$dept = 'Computer Science';
?>
<html>
<body>
<h2>Student Information</h2>


    
<table border="2">
  <tbody>
    <tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Enrollment Year</th>
      <th>Major</th>
      <th>GPA</th>
      <th>Graduation Year</th>
    </tr>
    <tr>
      <td data-th="Student ID"><?php echo $row['stu_id']; ?></td>
      <td data-th="Student Name"><?php echo $row['stu_name']; ?></td>
      <td data-th="Enrollment Year"><?php echo $row['stu_year_of_enrollment']; ?></td>
      <td data-th="Major"><?php echo $row['stu_major']; ?></td>
      <td data-th="GPA"><?php echo $row['CGPA']; ?></td>
      <td data-th="Graduation Year"><?php echo $row['year_of_graduation']; ?></td>
    </tr>
  </tbody>
</table>


<h2>Faculty Information</h2>
<table border="2">

    <tr>
      <th>Faculty ID</th>
      <th>Faculty Name</th>
      <th>Date of Joining</th>
      <th>Qualification</th>
      <th>Department</th>
    </tr>
    <?php 
    $sql2 = "SELECT * FROM faculty_tab WHERE department='$dept'";
    $result2 = $connect->query($sql2);
    while ($row2 = $result2->fetch_assoc()) { 
    ?>
    <tr>
      <td data-th="Faculty ID"><?php echo $row2['fac_id']; ?></td>
      <td data-th="Faculty Name"><?php echo $row2['fac_name']; ?></td>
      <td data-th="Date of Joining"><?php echo $row2['fac_doj']; ?></td>
      <td data-th="Qualification"><?php echo $row2['qualification']; ?></td>
      <td data-th="Department"><?php echo $row2['department']; ?></td>
    </tr>
    <?php 
    } 
    ?>

</table>


<h2>COURSES</h2>
<?PHP
$sql3="SELECT * FROM student_tab WHERE stu_id='$user'";
$result3=$connect->query($sql3);
$row3 = $result->fetch_assoc();

?>
<table border="2">

    <tr>
      <th>Course ID</th>
      <th>Course Name</th>
      <th>Faculty ID</th>
      <th>Offered</th>
      <th>Credits</th>
	  <th>Prerequisites</th>
	  <th>Type</th>
    </tr>
<?php 
    $sql3 = "SELECT * FROM courses_tab";
    $result3 = $connect->query($sql3);
    while ($row3 = $result3->fetch_assoc()) { 
    ?>
	<tr>
	<td data-th="Course ID"><?php echo $row3['course_id']; ?></td>
      <td data-th="Course Name"><?php echo $row3['course_name']; ?></td>
      <td data-th="Faculty ID"><?php echo $row3['fac_id']; ?></td>
      <td data-th="Offered"><?php echo $row3['offered_in']; ?></td>
      <td data-th="Credits"><?php echo $row3['credits']; ?></td>
	  <td data-th="Prerequisites"><?php echo $row3['pre_req']; ?></td>
	  <td data-th="Type"><?php echo $row3['type']; ?></td>
    </tr>
    <?php 
    } 
    ?>
</table>
</body>
</html>