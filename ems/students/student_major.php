<?php
session_start();
include('Header.php');
include("db_connection.php");
$user=($_SESSION['userid']);
$sql="SELECT * FROM student_tab WHERE stu_id='$user'";
$result=$connect->query($sql);
$row = $result->fetch_assoc();
$department = 'Computer Science';
?>
<html>
<body style="background-color:#FFF8DC;">


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
    $sql2 = "SELECT * FROM faculty_tab WHERE department='$department'";
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

 </div>
</body>
</html>