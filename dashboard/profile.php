<?php include 'session.php'; ?>
<?php
    if (isset($_POST['updateBtn'])) {
       include "dbconnect.php";

      $name = $conn->real_escape_string($_POST['name']); 
        
        $sql="SELECT * FROM users WHERE userID = '$StudentID'";
        $result=$conn->query($sql) or die($conn->connect_error);
        $rws=  $result->fetch_assoc();

        $sql_pwd = "UPDATE users SET name = '$name' WHERE userID = '$StudentID'";
        $conn->query($sql_pwd) or die("Record Update Failed");
        echo "<script>alert('Name Changed successfully');";
        echo "window.location = 'profile.php';</script>";
    }
?>
<?php
    if(isset($_POST['profileBtn'])){
        move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
        include "dbconnect.php";
        $q = mysqli_query($conn, "UPDATE users SET photo = '".$_FILES['file']['name']."'WHERE userID = '$StudentID'");

    }
?>
<?php
if(isset($_REQUEST["changeBtn"])){
    include "dbconnect.php";
    $StudentID = $_SESSION['userID'];
    $OldPwd = $_REQUEST["OldPwd"]; 
    $NewPwd = $_REQUEST["NewPwd"];
    $ConfirmPwd = $_REQUEST["ConfirmPwd"];
  
    $sql="SELECT * FROM admin WHERE userID='$StudentID'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();
    
    $Pwd=$rws["password"];    
    
    if($OldPwd==$Pwd && $NewPwd == $ConfirmPwd){
        $sql_pwd = "UPDATE admin SET password = '$NewPwd' WHERE userID = '$StudentID'";
        $conn->query($sql_pwd) or die("Change Password Failed");
        echo "<script>alert('Password changed successfully');";
        echo "window.location = 'profile.php';</script>";
    }
}
?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from dashkit.goodthemes.co/profile-posts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:01:32 GMT -->
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
    <link rel="shortcut icon" href="assets/img/logo2.png" type="image/x-png">
    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/mystyles.css" >
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>
    

    <title>Members Profile</title>
  </head>
  <body>

      <?php include 'navigation.php'; ?>
    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      <!-- HEADER -->
      <div class="header">

        <!-- Image -->
        <img src="assets/img/background.png" class="header-img-top" alt="...">
        
        <div class="container-fluid">
          <!-- Body -->
          <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
              <div class="col-auto">
                
                <!-- Avatar -->
                <div class="avatar avatar-xxl header-avatar-top">
                  <?php 
                    include "dbconnect.php";
                    $q = mysqli_query($conn,"SELECT * FROM users WHERE userID = '$StudentID'");
                    while($row = mysqli_fetch_assoc($q)){
                    if($row['photo'] == ""){
                    echo "<img  src='upload/avatar.jpg' class='avatar-img rounded-circle border border-4 border-body'>";
                    } else {
                    echo "<img  src='upload/".$row['photo']."' class='avatar-img rounded-circle border border-4 border-body'>";
                    }
                    echo "<br>";
                      }
                  ?>
                </div>

              </div>
              <div class="col mb-3 ml-n3 ml-md-n2">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  profile
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  <?php echo $name ?>
                </h1>

              </div>
              
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div>

      <!-- CONTENT -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-10 col-xl-8">
            
              <?php
                include "dbconnect.php";
                $sql = "SELECT * FROM admin WHERE userID = '$StudentID'";
                $result = $conn->query($sql);
                if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  echo "<form class='mb-4' action='' method='post' autocomplete='off'>
                        <div class='row'>
                          <div class='col-12 col-md-12'>
                            
                            <!-- Phone -->
                            <div class='form-group'>

                              <!-- Label -->
                              <label>
                                Name
                              </label>

                              <!-- Input -->
                              <input type='text' name='name' value='".$row['name']."' class='form-control mb-3' >

                            </div>

                          </div>
                        </div> <!-- / .row -->
                        <div class='row'>
                          <div class='col-12 col-md-12'>
                            
                            <button type='submit' name='updateBtn' class='btn btn-success'>
                              Make Changes
                            </button>
                          </div>
                        </div>
                      </form>";
                      }
                  }
              ?>
            
            <form action="" method="post">
              <hr class="mt-4 mb-5">
              <div class="row">
                <div class="col-12 col-md-6 order-md-2">
                  
                  <!-- Card -->
                  <div class="card bg-light border ml-md-4">
                    <div class="card-body">
                      
                      <p class="mb-2">
                        Password requirements
                      </p>

                      <p class="small text-muted mb-2">
                        To create a new password, you have to meet all of the following requirements:
                      </p>

                      <ul class="small text-muted pl-4 mb-0">
                        <li>
                          Minimum 6 character
                        </li>
                        <li>
                        Can’t be the same as a previous password
                        </li>
                      </ul>

                    </div>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Password -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Old Password
                    </label>

                    <!-- Input -->
                    <input type="password" name="OldPwd" class="form-control">

                  </div>

                  <!-- New password -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      New password
                    </label>

                    <!-- Input -->
                    <input type="password" minlength="6" name="NewPwd" class="form-control">

                  </div>

                  <!-- Confirm new password -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Confirm New Password
                    </label>

                    <!-- Input -->
                    <input type="password" minlength="6" name="ConfirmPwd" class="form-control">

                  </div>

                  <!-- Submit -->
                  
                  
                </div>
              </div> <!-- / .row -->
              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <div class="row">
                <div class="col-12 col-md-12">
                  
                  <!-- Public profile -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      Confirm Settings
                    </label>

                    <div class="row">
                      <div class="col-auto">
                        
                        <!-- Switch -->
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switchOne" required="required">
                          <label class="custom-control-label" for="switchOne"></label>
                        </div>

                      </div>
                      <div class="col ml-n2">
                        
                        <!-- Help text -->
                        <small class="text-muted">
                          Make sure this switched is toggled to proceed
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <button type="submit" name="changeBtn" class="btn btn-success">
                    Change Password
                  </button>
                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              

            </form>

          </div>
          <div class="col-12 col-xl-4">
            
            <!-- Card -->
            <div class="card">
              <div class="card-body">

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h5 class="mb-0">
                      Name
                    </h5>

                  </div>
                  <div class="col-auto">
                    
                    <time class="small text-muted" datetime="1988-10-24">
                      <?php echo $name ?>
                    </time>

                  </div>
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h5 class="mb-0">
                      @username
                    </h5>

                  </div>
                  <div class="col-auto">
                    
                    <time class="small text-muted" datetime="2018-10-28">
                      <?php echo $userID ?>
                    </time>

                  </div>
                </div> 
                <hr>

                <div class="row align-items-left">
                  <div class="col">
                    
                    <form action="" method="post" enctype="multipart/form-data">
                      <center><label for="file" class="input-label">Choose Photo</label>
                      <input id="file" type="file" name="file" required> <br>
                      <button type="submit" name="profileBtn" class="btn btn-warning btn-round">UPLOAD</button><br><br><br></center>
                    </form>

                  </div>
                </div> 
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

<!-- Mirrored from dashkit.goodthemes.co/profile-posts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 00:01:37 GMT -->
</html>