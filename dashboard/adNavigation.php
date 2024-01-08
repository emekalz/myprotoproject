<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand"">
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
                  <img src="assets/img/avatars/profiles/avatar-9.jpg" class="avatar-img rounded-circle" alt="...">
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
                <a class="nav-link" href="adHome.php" role="button" aria-expanded="false" >
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
                      <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                        Projects
                      </a>
                      <div class="collapse " id="sidebarProfile">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="adProject.php" class="nav-link ">
                              Create Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="adManageProject.php" class="nav-link ">
                              Manage Projects
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarTeam" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                        Tasks
                      </a>
                      <div class="collapse " id="sidebarTeam">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="adTask.php" class="nav-link ">
                              Create Tasks
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="adManageTask.php" class="nav-link ">
                              Manage Tasks
                            </a>
                          </li>
                        </ul>
                      </div>
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
                      <a href="adNotificationCreate.php" class="nav-link ">
                        Create Notifications
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="adReplyView.php" class="nav-link ">
                        View Notification Reply
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="adNotificationView.php" class="nav-link ">
                        Manage Notifications
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
            <a href="adlogout.php" class="btn btn-block btn-danger mb-4">
              <i class="fe fe-log-out mr-2"></i> Logout
            </a>
            
      
            
            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">
        
              <div class="dropup">
          
                <!-- Toggle -->
                <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="assets/img/avatars/profiles/avatar-9.jpg" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <!-- <a href="profile-posts.html" class="dropdown-item">View Profile</a>
                  <a href="settings.html" class="dropdown-item">Change Password</a> -->
                  <!-- <hr class="dropdown-divider">
                  <a href="adlogout.php" class="dropdown-item">Logout</a> -->
                </div>

              </div>

            </div>
            

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>