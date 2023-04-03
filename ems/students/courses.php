<?php
session_start();
include('Header.php');
include("db_connection.php");
$user=($_SESSION['userid']);
$sql="SELECT * FROM student_tab WHERE stu_id='$user'";
$result=$connect->query($sql);
$row = $result->fetch_assoc();
?>
<html>
<body style="background-color:#FFF8DC;">


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