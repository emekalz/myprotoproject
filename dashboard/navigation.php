<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand">
            <img src="assets/img/logo.png" class="navbar-brand-img 
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">
        
              <!-- Toggle -->
              <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">

                <!-- Picture uploader -->
                <?php 
                    include "dbconnect.php";
                    $q = mysqli_query($conn,"SELECT * FROM users WHERE userID = '$StudentID'");
                    while($row = mysqli_fetch_assoc($q)){
                    if($row['photo'] == "")
                    {
                    echo "<img  src='upload/avatar.jpg' class='avatar-img rounded-circle border border-4 border-body'>";
                    } 
                    else 
                    {
                    echo "<img  src='upload/".$row['photo']."' class='avatar-img rounded-circle border border-4 border-body'>";
                    }
                    echo "<br>";
                      }
                  ?>

                  <!-- <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="..."> -->
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="profile.php" class="dropdown-item">Profile</a>
                <hr class="dropdown-divider">
                <a href="logout.php" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.php" role="button" aria-expanded="false" >
                  <i class="fe fe-home"></i> Homepage
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                  <i class="fe fe-send"></i> Projects and Tasks
                </a>
                <div class="collapse show" id="sidebarPages">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="projectview.php" class="nav-link" role="button">
                        View Projects
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="taskview.php" class="nav-link"  role="button">
                        View Tasks
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#notify" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="notify">
                <i class="fe fe-bell"></i> Notifications
                </a>
                <div class="collapse " id="notify">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="notificationView.php" class="nav-link ">
                        View Notifications
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <div class="mt-auto"></div>
      
            
            <!-- Customize -->
            <a href="logout.php" class="btn btn-block btn-danger mb-4">
              <i class="fe fe-log-out mr-2"></i> Logout
            </a>
            
      
            
            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">
        
              <div class="dropup">
          
                <!-- Toggle -->
                <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">

                  <?php 
                    include "dbconnect.php";
                    $q = mysqli_query($conn,"SELECT * FROM users WHERE userID = '$StudentID'");
                    while($row = mysqli_fetch_assoc($q)){
                    if($row['photo'] == "")
                    {
                    echo "<img  src='upload/avatar.jpg' class='avatar-img rounded-circle border border-4 border-body'>";
                    } 
                    else 
                    {
                    echo "<img  src='upload/".$row['photo']."' class='avatar-img rounded-circle border border-4 border-body'>";
                    }
                    echo "<br>";
                      }
                  ?>

                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <a href="profile.php" class="dropdown-item">View Profile</a>
                  <hr class="dropdown-divider">
                  <a href="logout.php" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>
            

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>