<?php include 'adSession.php'; ?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
    <?php
      include "dbconnect.php";
      $sql = "SELECT * FROM projects WHERE project_id='$_GET[id]'";
      $result = $conn->query($sql);
      if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
          echo " 
          <div class='main-content'>

      
          <!-- HEADER -->
          <div class='header'>
    
            <div class='container-fluid'>
            <br><br><br><br>
              <!-- Body -->
              <div class='header-body mt-n5 mt-md-n6'>
                <div class='row align-items-end'>
                  
                  <div class='col mb-3 ml-n3 ml-md-n2'>
                    <!-- Title -->
                    <h1 class='header-title'>
                        ".$row['project_name']."
                    </h1><br>
                    <h4 class='header-title'>
                      PROJECT DESCRIPTION: ".$row['project_desc']."
                    </h4>
    
                  </div>
                  <div class='col-12 col-md-auto mt-2 mt-md-0 mb-md-3'>
                    
                    <!-- Button -->
                    <a href='upload/".$row['docs']."'; download class='btn btn-dark d-block d-md-inline-block'>
                      Download project Document
                    </a>
                    <a href='adManageProject.php';' class='btn btn-danger d-block d-md-inline-block'>
                      Leave Group
                    </a>
    
                  </div>
                </div> <!-- / .row -->
                <div class='row align-items-center'>
                  <div class='col'>
                    
                    <!-- Nav -->
                    <ul class='nav nav-tabs nav-overflow header-tabs'>
                      <li class='nav-item'>
                        <a href='team-overview.html' class='nav-link active'>
                          Group Discussion
                        </a>
                      </li>
                      <li class='nav-item'>
                        <a href='team-members.html' class='nav-link'>
                          Members
                        </a>
                      </li>
                    </ul>
    
                  </div>
                </div>
              </div> <!-- / .header-body -->
    
            </div>
    
          </div> <!-- / .header -->
          
          <!-- CONTENT -->
          <div class='container-fluid'>
            <div class='row'>
              <div class='col-12 col-xl-7'>
                <div id='messages'>
                    
                </div>  
              
                
              </div>
              <div class='col-12 col-xl-5'>
                <div class='card'>
                    <div class='card-body'>
                    
                    <!-- Form -->
                    <form>
                      <div class='input-group input-group-lg input-group-flush input-group-merge'>
                        <input type='hidden' name='project_id' id='project_id' class='form-control form-control-appended' value='".$row['project_id']."' ><br><br>
                        <input type='hidden' name='name' id='name' class='form-control form-control-appended' value='$name' ><br><br>
                        <input type='hidden' name='chatTime' id='chatTime' class='form-control form-control-appended' value='".date_default_timezone_set("Africa/Lagos"); echo "" . date(" D m, Y")."' ><br><br>
                        <input type='hidden' name='userID' id='userID' class='form-control form-control-appended' value='$userID'><br><br>
                        <input type='text' name='chat' id='chat' class='form-control form-control-appended' placeholder='Post to project'><br><br>
                        
                      </div><br>
                      <button type='button' name='chatBtn' id='chatBtn' class='btn btn-block btn-success mb-4'><i class='fe fe-send mr-2'></i> Post </button>
                    </form>
    
                  </div>
                </div>
              </div>
            </div> <!-- / .row -->
          </div>
    
        </div>";
            }
          }
      ?> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="js/jquery.min.js"></script>
		<script src="js/projectchat.js"></script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.min.js"></script> -->

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/team-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:01:41 GMT -->
</html>