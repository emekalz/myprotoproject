<?php 

// conn_to_db
// include_once '../dashboard/adsession.php';

$servername='localhost';
$username='root';
$serverpassword='';
$dbname='messenger';

$mysqli= new mysqli($servername,$username,$serverpassword,$dbname) 
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
    $email=mysqli_real_escape_string($mysqli,$_POST['email']);
    $status=mysqli_real_escape_string($mysqli,$_POST['status']);
    $userID=mysqli_real_escape_string($mysqli,$_POST['userID']);
    $password=mysqli_real_escape_string($mysqli,$_POST['password'] );
    // $cpassword=mysqli_real_escape_string($mysqli,$_POST['cpassword']); 

    // if($password != $cpassword)
    // {
    //     $msg = "Passwords do not match!";
    //     header('location:index.php?password_does_not_match');
    //     die();    
    // }
    $mysqli->query("INSERT into admin(name,email,status,userID,password,) values('$name','$email','$status','$userID','$password')")
    or

    die($mysqli->error);


    header('location:index.html?user_created_successfully');
}


?>
