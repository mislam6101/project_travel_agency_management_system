<?php error_reporting(0); ?>
  <header class="main_header_area">
      <!-- Navigation Bar -->
      <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div style="width:250px" class="navbar-header">
                <a class="navbar-brand" href="index.php">
                  <img src="images/tod-logo.png" class="w-75" alt="image" />
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                <ul  style="padding-right : 120px" class="nav navbar-nav" id="responsive-menu">

                  <li> <a href="index.php">Home </a> | </li>

                  <li><a href="tour_packages.php">Tours</a> |</li>

                  <li><a href="flights.php">Flights & Cruises</a> |</li>
                  
                  <li><a href="ressorts_users.php">Ressorts</a> |</li>

                  <li><a href="about.php">About Us</a> |</li>
                    
                  <li><a href="blogs.php">Blogs</a></li>
                  
                </ul><?php if(!$_SESSION['id']){ ?>
                    <a href="login.php" class="nir-btn px-3 py-1 ms-3">Login / SignUp</a>
                    <?php }
                    else{
                      $c_id = $_SESSION['id'];
                      $sql = "SELECT * FROM clients WHERE clients.id = '$c_id'";
                      $rawData = $db->query($sql);
                      $row = $rawData->fetch_object();
                    ?>
                    <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div style="width : 40px"><img class="wd-30 ht-30 rounded-circle" src="<?php echo $row->photo; ?>" alt="profile"></div>
                  </a>
                  <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                      <div style="width : 80" class="mb-3">
                        <img class="wd-80 ht-80 rounded-circle" src="<?php echo $row->photo; ?>" alt="">
                      </div>
                      <div class="text-center">
                        <p class="tx-16 fw-bolder"><?php echo $row->name; ?></p>
                        <p class="tx-12 text-muted"><?php echo $row->email; ?></p>
                      </div>
                    </div>
                    <ul class="list-unstyled p-1">
                      <li class="dropdown-item py-2">
                        <a href="dashboard/slider.php" class="text-body ms-0">
                          <i class="me-2 icon-md" data-feather="user"></i>
                          <span>Profile</span>
                        </a>
                      </li>
                      <!-- <li class="dropdown-item py-2">
                        <a class="text-body ms-0">
                          <i class="me-2 icon-md" data-feather="edit"></i>
                          <span>Edit Profile</span>
                        </a>
                      </li>
                      <li class="dropdown-item py-2">
                        <a class="text-body ms-0">
                          <i class="me-2 icon-md" data-feather="repeat"></i>
                          <span>Switch User</span>
                        </a>
                      </li> -->
                      <li class="dropdown-item py-2">
                        <a href="logout.php" class="text-body ms-0">
                          <i class="me-2 icon-md" data-feather="log-out"></i>
                          <span>Log Out</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <?php } ?>
              </div>
              <!-- /.navbar-collapse -->

              <div id="slicknav-mobile"></div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </nav>
      </div>
      <!-- Navigation Bar Ends -->
    </header>