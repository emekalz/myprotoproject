<?php include 'adSession.php'; ?>
<?php
$msg = "";
if(isset($_REQUEST["addBtn"])){
    include "dbconnect.php";
    
    $task_id = $conn->real_escape_string($_POST['task_id']);
    $task_name = $conn->real_escape_string($_POST['task_name']);
    $name = $conn->real_escape_string($_POST['name']);
    $userID = $conn->real_escape_string($_POST['userID']);
    $member_role = $conn->real_escape_string($_POST['member_role']);
    $q=mysqli_query($conn,"insert into task_members(task_id,task_name,name,userID,member_role)
    values('$task_id','$task_name','$name','$userID','$member_role')");
    echo "<script>alert('Member Added Successfully!');";
    echo "window.location = 'adManageTask.php';</script>";
  }
?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:01:48 GMT -->
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

    <?php
      include "dbconnect.php";
      $sql = "SELECT * FROM tasks WHERE task_id='$_GET[id]'";
      $result = $conn->query($sql);
      if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
          echo " <div class='container-fluid'>
          <div class='row justify-content-center'>
            <div class='col-12 col-lg-10 col-xl-8'>
              
              <!-- Header -->
              <div class='header mt-md-5'>
                <div class='header-body'>
                  <div class='row align-items-center'>
                    <div class='col'>
                      
                      <!-- Pretitle -->
                      <h6 class='header-pretitle'>
                        ADD MEMBERS
                      </h6>
  
                      <!-- Title -->
                      <h1 class='header-title'>
                        Add Members to ".$row['task_name']."
                      </h1>
  
                    </div>
                  </div> <!-- / .row -->
                  <div class='row align-items-center'>
                    <div class='col'>
                      
                      <!-- Nav -->
                      <ul class='nav nav-tabs nav-overflow header-tabs'>
                        <li class='nav-item'>
                          <a href='#!' class='nav-link active'>
                            Add members who this task will be assigned to 
                          </a>
                        </li>
                      </ul>
  
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Form -->
              <form class='mb-4' action='' method='post'>
  
                <div class='row'>
                  <div class='col-12'>
                    
                    <!-- First name -->
                    <div class='form-group'>
  
                      <!-- Label -->
                      <label>
                        Fullname
                      </label>
  
                      <!-- Input -->
                      <input type='hidden' name='task_id' value='".$row['task_id']."' class='form-control'>
                      <input type='hidden' name='task_name' value='".$row['task_name']."' class='form-control'>
                      <input type='text' name='name' class='form-control'>
  
                    </div>
  
                  </div>
                  <div class='col-12'>
                    
                    <!-- Email address -->
                    <div class='form-group'>
  
                      <!-- Label -->
                      <label class='mb-1'>
                      Username
                      </label>
  
                      <!-- Form text -->
                      <small class='form-text text-muted'>
                        This username will be shown to others publicly, only to the specified staffs you choose.
                      </small>
  
                      <!-- Input -->
                      <input type='text' name='userID' class='form-control'>
  
                    </div>
  
                  </div>
                  <div class='col-12'>
                    
                    <div class='form-group'>
  
                      <!-- Label -->
                      <label>
                       Group Role
                      </label>
  
                      <select name='member_role' class='form-control' data-toggle='select' multiple>
                        <option>Group Leader</option>
                        <option>Assistant Group Leader</option>
                        <option>Group Member</option>
                      </select>
  
                    </div>
  
                  </div>
                </div> <!-- / .row -->
  
                <!-- Divider -->
                <hr class='mt-4 mb-5'>
  
                <div class='row'>
                  <div class='col-12'>
                    
                    <!-- Public profile -->
                    <div class='form-group'>
  
                      <!-- Label -->
                      <label class='mb-1'>
                        Verify Member Details and Roles
                      </label>
  
                      <!-- Form text -->
                      <small class='form-text text-muted'>
                        Ensure the details above and roles are verified before adding member to Task Group
                      </small>
  
                      <div class='row'>
                        <div class='col-auto'>
                          
                          <!-- Switch -->
                          <div class='custom-control custom-switch'>
                            <input type='checkbox' class='custom-control-input' id='switchOne' required>
                            <label class='custom-control-label' for='switchOne'></label>
                          </div>
  
                        </div>
                      </div> <!-- / .row -->
                    </div>
  
                  </div>
                </div> <!-- / .row -->
  
                <!-- Divider -->
                <hr class='mt-4 mb-5'>
  
                <div class='row'>
                  <div class='col-12 col-md-6'>
  
                    <button name='addBtn' type='submit' class='btn btn-success'>
                      Add Member 
                    </button>
                    
                  </div>
                </div> <!-- / .row -->
  
              </form>
  
            </div>
          </div> <!-- / .row -->
        </div>";
            }
          }
      ?> 
      
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

<!-- Mirrored from dashkit.goodthemes.co/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:01:48 GMT -->
</html>