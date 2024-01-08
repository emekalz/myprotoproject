<?php 
include "../dbconnect.php";
$sql = "DELETE from notifications WHERE notification_id='$_GET[id]'";
if($conn->query($sql) === TRUE){
	echo '<script>alert("Notification deleted Successfully!");';
	echo 'window.location= "../adNotificationView.php";</script>';
}else{
	echo '<script>alert("Operation Failed!");';
	echo 'window.location= "../adNotificationView.php";</script>';
}
$con->close();
?>


