<?php include 'session.php'; ?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/team-members.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:06 GMT -->
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
    <?php include 'Navigation.php'; ?>
    <div class="main-content">

      
      <!-- HEADER -->
      <div class="header">

        <!-- Image -->
        <img src="assets/img/background.png" class="header-img-top" alt="...">
        
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
              <div class="col mb-3 ml-n3 ml-md-n2">
                
                <!-- Pretitle --><br><br><br>
                <h6 class="header-pretitle">
                  Your Task Groups
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  View tasks assigned to you
                </h1>

              </div>
              <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">
                
                <!-- Button -->
                <!-- <a href="adTask.php" class="btn btn-dark d-block d-md-inline-block">
                  Create More Task Groups
                </a> -->

              </div>
            </div> <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">
                
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="team-overview.html" class="nav-link active">
                      Overview
                    </a>
                  </li>
                </ul>

              </div>
            </div>
          </div> <!-- / .header-body -->

        </div>

      </div> <!-- / .header -->
      
      <!-- CONTENT -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-xl-12">
            
            <!-- Card -->
            <?php
              include "dbconnect.php";
              $sql = "SELECT * FROM tasks as tk INNER JOIN task_members as tm WHERE tk.task_id = tm.task_id AND userID = '$StudentID'";
              $result = $conn->query($sql);
              if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  echo "
                  <div class='card mb-3'>
                    <div class='card-body'>
                      <div class='row align-items-center'>
                        <div class='col-auto'>
                          
                          <!-- Avatar -->
                          <a href='#' class='avatar avatar-lg'>
                            <img src='assets/img/logo.png' alt='...' class='avatar-img rounded-circle'>
                          </a>
      
                        </div>
                        <div class='col ml-n2'>
                          
                          <!-- Title -->
                          <h3 class='card-title mb-1'>
                          ".$row['task_name']."
                          </h3>
                          <h4 class='card-title mb-1'>
                          Task Duration:".$row['task_start']." To ".$row['task_stop']."
                          </h4>
      
                          <!-- Text -->
                          <p class='card-text small text-muted mb-1'>
                          ".$row['task_desc']."
                          </p>
      
                          <!-- Status -->
                          <p class='card-text small'>
                            <span class='text-success'>●</span> Task Type: ".$row['task_type']."
                          </p>
      
                        </div>
                        <div class='col-auto'>
                          
                          <!-- Button -->
                          <a href='taskDetails.php?id=".$row['task_id']."' class='btn btn-sm btn-success d-none d-md-inline-block'>
                            View Task
                          </a>
                        </div>
                        <div class='col-auto'>
                          
                          <!-- Dropdown -->
                          <div class='dropdown'>
                            <a href='#' class='dropdown-ellipses dropdown-toggle' role='button' data-toggle='dropdown' aria-haspopup='true' data-expanded='false'>
                              <i class='fe fe-more-vertical'></i>
                            </a>
                            <div class='dropdown-menu dropdown-menu-right'>
                              <a href='membersTask.php?id=".$row['task_id']."' class='dropdown-item'>
                                View Members
                              </a>
                              <hr>
                              <a href='#!' class='dropdown-item'>
                                Leave Task Group
                              </a>
                            </div>
                          </div>
      
                        </div>
                      </div> <!-- / .row -->
                    </div>
                  </div>";
                  }
                }
            ?>
                  <br><br>
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

<!-- Mirrored from dashkit.goodthemes.co/team-members.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:06 GMT -->
</html>