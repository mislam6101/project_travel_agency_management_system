<?php
include_once('../admin/db_config.php');
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Travelin Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="Travelin">

  <title>Travelin - Travel Tour Booking HTML Templates</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="main-wrapper">

    <!-- sidebar starts -->
    <?php include("sidebar_dashboard.php") ?>
    <!-- sidebar Ends -->

    <div class="page-wrapper">

      <!-- navbar Starts -->
      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form w-25">
            <div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                  <p>6 New Notifications</p>
                  <a class="text-muted">Clear all</a>
                </div>
                <div class="p-1">
                  <a class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>New Order Recieved</p>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>Server Limit Reached!</p>
                      <p class="tx-12 text-muted">1 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                  <a>View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="wd-30 ht-30 rounded-circle" src="../images/reviewer/1.jpg" alt="profile">
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                  <div class="mb-3">
                    <img class="wd-80 ht-80 rounded-circle" src="../images/reviewer/1.jpg" alt="">
                  </div>
                  <div class="text-center">
                    <p class="tx-16 fw-bolder">Nelson Kelly Burton</p>
                    <p class="tx-12 text-muted">nelsonn@gmail.com</p>
                  </div>
                </div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
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
                  </li>
                  <li class="dropdown-item py-2">
                    <a class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navbar Ends -->

      <!-- Page Content Starts -->
      <div class="page-content">

        <nav class="page-breadcrumb d-flex align-items-center justify-content-between">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider</li>
          </ol>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addslider"><i class="link-icon" data-feather="plus"></i> Add Slider</button>
        </nav>

        <div class="search-box p-4 bg-white rounded mb-3 box-shadow">
          <form class="forms-sample">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <h5>Booked List</h5>
              </div>
              <div class="col-lg-6 col-md-4">
                <input type="text" placeholder="Search by slider title" class="form-control">
              </div>
              <div class="col-lg-3 col-md-4">
                <select class="form-select form-select-lg">
                  <option selected>Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Catagory</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th class="text-center">Advance</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Cancel</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $c_id = $_SESSION['id'];
                      $sql = "SELECT * FROM air_tick_req WHERE `client_id` = '$c_id' ORDER BY id DESC";
                      $rawData = $db->query($sql);
                      while ($row = $rawData->fetch_object()):
                      ?>
                        <tr>
                          <td>travel</td>
                          <td><?php echo $row->from; ?></td>
                          <td><?php echo $row->to; ?></td>
                          <td><?php echo $row->departure; ?></td>
                          <td><?php echo $row->price; ?></td>
                          <td class="text-center"><a href="payment_ssl/example_hosted.php?id=<?php echo $row->id; ?>"><button type="submit" class="btn btn-success">Pay</button></a></td>
                          <td class="text-center"><button class="<?php if ($row->status == "Pendding") {
                                                                    echo 'btn btn-dark';
                                                                  } else if ($row->status == "Confirmed") {
                                                                    echo 'btn btn-success';
                                                                  } else {
                                                                    echo 'btn btn-danger';
                                                                  } ?>" disabled><?php echo $row->status; ?></button></td>
                          <td class="text-center"><button class="btn btn-light">CANCEL</button></td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="dataTables_paginate">
            <ul class="pagination">
              <li class="paginate_button page-item">
                <a href="#" class="page-link">Previous</a>
              </li>
              <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
              <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
              <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
              <li class="paginate_button page-item"><a href="#" class="page-link">Next</a></li>
            </ul>
          </div>
        </div>

      </div>
      <!-- Page Content Ends -->

      <!-- footer Starts -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
        <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="../index.html" target="_blank">Travelin</a>.</p>
        <p class="text-muted">Powered By <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i> Bizberg Themes</p>
      </footer>
      <!-- footer Ends -->

    </div>
  </div>

  <div class="modal fade" id="addslider" tabindex="-1" aria-labelledby="addslider" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
        </div>
        <div class="modal-body">
          <form class="forms-sample">
            <div class="mb-3">
              <label for="subtitle" class="form-label"> Slider Sub Title</label>
              <input type="text" class="form-control" id="subtitle" autocomplete="off" placeholder="">
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Slider Title</label>
              <input type="text" class="form-control" id="title" placeholder="">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Slider Description</label>
              <input type="number" class="form-control" id="password" autocomplete="off" placeholder="">
            </div>
            <div class="mb-3">
              <label for="upload" class="form-label">Upload Images</label>
              <input class="form-control" type="file" id="upload">
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Slider Button</label>
              <input type="text" class="form-control" id="title" placeholder="">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary"><i class="link-icon" data-feather="plus"></i> Create Slider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- core:js -->
  <script src="assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="assets/vendors/feather-icons/feather.min.js"></script>
  <script src="assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="assets/js/tinymce.js"></script>
  <script src="assets/js/datepicker.js"></script>
  <!-- End custom js for this page -->

</body>

</html>