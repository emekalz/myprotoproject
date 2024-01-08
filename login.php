<?php 
$msg = "";
if(isset($_REQUEST["loginBtn"])){
    include "dbconnect.php";
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    
    

    $sql="SELECT * FROM users WHERE userID ='$username' AND password ='$password'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();
    
    
    $User=$rws["userID"];
    $Pwd=$rws["password"];  
      
    
    if($User==$username && $Pwd==$password){
            session_start();
            $_SESSION['user_login']=1;
            $_SESSION['username']=$username;
        header('location:dashboard/home.php');
            } 
    else{
      $msg = "Username or Password is wrong!";
      }


      // empty_function
      if (empty($userID) && empty($password))
      {
        $msg="Fill in your details";
           
        header('location:login.php?enter_your_details');
        exit();
      }

   }
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preview.fourtyfive.co/html/mevius/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 07:44:27 GMT -->
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
        <h3>Login</h3>
        <p>Login with your username and password</p>
      </div>
      <h6><center><?php if ($msg != "") echo $msg . "<br>"; ?></center></h6>
      <form action="" method="post" autocomplete="off">
        <div class="form-group">
          <label for="login-form-email">Username</label>
          <input type="text" name="username" class="form-control" id="login-form-email" placeholder="@username"
          required data-validation-message-required="Fill in this field">
        </div>

        <div class="form-group">
          <label for="login-form-password">Password</label>
          <input type="password" name="password" class="form-control" id="login-form-password" placeholder="password"
          required data-validation-message-required="Fill in this field">
        </div>
        <div class="form-group">
          <button class="btn btn-primary w-100 form-button" name="loginBtn" type="submit">Login</button>
        </div>
      </form>

      <div class="text-center">
        <span>Don't have account?
          <a href="register.php">Signup for free</a>
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


<!-- Mirrored from preview.fourtyfive.co/html/mevius/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 07:45:23 GMT -->
</html>
