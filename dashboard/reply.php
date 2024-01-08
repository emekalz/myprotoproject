<?php include 'session.php'; ?>

<?php
 // Create database connection
  include "dbconnect.php";

  // If upload button is clicked ...
  if (isset($_POST['replyBtn'])) {
   // Get text
   $notification_id = $conn->real_escape_string($_POST['notification_id']);
   $notification_name = $conn->real_escape_string($_POST['notification_name']);
   $reply_time = $conn->real_escape_string($_POST['reply_time']);
   $reply_name = $conn->real_escape_string($_POST['reply_name']);
   $reply = $conn->real_escape_string($_POST['reply']);
        
   $sql = "INSERT INTO reply (notification_id,notification_name,reply_time,reply_name,reply)
   VALUES ('$notification_id','$notification_name','$reply_time','$reply_name','$reply')";
   // execute query
   mysqli_query($conn, $sql);

   echo "<script>alert('Reply Sent Successfully');";
   echo "window.location = 'notificationView.php';</script>";
  	
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

    <?php include 'navigation.php'; ?>
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
                      Reply Notifications
                    </h1>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
            <?php
              include "dbconnect.php";
              $sql = "SELECT * FROM notifications WHERE notification_id='$_GET[id]'";
              $result = $conn->query($sql);
              if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  echo "
              <!-- Form -->
                <form class='mb-4' action='' method='post'>

                <!-- Project name -->
                <div class='form-group'>
                  <label>
                    Notification name
                  </label>
                  <input type='hidden' name='notification_id' class='form-control' value='".$row['notification_id']."'>
                  <input type='text' name='notification_name' value='".$row['notification_name']."' class='form-control' readonly>
                </div>
                      ";
                  }
                }
              ?>
              <input type='hidden' name='reply_time' value='<?php date_default_timezone_set('Africa/Lagos'); echo '' . date('h:sa - D/m/y') ?>'>
              <input type='hidden' name='reply_name' value='<?php echo $name; ?>'>
              <!-- Project description -->
              <div class='form-group'>
                <label class='mb-1'>
                  Reply to the Notification
                </label>
                <small class='form-text text-muted'>
                  This is reply goes directly to the HOD, so make it good!
                </small>
                <textarea class='form-control' name='reply' rows='7'></textarea>
              </div>

              <!-- Project tags -->
              <hr class='mt-4 mb-5'>

              <button name='replyBtn' class='btn btn-block btn-success mb-4'><i class='fe fe-send mr-2'></i> Reply Notification </button>
              <a href='#' class='btn btn-block btn-link text-muted'>
                Cancel Reply
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