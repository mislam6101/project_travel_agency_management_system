<?php
// include_once('db_config.php');
// session_start();

// if(!isset($_SESSION['email'])){
//   header('Location:index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<!-- Chartist CSS -->
<link rel="stylesheet" href="dist/plugins/chartist-js/chartist.min.css">
<link rel="stylesheet" href="dist/plugins/chartist-js/chartist-plugin-tooltip.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper boxed-wrapper">
  <?php include_once("inc/header.php") ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once ("inc/side_bar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Travelars of Destination</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Dashboard</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">New Orders</h6>
                <h1 class="text-white">5,500</h1>
                <span class="progress-description text-white"> 70% Increase in 30 Days </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-4"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">New Users</h6>
                <h1 class="text-white">2,040</h1>
                <span class="progress-description text-white"> 45% Increase in 30 Days </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-2"> <span class="info-box-icon bg-transparent"><i class="ti-bar-chart text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Online Revenue</h6>
                <h1 class="text-white">6,450</h1>
                <span class="progress-description text-white"> 65% Increase in 30 Days </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-3"> <span class="info-box-icon bg-transparent"><i class="ti-money text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Total Profit</h6>
                <h1 class="text-white">$ 8,590</h1>
                <span class="progress-description text-white"> 45% Increase in 30 Days </span> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      
      <div class="row">
        <div class="col-lg-6">
          <div class="card m-b-3">
            <div class="card-body">
              <h5 class="m-b-1">Sales Analytics</h5>
              <canvas id="line-chart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card m-b-3">
            <div class="card-body">
              <h5 class="m-b-1">Marketplaces</h5>
              <canvas id="bar-chart" height="150"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      
      <div class="row">
          <div class="info-box">
            <div class="card-header">
              <h5 class="card-title">Recent Sales <a class="btn btn-sm btn-primary pull-right text-white">View all</a></h5>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Categories</th>
                    <th>Progress</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>iPone X</td>
                    <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger btn-rounded">Mobile</button></td>
                    <td><div class="progress progress-sm">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                      </div></td>
                    <td>$ 5,500</td>
                  </tr>
                  <tr>
                    <td>OPPP</td>
                    <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"></td>
                    <td><button type="button" class="btn btn-sm btn-outline-success btn-rounded">Tablet</button></td>
                    <td><div class="progress progress-sm">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div></td>
                    <td>$ 3,450</td>
                  </tr>
                  <tr>
                    <td>iPad</td>
                    <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"></td>
                    <td><button type="button" class="btn btn-sm btn-outline-danger btn-rounded">Mobile</button></td>
                    <td><div class="progress progress-sm">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div></td>
                    <td>$ 1,040</td>
                  </tr>
                  <tr>
                    <td>OnePlus</td>
                    <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"></td>
                    <td><button type="button" class="btn btn-sm btn-outline-success btn-rounded">Tablet</button></td>
                    <td><div class="progress progress-sm">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div></td>
                    <td>$ 2,200</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-6">
          <div class="info-box">
            <div class="box box-widget">
              <div class="box-header with-border">
                <div class="user-block"> <img class="img-circle" src="dist/img/img1.jpg" alt="User Image"> <span class="username"><a href="#">Alexander Pierce</a></span> <span class="description">Shared publicly - 8:15 AM Today</span> </div>
              </div>
              <div class="box-body"> <img class="img-responsive pad" src="dist/img/img6.jpg" alt="Photo">
                <p>I took this photo this morning. What do you guys think?</p>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                <span class="pull-right text-muted">153 likes - 23 comments</span> </div>
              <div class="box-footer box-comments">
                <div class="box-comment"> <img class="img-circle img-sm" src="dist/img/img3.jpg" alt="User Image">
                  <div class="comment-text"> <span class="username"> Maria Gonzales <span class="text-muted pull-right">12:15 PM Today</span> </span> It is a long established fact that a reader will be distracted. </div>
                </div>
              </div>
              <div class="box-footer">
                <form action="#" method="post">
                  <img class="img-responsive img-circle img-sm" src="dist/img/img4.jpg" alt="Alt Text"> 
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div id="carouselExampleIndicators1" class="carousel slide m-b-3" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators1" data-slide-to="0" class=""></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="1" class="active"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item"> <img class="d-block w-100" src="dist/img/img8.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>First slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item active"> <img class="d-block w-100" src="dist/img/img7.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block w-100" src="dist/img/img9.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Third slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          <div class="m-b-3">
            <div class="soci-wid-box bg-facebook m-b-3">
              <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="col-lg-12 text-center">
                      <div class="sco-icon"><i class="icon-facebook"></i></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero.</p>
                      <p class="text-italic pt-1">- John Doe -</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="col-lg-12 text-center">
                      <div class="sco-icon"><i class="icon-facebook"></i></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero.</p>
                      <p class="text-italic pt-1">- John Doe -</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="col-lg-12 text-center">
                      <div class="sco-icon"><i class="icon-facebook"></i></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero.</p>
                      <p class="text-italic pt-1">- John Doe -</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Yourdomian. All rights reserved.</footer>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- Tab panes -->
    <div class="tab-content"> 
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
      <!-- /.tab-pane --> 
    </div>
  </aside>
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script>  
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/bizadmin.js"></script> 

<!-- Jquery Sparklines --> 
<script src="dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script> 
<script src="dist/plugins/jquery-sparklines/sparkline-int.js"></script> 

<!-- Chartjs JavaScript --> 
<script src="dist/plugins/chartjs/chart.min.js"></script> 
<script src="dist/plugins/chartjs/chart-int.js"></script> 

<!-- for demo purposes --> 
<script src="dist/js/demo.js"></script>
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
</body>
</html>
