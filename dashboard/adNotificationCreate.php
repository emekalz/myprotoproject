<?php include 'adSession.php'; ?>

<?php
 // Create database connection
  include "dbconnect.php";

  // If upload button is clicked ...
  if (isset($_POST['notificationBtn'])) {
    $Username = $_REQUEST["notification_id"];

    // If file has been submitted before...
    $sql="SELECT * FROM notifications WHERE notification_id ='$Username'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();

    $User=$rws["notification_id"];
    
    if($User==$Username){
      echo "<script>alert('NOTIFICATION ID ALREADY USED!');";
      echo "window.location = 'notificationCreate.php';</script>";
    }else{
    
      // Get text
      $notification_id = $conn->real_escape_string($_POST['notification_id']);
      $notification_time = $conn->real_escape_string($_POST['notification_time']);
      $notification_name = $conn->real_escape_string($_POST['notification_name']);
      $notification_desc = $conn->real_escape_string($_POST['notification_desc']);
           
      $sql = "INSERT INTO notifications (notification_id,notification_time,notification_name,notification_desc)
      VALUES ('$notification_id','$notification_time','$notification_name','$notification_desc')";
      // execute query
      mysqli_query($conn, $sql);

      echo "<script>alert('Notification Created Successfully');";
      echo "window.location = 'adHome.php';</script>";
      
    }
  	
  }
?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/project-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:04 GMT -->
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
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">
            
            <!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      messagaing app for collaboration
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Create Notifications 
                    </h1>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

            <!-- Form -->
            <form class="mb-4" action="" method="post">

              <!-- Project name -->
              <div class="form-group">
                <label>
                  Notification name
                </label>
                <input type="hidden" name="notification_id" class="form-control" value="NA/NOTIFY/<?php echo rand (1,9999); ?>">
                <input type="hidden" name="notification_time" value="<?php date_default_timezone_set("Africa/Lagos"); echo "" . date("h:sa - D/m/y") ?>">
                <input type="text" name="notification_name" class="form-control">
              </div>

              <!-- Project description -->
              <div class="form-group">
                <label class="mb-1">
                  Notification description
                </label>
                <small class="form-text text-muted">
                  This is how others will learn about the notification, so make it good!
                </small>
                <textarea class="form-control" name="notification_desc" rows="7"></textarea>
              </div>

              <!-- Project tags -->
              <hr class="mt-4 mb-5">

              <button name="notificationBtn" class="btn btn-block btn-success mb-4"><i class="fe fe-send mr-2"></i> Create Notification </button>
              <a href="#" class="btn btn-block btn-link text-muted">
                Cancel this Notification
              </a>

            </form>

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

<!-- Mirrored from dashkit.goodthemes.co/project-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:05 GMT -->
</html>