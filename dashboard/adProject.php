<?php include 'adSession.php'; ?>

<?php
 // Create database connection
  include "dbconnect.php";

  // If upload button is clicked ...
  if (isset($_POST['projectBtn'])) {
    $Username = $_REQUEST["project_id"];

    // If file has been submitted before...
    $sql="SELECT * FROM projects WHERE project_id ='$Username'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();

    $User=$rws["project_id"];
    
    if($User==$Username){
      echo "<script>alert('PROJECT ID ALREADY USED!');";
      echo "window.location = 'adProject.php';</script>";
    }else{
        // Get image name
  	  $docs = $_FILES['docs']['name'];
    // Get text
      $project_id = $conn->real_escape_string($_POST['project_id']);
      $project_name = $conn->real_escape_string($_POST['project_name']);
      $project_desc = $conn->real_escape_string($_POST['project_desc']);
      $project_type = $conn->real_escape_string($_POST['project_type']);
      $project_start = $conn->real_escape_string($_POST['project_start']);
      $project_stop = $conn->real_escape_string($_POST['project_stop']);
    
      // image file directory
      $target = "upload/".basename($docs);
      
      $sql = "INSERT INTO projects (project_id,project_name,project_desc,project_type,project_start,project_stop,docs)
      VALUES ('$project_id','$project_name','$project_desc','$project_type','$project_start','$project_stop','$docs')";
      // execute query
      mysqli_query($conn, $sql);

      if (move_uploaded_file($_FILES['docs']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }
      echo "<script>alert('Project Created Successfully');";
      echo "window.location = 'adManageProject.php';</script>";
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
                      Create a new Project Group 
                    </h1>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

            <!-- Form -->
            <form class="mb-4" action="" method="post" enctype="multipart/form-data">

              <!-- Project name -->
              <div class="form-group">
                <label>
                  Project name
                </label>
                <input type="hidden" name="project_id" class="form-control" value="NA/PROJ/<?php echo rand (1,9999); ?>">
                <input type="text" name="project_name" class="form-control">
              </div>

              <!-- Project description -->
              <div class="form-group">
                <label class="mb-1">
                  Project description
                </label>
                <small class="form-text text-muted">
                  This is how others will learn about the project, so make it good!
                </small>
                <textarea class="form-control" name="project_desc" rows="7"></textarea>
              </div>

              <!-- Project tags -->
              <div class="form-group">
                <label>
                  Project tags
                </label>
                <select name="project_type" class="form-control" data-toggle="select" multiple>
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
                    <input name="project_start" type="text" class="form-control" data-toggle="flatpickr">
                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Start date -->
                  <div class="form-group">
                    <label>
                      End date
                    </label>
                    <input name="project_stop" type="text" class="form-control" data-toggle="flatpickr">
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
                  
                  <!-- Private project -->
                  <div class="form-group">
                    <label class="mb-1">
                      Verify project details
                    </label>
                    <small class="form-text text-muted">
                      Ensure to verify the project details before submitting the information.
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
                        Once a project is created, you cannot revert it's information.
                      </p>

                    </div>
                  </div>
                  
                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="mt-5 mb-5">

              <!-- Buttons -->
              <button name="projectBtn" class="btn btn-block btn-success mb-4"><i class="fe fe-send mr-2"></i> Create Project</button>
              <a href="#" class="btn btn-block btn-link text-muted">
                Cancel this project
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