<?php include 'adSession.php'; ?>

<?php
 // Create database connection
  include "dbconnect.php";

  // If upload button is clicked ...
  if (isset($_POST['taskBtn'])) {
    $Username = $_REQUEST["task_id"];

    // If file has been submitted before...
    $sql="SELECT * FROM tasks WHERE task_id ='$Username'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();

    $User=$rws["task_id"];
    
    if($User==$Username){
      echo "<script>alert('TASK ID ALREADY USED!');";
      echo "window.location = 'adtask.php';</script>";
    }else{
        // Get image name
  	  $docs = $_FILES['docs']['name'];
    // Get text
      $task_id = $conn->real_escape_string($_POST['task_id']);
      $task_name = $conn->real_escape_string($_POST['task_name']);
      $task_desc = $conn->real_escape_string($_POST['task_desc']);
      $task_type = $conn->real_escape_string($_POST['task_type']);
      $task_start = $conn->real_escape_string($_POST['task_start']);
      $task_stop = $conn->real_escape_string($_POST['task_stop']);
    
      // image file directory
      $target = "upload/".basename($docs);
      
      $sql = "INSERT INTO tasks (task_id,task_name,task_desc,task_type,task_start,task_stop,docs)
      VALUES ('$task_id','$task_name','$task_desc','$task_type','$task_start','$task_stop','$docs')";
      // execute query
      mysqli_query($conn, $sql);

      if (move_uploaded_file($_FILES['docs']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }
      echo "<script>alert('Task Created Successfully');";
      echo "window.location = 'adManageTask.php';</script>";
    }
  	
  }
?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/task-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:04 GMT -->
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
                      Create a new Task Group 
                    </h1>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

            <!-- Form -->
            <form class="mb-4" action="" method="post" enctype="multipart/form-data">

              <!-- task name -->
              <div class="form-group">
                <label>
                  Task name
                </label>
                <input type="hidden" name="task_id" class="form-control" value="NA/TASK/<?php echo rand (1,9999); ?>">
                <input type="text" name="task_name" class="form-control">
              </div>

              <!-- task description -->
              <div class="form-group">
                <label class="mb-1">
                  Task description
                </label>
                <small class="form-text text-muted">
                  This is how others will learn about the task, so make it good!
                </small>
                <textarea class="form-control" name="task_desc" rows="7"></textarea>
              </div>

              <!-- task tags -->
              <div class="form-group">
                <label>
                  Task tags
                </label>
                <select name="task_type" class="form-control" data-toggle="select" multiple>
                  <option>Department</option>
                  <option>Applied Sciences</option>
                  <option>School Management</option>
                </select>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  
                  <!-- Start date -->
                  <div class="form-group">
                    <label>
                      Start date
                    </label>
                    <input name="task_start" type="text" class="form-control" data-toggle="flatpickr">
                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Start date -->
                  <div class="form-group">
                    <label>
                      End date
                    </label>
                    <input name="task_stop" type="text" class="form-control" data-toggle="flatpickr">
                  </div>

                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <!-- Starting files -->
              <div class="form-group">
                <label class="mb-1">
                  Starting files
                </label>
                <small class="form-text text-muted">
                  Upload a document to guide the members on the purpose of the group.
                </small>
                <div class="card">
                <input type="file" name="docs" class="form-control">
                </div>
              </div>

              <!-- Divider -->
              <hr class="mt-5 mb-5">

              <div class="row">
                <div class="col-12 col-md-6">
                  
                  <!-- Private task -->
                  <div class="form-group">
                    <label class="mb-1">
                      Verify task details
                    </label>
                    <small class="form-text text-muted">
                      Ensure to verify the task details before submitting the information.
                    </small>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="switchOne" required>
                      <label class="custom-control-label" for="switchOne"></label>
                    </div>
                  </div>
                  
                </div>
                <div class="col-12 col-md-6">

                  <!-- Warning -->
                  <div class="card bg-light border">
                    <div class="card-body">
                      
                      <h4 class="mb-2">
                        <i class="fe fe-alert-triangle"></i> Warning
                      </h4>

                      <p class="small text-muted mb-0">
                        Once a task is created, you cannot revert it's information.
                      </p>

                    </div>
                  </div>
                  
                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="mt-5 mb-5">

              <!-- Buttons -->
              <button name="taskBtn" class="btn btn-block btn-success mb-4"><i class="fe fe-send mr-2"></i> Create Task Group</button>
              <a href="#" class="btn btn-block btn-link text-muted">
                Cancel this Task 
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

<!-- Mirrored from dashkit.goodthemes.co/task-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:02:05 GMT -->
</html>