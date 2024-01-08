<?php
session_start();
if(!isset($_SESSION["user_login"])){
  header("Location:logout.php");
}
?>
<?php
  $StudentID = $_SESSION['username'];
  
  include "dbconnect.php";
  $sql = "UPDATE users SET online = true WHERE userID = '$StudentID'";
  $result = $conn->query($sql) or die("Failed");
      
?>
<?php
  $StudentID = $_SESSION['username'];
  
  include "dbconnect.php";
  $sql = "SELECT * FROM users WHERE userID = '$StudentID'";
  $result = $conn->query($sql) or die("Failed");
  $rows = $result->fetch_assoc();
  
  // $_SESSION["userID"] = $rows["userID"];
    $name = $rows["name"];
    // $userID = $rows["userID"];
 
      
?>


