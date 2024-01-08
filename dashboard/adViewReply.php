<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:10 GMT -->
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

    <div class="main-content">

      
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-7">
            
            <!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      messaging app for collaboration
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Reply To Notifications
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Buttons -->
                    <a href="adNotificationView.php" class="btn btn-success">
                      Back To Notifications
                    </a>
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

            <!-- Content -->
            <?php
              include "dbconnect.php";
              $sql = "SELECT * FROM reply WHERE id='$_GET[id]'";
              $result = $conn->query($sql);
              if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  echo "<div class='card card-body p-5'>
                  <div class='row'>
                    <div class='col text-right'>
    
                      <!-- Badge -->
                      <div class='badge badge-dark'>
                        Important
                      </div>
    
                    </div>
                  </div> <!-- / .row -->
                  <div class='row'>
                    <div class='col text-center'>
                      
                      <!-- Logo -->
                      <img src='assets/img/logo.png' alt='...' class='img-fluid mb-4' style='max-width: 2.5rem;'>
    
                      <!-- Title -->
                      <h2 class='mb-2'>
                      ".$row['notification_name']."
                      </h2>
    
                      <!-- Text -->
                      <p class='text-muted mb-6'>
                      ".$row['notification_id']."
                      </p>
    
                    </div>
                  </div> <!-- / .row -->
                  <div class='row'>
                    <div class='col-12 col-md-6'>
                      
                      <h6 class='text-uppercase text-muted'>
                        reply from
                      </h6>
    
                      <p class='text-muted mb-4'>
                        <strong class='text-body'>".$row['reply_name']."</strong> <br>
                      </p>
    
                      <h6 class='text-uppercase text-muted'>
                        reply Date
                      </h6>
    
                      <p class='mb-4'>
                      ".$row['reply_time']."
                      </p>
    
                    </div>
                    <div class='col-12 col-md-6 text-md-right'>
    
                      <h6 class='text-uppercase text-muted'>
                        Sent To
                      </h6>
    
                      <p class='text-muted mb-4'>
                        <strong class='text-body'>Head of Department</strong> <br>
                      </p>
    
                    </div>
                  </div> <!-- / .row -->
                  <div class='row'>
                    <div class='col-12'>
                      
                      <!-- Table -->
                      
                      <hr class='my-5'>
                      
                      <!-- Title -->
                      <h6 class='text-uppercase'>
                        Reply message
                      </h6>
    
                      <!-- Text -->
                      <p class='text-muted mb-0'>
                      ".$row['reply']."
                      </p>
    
                    </div>
                  </div> <!-- / .row -->
                </div>";
                }
              }
            ?>

          </div>
        </div> <!-- / .row -->
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

<!-- Mirrored from dashkit.goodthemes.co/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:10 GMT -->
</html>