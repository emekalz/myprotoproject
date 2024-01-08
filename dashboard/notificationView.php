<?php include 'session.php'; ?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:08 GMT -->
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
      <div class="main-content">

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            
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
                      View Notifications
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->
                    <!-- <a href="notificationCreate.php" class="btn btn-success">
                      New Notification
                    </a> -->
                    
                  </div>
                </div> <!-- / .row -->
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                      <li class="nav-item">
                        <a href="#!" class="nav-link active">
                          View your notifications here
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card" data-toggle="lists" data-lists-values='["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Search -->
                    <form class="row align-items-center">
                      <div class="col-auto pr-0">
                        <span class="fe fe-search text-muted"></span>
                      </div>
                      <div class="col">
                          <input type="search" class="form-control form-control-flush search" placeholder="Search">
                      </div>
                    </form>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive">
                <table class="table table-sm table-nowrap">
                  <thead>
                    <tr>
                      <th>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectAll">
                          <label class="custom-control-label" for="ordersSelectAll">
                            &nbsp;
                          </label>
                        </div>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" >
                          Title
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort">
                          Date Created
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort">
                          Notification Actions
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort">
                          
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list">
                  <?php
                    include "dbconnect.php";
                    $sql = "SELECT * FROM notifications ORDER BY notification_id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows>0){
                      while($row = $result->fetch_assoc()){
                        echo "<tr>
                          <td>
                            <div class='custom-control custom-checkbox table-checkbox'>
                              <input type='checkbox' class='custom-control-input' name='ordersSelect' id='ordersSelectOne'>
                              <label class='custom-control-label' for='ordersSelectOne'>
                                &nbsp;
                              </label>
                            </div>
                          </td>
                          <td class='orders-order'>
                          ".$row['notification_name']."
                          </td>
                          <td class='orders-product'>
                          ".$row['notification_time']."
                          </td>
                          <td class='orders-product'>
                          <a href='notification.php?id=".$row['notification_id']."' class='btn btn-sm btn-success d-none d-md-inline-block'>
                            View Notification
                          </a>
                          </td>
                          <td class='orders-product'>
                          <a href='reply.php?id=".$row['notification_id']."' class='btn btn-sm btn-info d-none d-md-inline-block'>
                            Reply Notification
                          </a>
                          </td>
                        </tr>";
                        }
                      }
                  ?> 
                     
                  </tbody>
                </table>
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

<!-- Mirrored from dashkit.goodthemes.co/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:09 GMT -->
</html>