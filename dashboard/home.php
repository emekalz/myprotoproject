<?php include 'session.php'; ?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:11 GMT -->
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
    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      
      <div class="pt-7 pb-8 bg-dark bg-ellipses">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
              
              <!-- Title -->
              <h1 class="display-3 text-center text-white">

                Welcome <?php
                          echo $name 
                        ?>
              </h1>
              
              <!-- Text -->
              <p class="lead text-center text-muted">
                This is our messaging app that helps us collaborate better in IMT Department.
              </p>

            </div>
          </div> <!-- / .row -->
        </div>
      </div>

      <!-- CONTENT -->
      <div class="container-fluid">
        <div class="row mt-n7">
          <div class="col-12 col-lg-6">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                
                <!-- Title -->
                <h6 class="text-uppercase text-center text-muted my-4">
                  MESSAGING APP FOR ENTERPRISES
                </h6>
                
                <!-- Price -->
                <div class="row no-gutters align-items-center justify-content-center">
                  <div class="col-auto">
                    <div class="display-2 mb-0">Tasks</div>
                  </div>
                </div> <!-- / .row -->
                
                <!-- Period -->
                <div class="h6 text-uppercase text-center text-muted mb-5">
                  <br>SEE TASKS DETAILS
                </div>

                <!-- Features -->
                <div class="mb-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                      <small>Number of Assigned Tasks: <?php 
                        include "dbconnect.php";
                        if (mysqli_connect_errno())
                          {
                            echo "failed to connect to MySQL: " .
                          mysqli_connect_error();
                          }
                          $sql = "SELECT * FROM tasks as tk INNER JOIN task_members as tm WHERE tk.task_id = tm.task_id AND userID = '$StudentID'";

                        if ($result=mysqli_query($conn,$sql))
                          {
                            $rowcount=mysqli_num_rows($result);
                            printf("%d\n",$rowcount);
                            mysqli_free_result($result);
                          }
                        mysqli_close($conn);
                      ?></small> 
                      
                    </li>
                  </ul>
                </div>

                <!-- Button -->
                <a href="taskview.php" class="btn btn-block btn-success">
                  View all tasks assigned to you
                </a>

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6">
              
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                
                <!-- Title -->
                <h6 class="text-uppercase text-center text-muted my-4">
                  MESSAGING APP FOR ENTERPRISES
                </h6>
                
                <!-- Price -->
                <div class="row no-gutters align-items-center justify-content-center">
                  <div class="col-auto">
                    <div class="display-2 mb-0">Projects</div>
                  </div>
                </div> <!-- / .row -->
                
                <!-- Period -->
                <div class="h6 text-uppercase text-center text-muted mb-5">
                  <br>SEE PROJECT DETAILS
                </div>

                <!-- Features -->
                <div class="mb-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                      <small>Number of Assigned Projects: <?php 
                        include "dbconnect.php";
                        if (mysqli_connect_errno())
                          {
                            echo "failed to connect to MySQL: " .
                          mysqli_connect_error();
                          }
                          $sql = "SELECT * FROM projects as tk INNER JOIN project_members as tm WHERE tk.project_id = tm.project_id AND userID = '$StudentID'";

                        if ($result=mysqli_query($conn,$sql))
                          {
                            $rowcount=mysqli_num_rows($result);
                            printf("%d\n",$rowcount);
                            mysqli_free_result($result);
                          }
                        mysqli_close($conn);
                      ?></small> 
                      
                    </li>
                  </ul>
                </div>

                <!-- Button -->
                <a href="projectview.php" class="btn btn-block btn-success">
                  View all projects you are part of
                </a>

              </div>
            </div>

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

<!-- Mirrored from dashkit.goodthemes.co/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:11 GMT -->
</html>