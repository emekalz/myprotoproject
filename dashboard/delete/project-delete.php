<?php 
include "../dbconnect.php";
$sql = "DELETE from projects WHERE project_id='$_GET[id]'";
if($conn->query($sql) === TRUE){
	echo '<script>alert("Project deleted Successfully!");';
		echo 'window.location= "../adManageProject.php";</script>';
}else{
	echo '<script>alert("Operation Failed!");';
		echo 'window.location= "../adManageProject.php";</script>';
}
$con->close();
?>


