<?php 
include "../dbconnect.php";
$sql = "DELETE from task_members WHERE id='$_GET[id]'";
if($conn->query($sql) === TRUE){
	echo '<script>alert("Member removed Successfully!");';
	echo 'window.location= "../adManageTask.php";</script>';
}else{
	echo '<script>alert("Operation Failed!");';
	echo 'window.location= "../adMembersTask.php";</script>';
}
$con->close();
?>


