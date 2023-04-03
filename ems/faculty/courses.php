<html>
<body style="background-color:#FFF8DC;">
<?php
session_start();
include("Header.php");
include("db_connection.php");	
$user=($_SESSION['userid']);
$sql="SELECT * FROM courses_tab WHERE fac_id='$user'";
$result=$connect->query($sql);
while($row = $result->fetch_assoc()){
?>
	
    <table border="2">
      <tbody>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Faculty ID</th>
		  <th>Offered</th>
		  <th>Credits</th>
		  <th>Prerequisites</th>
		  <th>Type</th>
        </tr>
        <tr>
		  <td data-th="Course ID"><?php echo $row['course_id']; ?></td>
		  <td data-th="Course Name"><?php echo $row['course_name']; ?></td>
          <td data-th="Faculty ID"><?php echo $row['fac_id']; ?></td>
          <td data-th="Offered"><?php echo $row['offered_in']; ?></td>
          <td data-th="Credits"><?php echo $row['credits']; ?></td>
		  <td data-th="Prerequisites"><?php echo $row['pre_req']; ?></td>
		  <td data-th="Type"><?php echo $row['type']; ?></td>
        </tr>
		<?php $cid=$row['course_id']; ?>
		

<table border="2">
      <tbody>
        <tr>
          <th>Registration ID</th>
          <th>Course ID</th>
          <th>Student ID</th>
		  <th>Faculty ID</th>
		  <th>Semester</th>
        </tr>
		<?php
		$sql2="SELECT * FROM registration_tab WHERE course_id='$cid'";
		$result2=$connect->query($sql2);
		while($row2 = $result2->fetch_assoc()){
		?>
        <tr>
		  <td data-th="Course ID"><?php echo $row2['reg_id']; ?></td>
		  <td data-th="Course Name"><?php echo $row2['course_id']; ?></td>
          <td data-th="Faculty ID"><?php echo $row2['stu_id']; ?></td>
          <td data-th="Offered"><?php echo $row2['fac_id']; ?></td>
          <td data-th="Credits"><?php echo $row2['semester']; ?></td>
        </tr>
		<?php } ?>
	   </tbody>
    </table>
	<?php echo"<br><br>"; ?>
	<?php } ?>
		
	   </tbody>
    </table>
 </div>
</body>
</html>
