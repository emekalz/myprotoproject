<?php include 'session.php'; ?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/profile-subscribers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:01:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>
    

    <title>Messaging App for collaboration</title>
  </head>
  <body>

      <?php include 'navigation.php'; ?>
      <div class='main-content'>

      
        <div class='header'>
  
          <div class='container-fluid'>
          <br><br><br><br>
            <!-- Body -->
            <div class='header-body mt-n5 mt-md-n6'>
              <div class='row align-items-end'>
                <div class='col mb-3 ml-n3 ml-md-n2'>
                  
                  <!-- Pretitle -->
                  <h6 class='header-pretitle'>
                    messaging app for collaboration
                  </h6>
  
                  <!-- Title -->
                  <h1 class='header-title'>
                    Group Members
                  </h1>
  
                </div>
                
              </div> <!-- / .row -->
              <div class='row align-items-center'>
                <div class='col'>
                  
                  <!-- Nav -->
                  <?php
                  include "dbconnect.php";
                  $sql = "SELECT * FROM tasks WHERE task_id='$_GET[id]'";
                  $result = $conn->query($sql);
                  if ($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                      echo "
                      <ul class='nav nav-tabs nav-overflow header-tabs'>
                        <li class='nav-item'>
                          <a href='taskDetails.php?id=".$row['task_id']."' class='nav-link'>
                            Group Discussion
                          </a>
                        </li>
                        <li class='nav-item'>
                          <a href='#' class='nav-link active'>
                            Members
                          </a>
                        </li>
                      </ul>";
                        }
                      }
                  ?>
  
                </div>
              </div>
            </div> <!-- / .header-body -->
  
          </div>
        </div>
  
        <!-- CONTENT -->
        <div class='container-fluid'>
          <div class='row'>
          <?php
          include "dbconnect.php";
          $sql = "SELECT * FROM users as us INNER JOIN task_members as tm WHERE us.userID = tm.userID AND task_id='$_GET[id]'";
          $result = $conn->query($sql);
          if ($result->num_rows>0){
            while($row = $result->fetch_assoc()){
              echo " 
            <div class='col-12 col-md-6 col-xl-4'>
              
              <!-- Card -->
              <div class='card'>
  
                <img src='assets/img/background.png' alt='...' class='card-img-top'>
  
                <div class='card-body text-center'>
  
                  <a href='profile-posts.html' class='avatar avatar-xl card-avatar card-avatar-top'>
                    <img src='../dashboard/upload/".$row["photo"]."' class='avatar-img rounded-circle border border-4 border-card' alt='...'>
                  </a>
  
                  <h2 class='card-title'>
                    <a href='#'>".$row['name']."</a>
                  </h2>
  
                  <p class='card-text text-muted'>
                    <small>
                    ".$row['userID']."
                    </small>
                  </p>
                  
                  <p class='card-text'>
                    <span class='badge badge-soft-secondary'>
                    ".$row['member_role']."
                    </span>
                  </p>
                  
                </div>
  
              </div>
  
            </div>";
              }
            }
        ?>
        </div>
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/profile-subscribers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:02 GMT -->
</html>