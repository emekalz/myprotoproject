<?php 
include "../dbconnect.php";
$sql = "DELETE from tasks WHERE task_id='$_GET[id]'";
if($conn->query($sql) === TRUE){
	echo '<script>alert("Task deleted Successfully!");';
		echo 'window.location= "../adManageTask.php";</script>';
}else{
	echo '<script>alert("Operation Failed!");';
		echo 'window.location= "../adManageTask.php";</script>';
}
$con->close();
?>


