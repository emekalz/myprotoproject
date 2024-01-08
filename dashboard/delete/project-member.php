<?php 
include "../dbconnect.php";
$sql = "DELETE from project_members WHERE id='$_GET[id]'";
if($conn->query($sql) === TRUE){
	echo '<script>alert("Member removed Successfully!");';
	echo 'window.location= "../adManageProject.php";</script>';
}else{
	echo '<script>alert("Operation Failed!");';
	echo 'window.location= "../adMembersProject.php";</script>';
}
$con->close();
?>


