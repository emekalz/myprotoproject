<?php 

// conn_to_db

$servername='localhost';
$username='root';
$serverpassword='';
$dbname='messenger';

$mysqli= new mysqli('localhost','root','','messenger') 
or die(mysqli_error($mysqli));

// if ($mysqli->connect_error)
// {
//     echo "Unable to connect ERROR". $mysqli->connect_errno;
//     exit();
// }

// setting-loop-function1
if (isset($_POST["btnsub"]))
// if (isset($_POST["name"]) && isset($_POST["o_name"]) && isset($_POST["userID"]) && isset($_POST["password"]) && isset($_POST["bio"]))
{
    $name=mysqli_real_escape_string($mysqli,$_POST['name']);
    $o_name=mysqli_real_escape_string($mysqli,$_POST['o_name']);
    $userID=mysqli_real_escape_string($mysqli,$_POST['userID']);
    $password=mysqli_real_escape_string($mysqli,$_POST['password'] );
    $bio=mysqli_real_escape_string($mysqli,$_POST['bio']); 
 
    $mysqli->query("INSERT into users (name,o_name,userID,password,bio) values('$name','$o_name','$userID','$password','$bio')")
    or

    die($mysqli->error);

    header('location:index.php?user_created_successfully');
}


?>
