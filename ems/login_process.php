<?php 
session_start();

?>

<!DOCTYPE html>
<html>


<body>

<?php 

include("db_connection.php");
$user=($_POST['userid']);
$pass=($_POST['password']);


$sql = "SELECT * FROM users_tab WHERE userid ='$user' AND password='$pass'";
$result=$connect->query($sql);
$row = $result->fetch_assoc(); 

if($row['role']==='S')  //Students
{
	$_SESSION['userid']=$user;
	$_SESSION['password']=$pass;
	$_SESSION['role'] = "S";
	header('location: ./students/index.php');	 
}
elseif($row['role']==='F')  
{
	$_SESSION['userid']=$user;
	$_SESSION['password']=$pass;
	$_SESSION['role'] = "F";
	header('location: ./faculty/index.php');	 
}
elseif($row['role']==='A')  
{
	$_SESSION['userid']=$user;
	$_SESSION['password']=$pass;
	$_SESSION['role'] = "A";
	header('location: ./admin/index.php');	 
}

else
{
	header('location: login-error.php');
}


mysqli_close($conn);
?>


</html>