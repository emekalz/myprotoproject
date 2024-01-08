<?php
$servername = "localhost";
$username = "root";
$serverpassword = "";
$dbname = "messenger";

// Create connection
$conn = new mysqli($servername, $username, $serverpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?> 