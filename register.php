<?php
$msg = "";
if(isset($_REQUEST["regBtn"])){
    include "dbconnect.php";
    $Username = $_REQUEST["userID"];


    $sql="SELECT * FROM eligibleID WHERE userID ='$Username'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();

    $User=$rws["userID"];


    if($User!=$Username){

      $msg = "YOU ARE NOT A STAFF OF IFT DEPARTMENT!";
    }

    else{
        $name = $conn->real_escape_string($_POST['name']);
        $userID = $conn->real_escape_string($_POST['userID']);
        $password = $conn->real_escape_string($_POST['password']);
        $cpassword = $conn->real_escape_string($_POST['cpassword']);
        if ($password != $cpassword)
            $msg = "Your Passwords do not match!";
        else {
        $q=mysqli_query($conn,"insert into users(name,userID,password) values('$name','$userID','$password')");
        $msg = "Thanks for registering!";
        
      }
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preview.fourtyfive.co/html/mevius/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 07:45:23 GMT -->
<head>
  <meta charset="UTF-8">
  <title>iMessage - A Messaging App For Enterprises</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--
  =========================
  ICONS
  ========================= -->
  <!--IONICONS-->
  <link href="css/ionicons.min.css" rel="stylesheet">
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <!--
  =========================
  THIRD PARTY PLUGINS
  ========================= -->
  <!-- MANIFIC POPUPS-->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- OWL CAROUSEL-->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!--SWIPER CAROUSEL-->
  <link rel="stylesheet" href="css/swiper.min.css">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--
  =========================
  MAIN STYLES
  ========================= -->
  <!-- MAIN STYLES-->
  <link rel="stylesheet" href="css/styles.css">
  <!-- RESPONSIVE -->
  <link rel="stylesheet" href="css/responsive.css">
  <!--
  =========================
  FAVICONS
  ========================= -->
  <link rel="shortcut icon" href="https://preview.fourtyfive.co/favicon.ico">
  <!-- 16x16 size favicon -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body class="x-hidden">
  <!--
=========================
PRELOADER
========================= -->
  <div id="loading">
    <div class="ripple ripple1"></div>
    <div class="ripple ripple2"></div>
    <div class="ripple ripple3"></div>
    <div class="ripple ripple4"></div>
  </div>
  <!--END PRELOADER-->

  <nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="Image" class="logo-md">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-icon__circle">
        </span>
      <span class="menu-icon">
          <span class="menu-icon__bar"></span>
          <span class="menu-icon__bar"></span>
          <span class="menu-icon__bar"></span>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#overview">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#testimonials">Learn</a>
        </li>
      </ul>
      <div class="custom-menu__right">
        <a href="login.php" class="btn btn-default">Login</a>
        <a href="register.php" class="btn btn-primary btn-pills">Signup</a>
      </div>
    </div>
  </div>
</nav>
  <!--
=========================
FORM
========================= -->
  <main class="content">
    <div class="ui-container ui-small">
      <div class="mb-50">
        <h3>Signup </h3>
        <p>Join the iMessage Community</p>
      </div>
      <h6><center><?php if ($msg != "") echo $msg . "<br>"; ?></center></h6>
      <form action="" method="post" autocomplete="off">

        <div class="form-group">
          <label for="signup-form-email">Name</label>
          <input type="text" class="form-control" name="name" id="signup-form-email" placeholder="Surname Name">
        </div>

        <div class="form-group">
          <label for="signup-form-email">Username</label>
          <input type="text" class="form-control" name="userID" id="signup-form-email" placeholder="@username">
        </div>


        <div class="form-group">
          <label for="signup-form-password">Password</label>
          <input type="password" class="form-control" name="password" id="signup-form-password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="signup-form-password">Confirm Password</label>
          <input type="password" class="form-control" name="cpassword" id="signup-form-password" placeholder="Password">
        </div>
        <div class="form-group">
          <button class="btn btn-primary w-100 form-button" name="regBtn" type="submit">Signup</button>
        </div>
      </form>

      <div class="text-center">
        <span>Already have an account?
          <a href="login.php">Login</a>
        </span>
      </div>

    </div>
  </main>

  <script src="js/vendors/jquery.min.js"></script>
  <script src="js/vendors/bootstrap.bundle.min.js"></script>
  <script src="js/vendors/jquery.magnific-popup.min.js"></script>
  <script src="js/vendors/jquery.easing.min.js"></script>
  <script src="js/vendors/swiper.min.js"></script>
  <script src="js/vendors/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
</body>


<!-- Mirrored from preview.fourtyfive.co/html/mevius/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 07:45:24 GMT -->
</html>
