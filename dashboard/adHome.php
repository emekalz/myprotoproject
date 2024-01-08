<?php include 'adSession.php'; ?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/dashboard-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2019 23:45:16 GMT -->
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

  <?php include 'adNavigation.php'; ?>
    <div class="main-content">

      
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                   STAFF COLLABORATION MESSENGER 
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Welcome, Administrator    
                </h1>

                <!-- admin create user
                <p class="nav-item">
                <a class="nav-link" class="btn btn-secondary" href="../admin/adduser.html" target="blank" ><b>Create User</b></a>
               </p> -->

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->
      
      <!-- CARDS -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-4 col-xl">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Task Groups
                    </h6>
                    
                    <!-- Heading -->
                    <span class="h2 mb-0">
                    <?php 
                      include "dbconnect.php";
                      if (mysqli_connect_errno())
                        {
                          echo "failed to connect to MySQL: " .
                        mysqli_connect_error();
                        }
                      $sql="SELECT * FROM tasks";

                      if ($result=mysqli_query($conn,$sql))
                        {
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          mysqli_free_result($result);
                        }
                      mysqli_close($conn);
                    ?>
                    </span>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Icon -->
                    <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->
  
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-4 col-xl">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Projects Created
                    </h6>
                    
                    <!-- Heading -->
                    <span class="h2 mb-0">
                    <?php 
                      include "dbconnect.php";
                      if (mysqli_connect_errno())
                        {
                          echo "failed to connect to MySQL: " .
                        mysqli_connect_error();
                        }
                      $sql="SELECT * FROM projects";

                      if ($result=mysqli_query($conn,$sql))
                        {
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          mysqli_free_result($result);
                        }
                      mysqli_close($conn);
                    ?>
                    </span>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>
              
          </div>
          <div class="col-12 col-lg-4 col-xl">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Notifications Created
                    </h6>
                    
                    <!-- Heading -->
                    <span class="h2 mb-0">
                    <?php 
                      include "dbconnect.php";
                      if (mysqli_connect_errno())
                        {
                          echo "failed to connect to MySQL: " .
                        mysqli_connect_error();
                        }
                      $sql="SELECT * FROM notifications";

                      if ($result=mysqli_query($conn,$sql))
                        {
                          $rowcount=mysqli_num_rows($result);
                          printf("%d\n",$rowcount);
                          mysqli_free_result($result);
                        }
                      mysqli_close($conn);
                    ?>
                    </span>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Icon -->
                    <span class="h2 fe fe-bell text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>
              
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Projects -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Latest Projects
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a href="adManageProject.php" class="small">View all</a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

              <?php
                include "dbconnect.php";
                $sql = "SELECT * FROM projects ORDER BY project_name DESC LIMIT 3 ";
                $result = $conn->query($sql);
                if ($result->num_rows>0){
                  while($row = $result->fetch_assoc()){
                    echo "<div class='row align-items-center'>
                    <div class='col ml-n2'>
  
                      <!-- Title -->
                      <h4 class='card-title mb-1'>
                        ".$row['project_name']."
                      </h4>
  
                      <!-- Time -->
                      <p class='card-text small text-muted'>
                        ".$row['project_desc']."
                      </p>
                      
                    </div>
                  </div> <!-- / .row -->
                  <hr>";
                      }
                    }
                ?> 
              </div> <!-- / .card-body -->
            </div> <!-- / .card -->           

          </div>
          <div class="col-12 col-xl-4">

            <!-- Projects -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Latest Tasks
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a href="adManageTask.php" class="small">View all</a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

              <?php
                include "dbconnect.php";
                $sql = "SELECT * FROM tasks ORDER BY task_name DESC LIMIT 3 ";
                $result = $conn->query($sql);
                if ($result->num_rows>0){
                  while($row = $result->fetch_assoc()){
                    echo "<div class='row align-items-center'>
                    <div class='col ml-n2'>
  
                      <!-- Title -->
                      <h4 class='card-title mb-1'>
                        ".$row['task_name']."
                      </h4>
  
                      <!-- Time -->
                      <p class='card-text small text-muted'>
                        ".$row['task_desc']."
                      </p>
                      
                    </div>
                  </div> <!-- / .row -->
                  <hr>";
                      }
                    }
                ?> 

              </div> <!-- / .card-body -->
            </div> <!-- / .card -->           

          </div>
          <div class="col-12 col-xl-4">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body text-center">
                <div class="row justify-content-center">
                  <div class="col-12 col-xl-10">
                
                    <!-- Image -->
                    <img src="assets/img/illustrations/happiness.svg" alt="..." class="img-fluid mt-n5 mb-4" style="max-width: 272px;">

                    <!-- Title -->
                    <h2 class="mb-2">
                      We released a new feature!
                    </h2>

                    <!-- Content -->
                    <p class="text-muted">
                      Easily send notifications to all staffs.
                    </p>

                    <!-- Button -->
                    <a href="adNotificationCreate.php" class="btn btn-success">
                      Try it for free
                    </a>
                  
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
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

<!-- Mirrored from dashkit.goodthemes.co/dashboard-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:01:07 GMT -->
</html>