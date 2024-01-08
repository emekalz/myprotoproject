<?php
$msg = "";
if(isset($_REQUEST["subscribeBtn"])){
    include "dbconnect.php";
    $Username = $_REQUEST["emails"];

    header('location:index.php');

    $sql="SELECT * FROM subscription WHERE emails ='$Username'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();

    $User=$rws["emails"];

  
   
    if($User==$Username){

      $msg = "Email already taken!";
    }

    else{
        $emails = $conn->real_escape_string($_POST['emails']);
        $q=mysqli_query($conn,"insert into subscription (emails) values('$emails')");
        $msg = "You have subscribed successfully!";

        
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.fourtyfive.co/html/mevius/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 07:41:36 GMT -->
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
  <link rel="shortcut icon" href="https://preview.fourtyfive.co/favicon.ico"><!-- 16x16 size favicon -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <!-- Hotjar Tracking Code for Fourtyfive.co -->
  <script>
    (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:970565,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
</head>
<body class="x-hidden has-sticky-header">

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
    <a class="navbar-brand" href="index-2php">
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
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#overview">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testimonials">Learn</a>
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
HERO SECTION
========================= -->
<header id="hero" class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-sm-6">
        <div class="hero-content">
          <div class="hero-title__group">
            <div class="hero-title">
              <h2>iMessage - A Messaging App For Organisations</h2>
            </div>
            <div class="Hero--Subtitle">
              <p class="lead">Boost your educational conversion with <b>iMessage</b></p>
            </div>
          </div>
          <h6><?php if ($msg != "") echo $msg . "<br>"; ?></h6>
          <div class="hero-cta-group">
            <form action="" method="post" autocomplete="off" class="hero-form cta__large">
              <div class="input-group">
                <label for="intro-email" class="sr-only">Email</label>
                <input type="email" name="emails" class="form-control" id="intro-email" placeholder="Enter your email">
                <!-- create link -->
                <a href="index.php">
                <button type="submit" name="subscribeBtn" class="btn btn-primary">Get Notifications</button>
                </a>
              </div>
              <span class="assistive-text">Subscribe for notifications, it's free and easy!</span>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-5 ml-auto">
        <div class="hero-figure">
          <img src="images/image2.png" class="img-fluid w-100" alt="">
        </div>
      </div>
    </div>
  </div>
</header>
<section id="overview" class="section-spacer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="feature-card">
          <div class="u-icon u-icon__circle u-icon__lg bg-dimped__primary">
            <i class="icon ion-ios-keypad"></i>
          </div>
          <div class="feature-card__body">
            <h4 class="feature-title">Simpler Messaging</h4>
            <p>A simpler way to send messages between workers</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="feature-card">
          <div class="u-icon u-icon__circle u-icon__lg bg-dimped__purple">
            <i class="icon ion-ios-apps"></i>
          </div>
          <div class="feature-card__body">
            <h4 class="feature-title">Seamless Workflow</h4>
            <p>Assign duties to staff for better productivity </p>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>
<!--
=========================
FEATURES OVERVIEW
========================= -->
<section id="hiw" class="section-spacer bg-very__gray">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm-6">
        <div class="feature-list-image">
          <img src="images/image1.png" class="img-fluid" alt="Image">
        </div>
      </div>
      <div class="col-sm-5 ml-auto">
        <div class="feature-list-wrapper">
          <div class="content-header">
            <h2 class="content-title">Secured Messaging</h2>
            <p>What iMessage for higher institution offers</p>
          </div>
          <ul class="list list-unstyled list-circle">
            <li>
              <span>Fully responsive</span>
            </li>
            <li>
              <span>24/7 Supports</span>
            </li>
            <li>
              <span>Secured Messaging</span>
            </li>
            <li>
              <span>Send Notifications</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-spacer">
  <div class="container">
    <div class="row flex-column-reverse flex-sm-row align-items-center">
      <div class="col-sm-5 mr-auto">
        <div class="feature-list-wrapper">
          <div class="content-header">
            <h2 class="content-title">Even more features</h2>
          </div>
          <ul class="list list-circle">
            <li>
              <span>Private Messaging</span>
            </li>
            <li>
              <span>Send Friend Request</span>
            </li>
            <li>
              <span>Unique Design</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="feature-list-image">
          <img src="images/image3.png" class="img-fluid" alt="Image">
        </div>
      </div>
    </div>
  </div>
</section>
<section id="testimonials" class="section-spacer bg-blue testimonial-section">
  <div class="container">
    <header class="text-center section-header">
      <span class="text-light">WELCOME MESSAGE</span>
      <h2 class="section-title"> Message From The H.O.D</h2>
    </header>
    <div class="row flex-column-reverse flex-lg-row-reverse align-items-sm-center">
      <div class="col-md-1">
        <ul class="dots testimonial-slider__indicators">
          <li class="owl-dot"></li>
          <li class="owl-dot"></li>
          <li class="owl-dot"></li>
        </ul>
      </div>
      <div class="col-md-11">
        <div class="owl-carousel testimonial-slider">
          <blockquote class="testimonial-item">
            <div class="row align-items-center flex-column-reverse flex-md-row justify-content-sm-center">
              <div class="col-12 col-md-4">
                <div class="testimonial-item__thumb">
                  <div class="testimonial-item__image">
                    <img src="images/hodhouse.jpg" alt="Image">
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="testimonial-content">
                  <div class="testimonial-item__context">
                    <p>All projects and tasks documents should be gotten from here.
                        Every other thing not found here is inidmissible in IMT
                    </p>
                  </div>

                  <!-- H o  D name -->
                  <div class="testimonial-meta">
                    <h5>Mr Obi Okonkwo</h5>
                    <a href="#" class="d-block text-light">H.O.D, INFORMATION TECHNOLOGY</a>
                  </div>
                </div>
              </div>
            </div>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="section-spacer footer-section">
  <div class="container">
    <div class="row flex-column-reverse flex-sm-row flex-lg-row">
      <div class="col-md-12 col-12">
        <div class="footer-widget first-of-footer-widget">
          <img src="images/logo.png" class="logo-sm mb-12" alt="Image">
          <p>Copyright &copy; 2020 IMT. All Rights Reserved.</p>
          <a href="#" class="d-block mb-10">Change Details</a>
          <a href="#">Use your email here or IMT own</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="js/vendors/jquery.min.js"></script>
<script src="js/vendors/bootstrap.bundle.min.js"></script>
<script src="js/vendors/jquery.magnific-popup.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/vendors/swiper.min.js"></script>
<script src="js/vendors/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from preview.fourtyfive.co/html/mevius/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2020 07:42:38 GMT -->
</html>
