<?php
session_start();
if(!isset($_SESSION["admin_login"])){
  header("Location:logout.php");
}
?>
<?php
  $adminID = $_SESSION['username'];
  
  include "dbconnect.php";
  $sql = "UPDATE admin SET online = true WHERE userID = '$adminID'";
  $result = $conn->query($sql) or die("Failed");
  
?>


<?php
  $adminID = $_SESSION['username'];
  
  include "dbconnect.php";
  $sql = "SELECT * FROM admin WHERE userID = '$adminID'";
  $result = $conn->query($sql) or die("Failed");
  $rows = $result->fetch_assoc();
  
  // $_SESSION["userID"] = $rows["userID"];  
  // $name = $rows["name"];  
  // $userID = $rows["userID"];
?>