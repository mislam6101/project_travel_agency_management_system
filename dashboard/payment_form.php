<?php
include_once('../admin/db_config.php');
ob_start();
session_start();
$b_id = $_REQUEST['id'];
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
    <?php include ("sidebar_dashboard.php") ?>
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

				<!-- <nav class="page-breadcrumb d-flex align-items-center justify-content-between">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Package</li>
					</ol>
                    <a href="events.html" class="btn btn-primary"><i class="link-icon" data-feather="arrow-left"></i> Back To List</a>
				</nav> -->

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="row forms-sample" method="post" enctype="multipart/form-data">
                                    <label for="subtitle" class="form-label"> <h2>Payment Details</h2> </label>
                                    <?php
                                    $c_name = $_SESSION['name'];
                                    $c_email = $_SESSION['email'];
                                    if(isset($_REQUEST['click'])){
                                    extract($_REQUEST);
                                    $sql = "INSERT INTO payment_details VALUES(NULL, '$b_id', '$name', '$email', '$method', '$trans_id', '$passport_num', NULL)";
                                    $db->query($sql);
                                    $sql2 = "UPDATE air_tick_req SET `status`='Payment Proccessing' WHERE air_tick_req.id = '$b_id'";
                                    $db->query($sql2);
                                    $db->close();
                                    header("Location:slider.php");
                                    }
                                    ?>
                                    <div>
                                        <label for="subtitle" class="form-label"> </label>
                                        <input type="text" class="form-control" id="subtitle" autocomplete="off" name="name" value="<?php echo $c_name ?>">
                                    </div>
                                    <div>
                                        <label for="subtitle" class="form-label"> </label>
                                        <input type="text" class="form-control" id="subtitle" autocomplete="off" name="email" value="<?php echo $c_email; ?>">
                                    </div>
                                    <!-- <div>
                                        <label for="upload" class="form-label">Upload Your Image</label>
                                        <input class="form-control" type="file" id="upload" name="photo">
                                    </div> -->
                                    <div>
                                        <label for="subtitle" class="form-label"> </label>
                                        <select class="form-control" name="method" id="">
                                            <option value="">Select Payment Method</option>
                                            <option value="Bank">Bank</option>
                                            <option value="bkash">Bkash</option>
                                            <option value="Nogod">Nogod</option>
                                            <option value="Rocket">Rocket</option>
                                            <option value="Upay">Upay</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="subtitle" class="form-label"> </label>
                                        <input type="text" class="form-control" id="subtitle" autocomplete="off" name="trans_id" placeholder="Transiction ID or Account Number">
                                    </div>
                                    <div>
                                        <label for="subtitle" class="form-label"> </label>
                                        <input type="text" class="form-control" id="subtitle" autocomplete="off" name="passport_num" placeholder="Passport Number(If you want abroad ticket)" value="">
                                    </div>
                                    <label for="subtitle" class="form-label"> </label>
                                    <label for="subtitle" class="form-label"> </label>
                                    <div class="text-right">
                                        <button type="submit" name="click" class="btn btn-primary"> Send </button>
                                    </div>
                                    </form>
                            </div>
                        </div>
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